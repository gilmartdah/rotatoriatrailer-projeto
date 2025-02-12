<html>
    <head>
        <title>Lanche</title>
    </head>
<body>


    <form action="lanche.php" method="post">
        <div>
            <label>Nome Do Lanche</label>
            <input type="text" name="nomelanche">
        
            <label>Preço</label>
            <input type="number" name="preco">
        
            <label>Descriçâo</label>
            <input type="text" name="descricao">
            
        </div>

        <button>Cadastrar</button>


    </form>





</body>



</html>






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


if(!empty($_POST['nomelanche']) && !empty($_POST['preco']) && !empty($_POST['descricao']) ) {
  $nomelanche = $_POST['nomelanche'] ;
  $preco = $_POST['preco'] ;
  $descricao = $_POST['descricao'] ;
  


$sql = "SELECT * FROM lanches WHERE nomelanche = '$nomelanche'";
$result = $mysqli->query($sql);


if ($result->num_rows > 0 ) {
echo "Desculpe, Lanche está no sistema!";


}else{


    $sql_insert = "INSERT INTO lanches (nomelanche,preco,descricao) VALUES ('$nomelanche','$preco','$descricao')";
    if($mysqli->query($sql_insert) === TRUE) {
      echo "Cadastrado com sucesso";
    }
  }
}

?>