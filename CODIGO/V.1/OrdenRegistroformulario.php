<html>
<html>
<head>
<title>Pagina 2 en PHP para la conexion
con el Codigo de MYSQL </title>
</head>
<body>
<?php
   include 'Controlador/Conexion.php';
    $colsulta= mysqli_query($conecta,"insert into informe_ventas(orden_trabajo,
      paquete,servicios,estrato,ciudad,
      localidad,legalizacion,fecha,cod_tarifa,id_usuario,pago) 
      values($_REQUEST[orden_trabajo],
      '$_REQUEST[paquete]',$_REQUEST[servicios],'$_REQUEST[estrato]',
      '$_REQUEST[ciudad]','$_REQUEST[localidad]',
      '$_REQUEST[legalizacion]','$_REQUEST[fecha]',
      '$_REQUEST[cod_tarifa]',$_REQUEST[id_usuario],
      '$_REQUEST[pago]')") 
    or die("Problemas en el select".mysqli_error($conecta));
    mysqli_close($conecta);
    echo '<script language="javascript">alert("La venta fue registrada");
                window.location = "Inicio3Asesor.php"; 
         </script>';


?>
</body>
</html>