<?php
$con = mysqli_connect("localhost", "root", "");

if (!$con){
    die("Erro: ".mysqli_error($con));
}

if (!mysqli_select_db($con, "comunica")){
     die("Erro: ".mysqli_error($con));
}

?>