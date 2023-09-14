<html>
<html>
<head>
<title>Registrar </title>
</head>
<body>
<?php
     include 'Controlador/Conexion.php';
        $colsulta= mysqli_query($conecta,"insert into comisiones(cod_tarifa,ciudad_com,
        comision,paquete_com,servicios_com,estrato_com,pago) 
        values('$_REQUEST[cod_tarifa]','$_REQUEST[ciudad_com]',
        $_REQUEST[comision],'$_REQUEST[paquete_com]',
        $_REQUEST[servicios_com],'$_REQUEST[estrato_com]',
        '$_REQUEST[pago]')") 
     or die("Problemas en el select".mysqli_error($conecta));
            mysqli_close($conecta);
            echo '<script language="javascript">alert("La comision fue registrada");
                 window.location = "Registrarcomision.html"; 
            </script>';

    ?>
</body>
</html>
