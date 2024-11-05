<?php

$server = "localhost";
$user = "root";
$pass = "";
$bd = "RH";

if($con = mysqli_connect($server, $user, $pass, $bd)){
    //echo "Conectado";
} else{
    echo "erro!";
}