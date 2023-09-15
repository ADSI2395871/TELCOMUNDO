<?php 
$serverName = 'tcp:telcomundoserv.database.windows.net,1433';//Nombre del servidor
$connectionInfo = array ("Database"=>"Telcomundo","UID"=>"CloudSAa141dee4", "PWD"=>"{your_password_here}");
$conecta = sqlsrv_connect($serverName, $connectionInfo);

if($conecta){
    echo "";
}else{
    echo "fallo en la conexion";
    die(print_r(sqlsrv_errors(), true));
}
    ?>  
