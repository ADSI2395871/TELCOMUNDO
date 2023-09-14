<?php 
$servidor = "localhost:3306";
$usuario = "root";
$password = "";
$bd = "telcomundo3";
$conecta = mysqli_connect($servidor,$usuario,$password,$bd);
if($conecta->connect_error){
    die("Error al conectar base de datos".$conecta->error);
}


?>