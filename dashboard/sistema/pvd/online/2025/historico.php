<?php

session_start();



$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "trailer";

$mysqli = new mysqli($servidor,$usuario,$senha,$dbname);

$email = $_SESSION['adminstradores'];

$sql = "SELECT * FROM finalizado  ORDER BY item DESC";

$result = $mysqli->query($sql);



if ($result->num_rows > 0) {


echo "<h2>HISTORICO DE VENDAS PRESENCIAL V1.O</h2>";


    while ($row = $result->fetch_assoc()) { 

echo "<label id=''>" . $row['email'] . "&nbsp".   $row['item'] .   "&nbsp" . $row['dataehorafinalizado'] .  "</label>"; 



}



}
?>