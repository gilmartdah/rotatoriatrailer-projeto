<?php

$servidor = "localhost";
$usuario = "root";
$senha = ""; 
$dbname = "trailer";


$mysqli = new mysqli($servidor,$usuario,$senha,$dbname);

if (!empty($_POST['item']) && !empty($_POST['preco'])  ) {


$item = $_POST['item'];
$preco  = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$email = $_POST['email'];




$sql_select = "SELECT item, preco, quantidade, email FROM carrinho WHERE email = '$email'";

$result_select = $mysqli->query($sql_select);

$sql_insert = "INSERT INTO finalizado (item, preco, quantidade,email) VALUES ('$item','$preco','$quantidade','$email')";


$result = $mysqli->query($sql_insert);

if ($result === TRUE){

    
    $sql_delete = "DELETE FROM carrinho WHERE email = '$email'";
if ($mysqli->query($sql_delete) === TRUE)  {
echo  "Deletado do carrinho";
}

}else{
    echo "error ao cadastrar";
}

}


?>