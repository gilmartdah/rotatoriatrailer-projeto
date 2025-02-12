<?php

echo "<link rel='stylesheet'  href='/arquivos/registrarrefrigerante.css'>";



echo "<div>";
echo "<h2>REGISTRAR REFRIGERENTE NO SISTEMA</h2>";
echo "</div";





echo  "<nav >";
echo  "<ul>";
      
          echo "<li><a href='/dashboard/paginas/online/cadastrar-clientes.php'>Registrar Clientes</a></li>";
          echo "<li><a href='/dashboard/paginas/online/registrar-pastel.php'>Registrar Pastel</a></li>";
          echo "<li><a href='/dashboard/paginas/online/registrar-lanche.php'>Registrar Lanche</a></li>";
          echo "<li><a href='/dashboard/paginas/online/registrar-espeto.php'>Registrar Espeto</a></li>";
          echo "<li><a href='/dashboard/sistema/pvd/online/2025/sistema-pvd-online.php'>Sitema PVD</a></li>";
      
echo  "</ul>";
echo "</nav>";

echo "<form action='' method='post'>";

echo "<div class='fom1'>";
echo "<label>Nome Refri</label>";
echo "<input type='text' name='nomerefri' required >";

echo "<label>Tamanho</label>";
echo "<input type='number' name='tamanhorefri' required>";
echo "<select name='sigla'>";
echo "<option>Litro</option>";
echo "<option>ML</option>";
echo "</select>";



 echo   "<label>preço</label>";
 echo    "<input type='number' name='preco'>";        
echo    "</div>";

echo    "<button>Registrar</button>";

echo "</form>";


?>

<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "trailler";

$mysqli = new mysqli($servidor,$usuario,$senha,$dbname);

if (!empty($_POST['nomerefri']) && !empty($_POST['tamanhorefri']) && !empty($_POST['sigla']) && !empty($_POST['preco'])) {


    $nomerefri = $_POST['nomerefri'];
    $tamanhorefri = $_POST['tamanhorefri'];
    $sigla = $_POST['sigla'];
    $preco = $_POST['preco'];

    
$selectrefri = "SELECT * FROM refrigentante WHERE nomerefri = '$nomerefri'";
$result = $mysqli->query($selectrefri);

echo "desculpe já existe no sistema";




if ($result->num_rows > 0) {

    
  
}else{

    $sql_insert = "INSERT INTO refrigentante (nomerefri,tamanhorefri,sigla,preco) VALUES ('$nomerefri','$tamanhorefri','$sigla','$preco')";
    if ($mysqli->query($sql_insert) === TRUE) {
        echo "cadastrado com sucesso";


    }

}

}

$mysqli->close();


?>