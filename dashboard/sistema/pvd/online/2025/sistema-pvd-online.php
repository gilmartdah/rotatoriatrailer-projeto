<?php

session_start();

if(isset($_SESSION['adminstradores'])) {

}else{
    echo "Não esta logado";

  header("location: /login-adm.php");
    exit();
}



echo "<link rel='stylesheet' href='/arquivos/css/menu.css' type='text/css'>";


echo "<div class='banner01'>";
echo   "<h2 id='text-sistema-pvd'>SISTEMA PVD - ROTATORIA TRAILLER</h2>";


echo "<h2 id='email_adm'>" . $_SESSION['adminstradores'] . "</h2>";


  echo  "<nav class='menu01' >";
      echo  "<ul>";
            
                echo "<li><a href='/dashboard/paginas/online/cadastrar-clientes.php'>Registrar Clientes</a></li>";
                echo "<li><a href='/dashboard/paginas/online/registrar-pastel.php'>Registrar Pastel</a></li>";
                echo "<li><a href='/dashboard/paginas/online/registrar-lanche.php'>Registrar Lanche</a></li>";
                echo "<li><a href='/dashboard/paginas/online/registrar-espeto.php'>Registrar Espeto</a></li>";
                echo "<li><a href='/dashboard/paginas/online/cadastrar-clientes.php'>Cadastrar Clientes</a></li>";
                echo "<li><a href='/dashboard/paginas/online/registrar-refrigentes.php'>Cadastrar Refrigenrante</a></li>";
            
 echo  "</ul>";
    echo "</nav>";


echo "</div>";

?>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trailler";

// Criar conexão
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Selecionar os usuários
$sql = "SELECT * FROM pastel ORDER BY id DESC";
$result = $mysqli->query($sql);





if ($result->num_rows > 0) {


    echo "<h3>PASTEIS </h3>";

    while($row = $result->fetch_assoc()) {

echo  "<div class='itens-cardapio'>";
echo  "<strong>" . $row['nomepastel'] . $row['descricao'] . $row['preco'] . "</strong>";


echo "<form action='insert.php' method='POST'>";
echo "<input type='hidden' name='item'  value='" . $row['nomepastel'] ."'>";
echo "<input type='number' name='quantidade'>";
echo "<input type='hidden' name='preco' value='" . $row['preco'] .  "'>";
echo "<button id='btn-adicionarcarrinho'>Adicionar no carrinho</button>";

echo "</div>";
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
$sql_select_refri = "SELECT * FROM refrigentante";
$result = $mysqli->query($sql_select_refri);





if ($result->num_rows > 0) {


    echo "<h3>REFRIGERANNTE</h3>";

    while($row = $result->fetch_assoc()) {

echo  "<div class='itens-cardapio'>";
echo  "<strong>" . $row['nomerefri'] . $row['tamanhorefri']  . $row['sigla'] . $row['preco'] . "</strong>";


echo "<form action='insert.php' method='POST'>";
echo "<input type='hidden' name='item'  value='" . $row['nomerefri'] ."'>";
echo "<input type='number' name='quantidade'   >";
echo "<input type='hidden' name='preco' value='" . $row['preco'] .  "'>";
echo "<button id='btn-adicionarcarrinho'>Adicionar no carrinho</button>";


echo "</form>";

echo "</div>";



  }
   
} else {
    echo "Desculpe Não foi, encotrado nenhum refrigerante";
}

$mysqli->close();
?>




<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trailler";


$mysqli = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM espeto ORDER BY PRECO DESC";
$result = $mysqli->query($sql);





if ($result->num_rows > 0) {


    echo "<h3>ESPETINHO</h3>";

    while($row = $result->fetch_assoc()) {

echo  "<div class='itens-cardapio2'>";
echo  "<strong id='viws'>" . $row['espetonome'] . $row['descricao'] . $row['preco'] . "</strong>";


echo "<form action='insert.php' method='POST'>";
echo "<input type='hidden' name='item'  value='" . $row['espetonome'] ."'>";
echo "<input type='number' name='quantidade'>";
echo "<input type='hidden' name='preco' value='" . $row['preco'] .  "'>";
echo "<button id='btn-adicionarcarrinho'>Adicionar no carrinho</button>";

echo "</div>";
echo "</form>";





  }
   
} else {
    echo "Desculpe Não foi encontrado os pastel no banco de banco de dados";
}



?>





<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trailler";

// Criar conexão
$mysqli = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM lanches";
$result = $mysqli->query($sql);


if ($result->num_rows > 0) {


    echo "<h3>LANCHE</h3>";

    while($row = $result->fetch_assoc()) {

echo  "<div class='itens-cardapio2'>";
echo  "<strong id='viws'>" . $row['nomelanche'] . $row['descricao'] . $row['preco'] . "</strong>";


echo "<form action='insert.php' method='POST'>";
echo "<input type='hidden' name='item'  value='" . $row['nomelanche'] ."'>";
echo "<input type='number' name='quantidade'>";
echo "<input type='hidden' name='preco' value='" . $row['preco'] .  "'>";
echo "<button id='btn-adicionarcarrinho'>Adicionar no carrinho</button>";

echo "</div>";
echo "</form>";





  }
   
} else {
    echo "Desculpe Não foi encontrado os pastel no banco de banco de dados";
}



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



if ($result->num_rows > 0) {

echo "<h1>Escolhe o  cliente correto </h1>";


echo "<select id='listacliente'>";
while ($row = $result->fetch_assoc()) {
    echo "<option>" . $row['nomecompleto'] . "</option>";
}
echo "</select>";




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

$adm_email = $_SESSION['adminstradores'];
                        
$sql_carrinho = "SELECT * FROM carrinho WHERE email = '$adm_email'";

$result = $mysqli->query($sql_carrinho);


if ($result->num_rows > 0) {

echo "<h1>CARRINHO </h1>";


while ($row = $result->fetch_assoc()) {

    echo "<div class='itemcarrinhoPvd'>";
  echo  "<label name='itens'>" . $row['item']  . $row['preco'] . "</label>";

  echo "<form action='vers.php' method='post'>";


  echo "<input  name='item' value='" . $row['item'] . "'>";
  echo  "<input name='quantidade'  value='"  .  $row['quantidade'] . "'>";
  echo "<input  value='" . $row['preco'] . "'>";
  echo "<button>deletar</button>";
echo "</form>";

  
}




} else {
    echo "<label>Carrinho Está vazio</label>";
}

$mysqli->close();


?>


<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "trailler";

$mysqli = new mysqli($servidor,$usuario,$senha,$dbname);



$result = $mysqli->query($sql);



echo "<h2>ESCOLHE UMA FORMA DE PAGAMENTO</h2>";

if ($result->num_rows > 0) {


    while($row = $result->fetch_assoc());
     

  
   echo "</form>";
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
