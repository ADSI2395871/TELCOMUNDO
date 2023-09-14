<html>
<html>
<head>
<title>Registro de venta </title>
</head>
<body>
<?php
   include 'Controlador/Conexion.php';
   require 'controlador/config.php';
    
   if (isset($_POST['insert'])) {
    $orden_trabajo = $_POST['orden_trabajo'];
    $paquete = $_POST['paquete'];
    $servicios = $_POST['servicios'];
    $estrato = $_POST['estrato'];
    $ciudad = $_POST['ciudad'];
    $localidad = $_POST['localidad'];
    $fecha = $_POST['fecha'];
    $cod_tarifa = $_POST['cod_tarifa'];
    $id_usuario = $_SESSION['ID'];


    $insertar = "INSERT INTO telcomundo.informe_ventas(orden_trabajo,paquete,
    servicios,estrato,ciudad,localidad,fecha,cod_tarifa,id_usuario)VALUES('$orden_trabajo',
    '$paquete', '$servicios', '$estrato', '$ciudad', '$localidad', '$fecha', '$cod_tarifa',
    '$id_usuario')";

    $ejecutar = sqlsrv_query($conecta,$insertar);

    if($ejecutar){
        echo "
        <script>alert('VENTA REGISTRADA');
                    window.location = 'Inicio3Asesor.php';    
                </script>
            ";   
    }
    else {
        echo "CONEXION NO ESTABLECIDA";
    }

}