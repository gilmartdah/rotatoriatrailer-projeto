<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trailler";

// Criar conexão
$mysqli = new mysqli($servername, $username, $password, $dbname);

$adm_email = $_SESSION['adminstradores'];

// Seleciona itens do carrinho
$sql_carrinho = "SELECT * FROM carrinho WHERE email = '$adm_email'";
$result = $mysqli->query($sql_carrinho);

if ($result->num_rows > 0) {

    echo "concluido com sucesso";

    while ($row = $result->fetch_assoc()) {
        $item = $row['item'];

        // Inserir no histórico com status padrão 'concluido com sucesso'
        $sql_historico = "INSERT INTO historico (email, item, status) VALUES ('$adm_email', '$item', 'concluido com sucesso')";
        $mysqli->query($sql_historico);

        // Deletar do carrinho
        $sql_delete = "DELETE FROM carrinho WHERE email = '$adm_email' AND item = '$item'";
        $mysqli->query($sql_delete);
    }
}

$mysqli->close();
?>
