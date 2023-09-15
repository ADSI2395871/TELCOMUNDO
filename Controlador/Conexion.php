<?php
$serverName = "telcomundoserv.database.windows.net";
$connectionInfo = array( 
 "Database"=>"Telcomundo",
 "UID"=>"CloudSAa141dee4",
 "PWD"=>"3202658914@ADSI",
 "TrustServerCertificate"=>true
);
$conecta = sqlsrv_connect( $serverName, $connectionInfo);
?>

if($conecta){
    echo "";
}else{
    echo "fallo en la conexion";
    die(print_r(sqlsrv_errors(), true));
}
    ?>  


