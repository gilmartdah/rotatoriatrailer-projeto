<?php


session_start();



$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "trailler";

$mysqli = new mysqli($servidor,$usuario,$senha,$dbname);

if (!empty($_POST['espetonome']) && !empty($_POST['descricao']) && !empty($_POST['preco'])) {
$espetonome = $_POST['espetonome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

$selectespeto = "SELECT * FROM espeto  WHERE espetonome = '$espetonome' AND descricao = '$selectespeto' AND preco = '$preco' ";
$result = $mysqli->query($selectespeto);





if ($result->num_rows > 0) {

echo "Esse Espeto já está no sistema";
}
else{

    $sql_insert = "INSERT INTO espeto (espetonome,descricao,preco) VALUES ('$espetonome','$descricao','$preco')";

   if ($mysqli->query($sql_insert) === true) {
   echo "cadastrado com sucess";
   }

}


}

$mysqli->close();

?>


<?php


echo "<link rel='stylesheet'   href='/arquivos/css/registrarespeto.css'>";


echo "<div class='banner1'>";
echo "<h2 id='text11'>REGISTRAR NO SISTEMA</h2>";
echo "<h2 id=''>" . $_SESSION['adminstradores'] . "</h2>" ;

echo "</div>";


echo  "<nav >";
echo  "<ul>";
      
          echo "<li><a href='/dashboard/paginas/online/cadastrar-clientes.php'>Registrar Clientes</a></li>";
          echo "<li><a href='/dashboard/paginas/online/registrar-pastel.php'>Registrar Pastel</a></li>";
          echo "<li><a href='/dashboard/paginas/online/registrar-lanche.php'>Registrar Lanche</a></li>";
          echo "<li><a href='/dashboard/paginas/online/registrar-espeto.php'>Registrar Espeto</a></li>";
          echo "<li><a href='/dashboard/sistema/pvd/online/2025/sistema-pvd-online.php'>Sitema PVD</a></li>";
      
echo  "</ul>";
echo "</nav>";








echo "<div class='persoform'>";
echo "<form   action='' method='post'>";


echo "<label>Nome Espeto</label>";
echo "<input type='text' name='espetonome'>";

echo "<label>Descrição</label>";
echo "<input type='text' name='descricao'>";

echo "<label>Preço</label>";
echo "<input type='number' name='preco'>"; 

echo "<button>Cadastrar</button>";
echo "</form>";
echo "<div>";


?>
  



