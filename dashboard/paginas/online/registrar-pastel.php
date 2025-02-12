<?php

echo "<div class='bannerpastel'>";
echo "<h2>REGISTRAR PASTEL NO SISTEMA</h2>";
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



?>



<html>
    <head>
        

    </head>

<body>

<form action="" method="post">

<label>Nome Pastel</label>
<input type="text" name="nomepastel">

<label>Descrição Pastel</label>
<input type="text" name="descricao">

<label>Preco</label>
<input type="number" name="preco">


<button>Cadastrar</button>

</form>


</body>




</html>



<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "trailler";

$mysqli = new mysqli($servidor,$usuario,$senha,$dbname);


if (!empty($_POST['nomepastel'])  && !empty($_POST['descricao']) && !empty($_POST['preco'])) {

  $nomepastel = $_POST['nomepastel'];
  $descricao = $_POST['descricao'];
  $preco = $_POST['preco'];

  $sql = "SELECT * FROM pastel WHERE nomepastel = '$nomepastel'";


  $result = $mysqli->query($sql);


if ($result->num_rows > 0 ) {

  echo "Esse Pastel, já está no banco de dados";

}else{



    $sql_insert = "INSERT INTO pastel (nomepastel,preco,descricao) VALUES ('$nomepastel','$preco','$descricao')";
    if($mysqli->query($sql_insert) === TRUE) {
      echo "Cadastrado com sucesso";
    }


} 
}


?>

<?php

echo "<link rel='stylesheet' href='/arquivos/css/registrarpastel.css'>";

?>