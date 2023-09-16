
<?php 

$connectionInfo = array("UID" => "CloudSAa141dee4", "pwd" => "", "Database" => "Telcomundo", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:telcomundoserv.database.windows.net,1433";
$conecta = sqlsrv_connect($serverName, $connectionInfo);

if($conecta){
    echo "";
}else{
    echo "fallo en la conexion";
    die(print_r(sqlsrv_errors(), true));
}
    ?>  


