<html>
<head>
     <title>Eliminar Comision</title>
     <link href="Public/Css/formulario1.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php
    include 'Controlador/Conexion.php';
        $registros = sqlsrv_query($conecta, "select cod_tarifa from telcomundo.Comisiones where 
        cod_tarifa = '$_REQUEST[cod_tarifa]'") or
    die("Problemas en el select:" .
        sqlsrv_error($conecta));
    if ($reg = sqlsrv_fetch_array($registros)) {
        sqlsrv_query($conecta, "delete from telcomundo.Comisiones
        where cod_tarifa='$_REQUEST[cod_tarifa]'") or
        die("Problemas en el select:" .
            sqlsrv_error($conecta));
                echo "<script>alert('Comision eliminada');
                    window.location = 'Inicio2Analista.php';
                        </script>
                        ";  

    } else {
        echo "<script>alert('no se elimino la comision intente de nuevo');
                    window.location = 'Eliminarcomision1.php';    
                </script>
            ";  

    }
    sqlsrv_close($conecta);
    ?>
</body>

</html>