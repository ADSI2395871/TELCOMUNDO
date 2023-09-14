<html>
<head>
     <title>Eliminar Orden</title>
     <link href="Public/Css/formulario1.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php
    include 'Controlador/Conexion.php';
        $registros = sqlsrv_query($conecta, "select orden_trabajo from telcomundo.Informe_ventas where 
        orden_trabajo = '$_REQUEST[orden_trabajo]'") or
    die("Problemas en el select" .
        sqlsrv_error($conecta));
    if ($reg = sqlsrv_fetch_array($registros)) {
        sqlsrv_query($conecta, "delete from telcomundo.Informe_ventas
        where orden_trabajo=$_REQUEST[orden_trabajo]") or
    die("Problemas en el select:" .
        sqlsrv_error($conecta));
        echo "<script>alert('ORDEN  ELIMINADA');
             window.location = 'Inicio2Analista.php';    
                </script>
            ";  

    } else {
        echo "<script>alert('no se elimino orden intente de nuevo');
                    window.location = 'Eliminarorden1.php';
                </script>
            ";  

    }
    sqlsrv_close($conecta);
    ?>
</body>

</html>