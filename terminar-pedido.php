<?php


session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trailer";

// Criar conexão
$mysqli = new mysqli($servername, $username, $password, $dbname);

$adm_email = $_SESSION['adminstradores'];
$sql_carrinho = "SELECT * FROM carrinho WHERE email = '$adm_email'";

$result = $mysqli->query($sql_carrinho);


if ($result->num_rows > 0) {

echo "<h1>FINALIZAR PEDIDOS </h1>";



while ($row = $result->fetch_assoc()) {

    echo "<div class='itemcarrinhoPvd'>";
  echo "<form action='finalizar.php' method='post'>";






  echo "<input type='hidden' name='item' value='" . $row['item'] . "'>";
  echo  "<input type='hidden' name='quantidade'  value='"  .  $row['quantidade'] . "'>";
  echo "<input  type='hidden' name='preco' value='" . $row['preco'] . "'>";
  echo "<input type='' name='email'  value='" . $row['email'] . "'>";

  
}
echo "<button>FINALIZAR</button>";


                    
echo "<select name='pagamento'>";
echo "<option>Cartão de cretido</option>";
echo "<option>Cartão de Debito</option>";
echo "<option>Dinheiro a vista</option>";
echo "<option>Pagar Depois</option>";
echo "</select>";

echo "</form>";


} else {
    echo "<label>Carrinho Está vazio</label>";
}

$mysqli->close();



?>