<?php

session_start();

if (isset($_SESSION['adm'])) {

echo "logado com sucesso";

header("location: /dashboard/dashboard.html");

exit();

}else{
    echo "não está logado";
}

?>





<html>
    <head>


    </head>


    <body>

<div class="banner1">
    <h3>SEJA BEM VINDOS </h3>


    <button id="login">Login</button>

<nav>

<li><a href='login-adm.php'>LOGIN ADMINADORE</a></li>

        </nav>


</div>

<div>
    <p>ESSE SISTEMA , AINDA NÃO ESTÁ NO AR APENAS LOCAL</p>
</div>




    </body>


</html>