<html>
<head>
     <title>Orden borrada</title>
     <link href="Public/Css/formulario1.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php
    include 'Controlador/Conexion.php';
        $registros = mysqli_query($conecta, "select orden_trabajo from Informe_ventas where 
        orden_trabajo = '$_REQUEST[orden_trabajo]'") or
    die("Problemas en el select:" .
        mysqli_error($conecta));
    if ($reg = mysqli_fetch_array($registros)) {
        mysqli_query($conecta, "delete from Informe_ventas
        where orden_trabajo=$_REQUEST[orden_trabajo]") or
        die("Problemas en el select:" .
        mysqli_error($conecta));
        echo "<script>alert('ORDEN  ELIMINADA');
             window.location = 'Inicio2Analista.php';    
                </script>
            ";  

    } else {
        echo "<script>alert('no se elimino orden intente de nuevo');
                    window.location = 'Eliminarorden.html';    
                </script>
            ";  

    }
    mysqli_close($conecta);
    ?>
</body>

</html>