<?php 
$serverName = 'telcomundoserv.database.windows.net';//Nombre del servidor
$connectionInfo = array ("Database"=>"Telcomundo","UID"=>"CloudSAa141dee4","CharacterSet"=>"UTF-8");
$conecta = sqlsrv_connect($serverName, $connectionInfo);

if($conecta){
    echo "";
}else{
    echo "fallo en la conexion";
    die(print_r(sqlsrv_errors(), true));
}
    ?>  
