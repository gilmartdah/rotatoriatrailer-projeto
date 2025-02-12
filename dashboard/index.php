<?php

session_start();

if (isset($_SESSION['adm'])){

    echo "logado com sucess";

    header("location: ../dashboard/sistema/pvd/online/2025/sistema-pvd-online.php");

}else{

echo "error ao deslogar";
}


?>