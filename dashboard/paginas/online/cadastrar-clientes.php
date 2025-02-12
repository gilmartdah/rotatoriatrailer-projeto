<?php



echo "<form action='' method='post'>";
echo "<label>Nome Completo</label>";
echo "<input type='text' name='nomecompleto'>";
echo "<label>Telefone</label>";
echo "<input type='tel' name='telefone'>";
echo "<button type='submit'>Cadastrar Cliente</button>";
echo "</form>";

?>





<?php


echo  "<nav >";
echo  "<ul>";
      
          echo "<li><a href='/dashboard/paginas/online/cadastrar-clientes.php'>Registrar Clientes</a></li>";
          echo "<li><a href='/dashboard/paginas/online/registrar-pastel.php'>Registrar Pastel</a></li>";
          echo "<li><a href='/dashboard/paginas/online/registrar-lanche.php'>Registrar Lanche</a></li>";
          echo "<li><a href='/dashboard/paginas/online/registrar-espeto.php'>Registrar Espeto</a></li>";
          echo "<li><a href='/dashboard/sistema/pvd/online/2025/sistema-pvd-online.php'>Sitema PVD</a></li>";
      
echo  "</ul>";
echo "</nav>";




$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "trailler";

$mysqli = new mysqli($servidor,$usuario,$senha,$dbname);


if (!empty($_POST['nomecompleto']) && !empty($_POST['telefone'])) {

$nomecompleto = $_POST['nomecompleto'];
$telefone = $_POST['telefone'];

$sql = "SELECT * FROM cliente  WHERE nomecompleto = '$nomecompleto'";
$result = $mysqli->query($sql);





if ($result->num_rows > 0) {

    echo "Esse Cliente , já está Cadastrado no sistema";

}
else{

    $sql_insert = "INSERT INTO cliente (nomecompleto,telefone) VALUES ('$nomecompleto','$telefone')";
    if ($mysqli->query($sql_insert) === TRUE) {
echo "cadastrado com sucesso";

    }

}

}
?>