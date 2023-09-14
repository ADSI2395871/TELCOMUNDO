<html>
<html>
<head>
<title>Registrar </title>
</head>
<body>
<?php
     include 'Controlador/Conexion.php';
     require 'controlador/config.php';
    if (isset($_POST['insert'])) {
        $cod_tarifa = $_POST['cod_tarifa'];
        $ciudad_com = $_POST['ciudad_com'];
        $comision = $_POST['comision'];
        $paquete_com = $_POST['paquete_com'];
        $servicios_com = $_POST['servicios_com'];
        $estrato_com = $_POST['estrato_com'];
        $pago = $_POST['pago'];

        $insertar = "INSERT INTO telcomundo.comisiones(cod_tarifa,ciudad_com,comision,paquete_com,
        servicios_com,estrato_com,pago)VALUES('$cod_tarifa','$ciudad_com','$comision','$paquete_com',
        '$servicios_com','$estrato_com','$pago')";

        $ejecutar = sqlsrv_query($conecta,$insertar);

        if($ejecutar){
            echo "
            <script>alert('Comision registrada');
                        window.location = 'Inicio2Analista.php';    
                    </script>
                ";   
        }
        else {
            echo "
            <script>alert('No se registro la comisión intente nuevamente');
                        window.location = 'Inicio2Analista.php';    
                    </script>
                ";   
        }
}
?>