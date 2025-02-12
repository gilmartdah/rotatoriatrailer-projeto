<?PHP

session_start();


if (isset($_SESSION['adminstradores'])){


}else{
  echo "Desculpe , Você, não tem acesso nessa pagina";
  header("location: /login-adm.php");
  exit();
}


echo $_SESSION['adminstradores']; 
                


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trailler";

// Criar conexão
$mysqli = new mysqli($servername, $username, $password, $dbname);

// selecionar pastel
$sql = "SELECT * FROM pastel";
$result = $mysqli->query($sql);


echo "<link rel='stylesheet' href='re.php' type='text/css'>";


if ($result->num_rows > 0) {
    echo "<h2>PASTEL</h2>";

    while($row = $result->fetch_assoc()) {

     echo "<div class='card'>";
    echo "<label>" . $row['nomepastel'] . $row['descricao'] . $row['preco'] .  "</label>";
echo "</div>";


echo "<form action='deletar.php' method='post'>";
echo "<input type='hidden'  name='nomepastel'  value='" . $row['nomepastel'] . "'>";
echo "</form>";

  }
   
} else {
    echo "Desculpe Não foi encontrado os pastel no banco de banco de dados";
}

$mysqli->close();
?>





<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trailler";

// Criar conexão
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Selecionar os usuários
$sql = "SELECT * FROM refrigentante";
$result = $mysqli->query($sql);


echo "<link rel='stylesheet' href='re.css' type='text/css'>";


if ($result->num_rows > 0) {
echo "<h2>REFRIGERANTE</h2>";
    while($row = $result->fetch_assoc()) {
     echo "<div class='card'>";
    echo "<label>" . $row['nomerefri'] . $row['tamanhorefri'] . $row['sigla'] . $row['preco'] .  "</label>";
echo "</div>";


  }
   
} else {
    echo "0 resultados";
}

$mysqli->close();
?>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trailler";

// Criar conexão
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Selecionar os usuários
$sql = "SELECT * FROM espeto";
$result = $mysqli->query($sql);


echo "<link rel='stylesheet' href='re.css' type='text/css'>";


if ($result->num_rows > 0) {

echo "<h1>Espetinhos</h1>";


    while($row = $result->fetch_assoc()) {
     echo "<div class='card'>";
    echo "<label>" . $row['espetonome'] . $row['descricao'] . $row['preco'] .  "</label>";
   
echo "</div>";

echo "<form action='deletar.php' method='post'>";
echo "<input type='checkbox'  name='espetonome'  value='" . $row['espetonome'] . "'>";



  }
   
} else {
    echo "0 resultados";
}

$mysqli->close();
?>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trailler";

// Criar conexão
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Selecionar os usuários
$sql = "SELECT * FROM lanches";
$result = $mysqli->query($sql);


echo "<link rel='stylesheet' href='re.css' type='text/css'>";


if ($result->num_rows > 0) {

echo "<h1>LANCHES</h1>";


    while($row = $result->fetch_assoc()) {
     echo "<div class='card'>";
    echo "<label>" . $row['nomelanche'] . $row['preco'] . $row['descricao'] .  "</label>";
   
echo "</div>";
  }
   
} else {
    echo "0 resultados";
}

$mysqli->close();
?>





















<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trailler";

// Criar conexão
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Selecionar os usuários
$sql = "SELECT * FROM cliente";
$result = $mysqli->query($sql);


echo "<link rel='stylesheet' href='re.css' type='text/css'>";


if ($result->num_rows > 0) {

echo "<h1>CLIENTES REGISTRADOS</h1>";


    while($row = $result->fetch_assoc()) {
     echo "<div class='card'>";
    echo "<label>" . $row['nomecompleto'] . $row['email'] . $row['telefone'] .  "</label>";
   
echo "</div>";
  




echo "<form action='deletar.php' method='post'>";
echo "<input type='radio'  name='nomecompleto'  value='" . $row['nomecompleto'] . "'>";
echo "<button>Excluir clientes do sistema</button>";

}




echo "</form>";



   
} else {
    echo "0 resultados";
}

$mysqli->close();
?>
