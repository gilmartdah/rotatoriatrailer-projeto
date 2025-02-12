<?php

session_start();


if (isset($_SESSION['adm'])) {



    echo "logado com sucessos";

    header("location: dashboard\dashboard.html");
}else{

}



echo  "<link rel='stylesheet' href='arquivos\css\login.css' type='text/css'>";


echo  "<div class='titulo1'>";
echo  "<h2>LOGIN - ADMISTRADORES</h2>";



echo "</div>";

echo "<form action='' method='post'>";
echo    "<div class='form-login'>";
echo  "<label>Email</label>";
echo  "<input type='text'  name='email'>";
echo    "<label>Senha</label>";
echo   "<input type='password' name='senha'>";





echo "<div class='checkbox-entrada'>";    
echo "<input type='checkbox' name='login' required>";
echo "<label>CONFIRMAR LOGIN</label>";
echo "</div>";
echo "<button class='btn-login'>Realizar Login</button>";
echo "</div>";
echo "</form>";
    


?>



<?php



$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "trailler";

$mysqli = new mysqli($servidor,$usuario,$senha,$dbname);

if (!empty($_POST['email']) && !empty($_POST['senha'])) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];


$sql = "SELECT id FROM adminstradores WHERE email = '$email' AND  senha = '$senha'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0 ) {
    while ($row = $result->fetch_assoc()) {

$_SESSION['adminstradores'] = $email;

        echo  'Logado com sucesso';
    
    header('location: dashboard\dashboard.html');
    
    }
        
}else{
    echo 'Desculpe , Email ou senha Não foi encontrado no banco de dados!';

}

   
}



$mysqli->close();

?>