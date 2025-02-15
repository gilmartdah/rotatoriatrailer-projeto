<?php
session_start();

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "trailer";


$mysqli = new mysqli($servidor,$usuario,$senha,$dbname);

$item = $_POST['item'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];
$email = $_SESSION['adminstradores'];


$sql = "SELECT * FROM carrinho WHERE item = '$item'";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc());
    echo "Desculpe já existe";

}else{
    $sqls = "INSERT INTO carrinho (item,quantidade,preco,email) VALUES ('$item','$quantidade','$preco','$email')";

    if ($mysqli->query($sqls) === TRUE) {
        echo "cadastrado com sucesso";
    
    }


}


$mysqli->close();

?>