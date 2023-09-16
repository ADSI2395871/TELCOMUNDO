<?php 
session_start();
$connectionInfo = array("UID" => "CloudSAa141dee4", "pwd" => "Telcomundo*", "Database" => "Telcomundo", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:telcomundoserv.database.windows.net,1433";
$conecta = sqlsrv_connect($serverName, $connectionInfo);

if($conecta){
    // CONEXION EXITOSA;
}else{
    // "fallo en la conexion";
    die(print_r(sqlsrv_errors(), true));
}
    ?>  


