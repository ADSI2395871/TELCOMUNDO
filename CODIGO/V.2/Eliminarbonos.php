<html>
<head>
     <title>Bono o descuento eliminado</title>
     <link href="Public/Css/formulario1.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php
    include 'Controlador/Conexion.php';
        $registros = sqlsrv_query($conecta, "select id_bono from telcomundo.Bonos_descuentos where 
        id_bono = '$_REQUEST[id_bono]'") or
    die("Problemas en el select:" .
        sqlsrv_error($conecta));
    if ($reg = sqlsrv_fetch_array($registros)) {
        sqlsrv_query($conecta, "delete from telcomundo.Bonos_descuentos
        where id_bono=$_REQUEST[id_bono]") or
        die("Problemas en el select:" .
        sqlsrv_error($conecta));
        echo "<script>alert('BONO O DESCUENTO ELIMINADO');
             window.location = 'Inicio2Analista.php';    
                </script>
            ";  

    } else {
        echo "<script>alert('no se elimino bono o descuento intente de nuevo');
                    window.location = 'Eliminarbonos1.php';    
                </script>
            ";  

    }
    sqlsrv_close($conecta);
    ?>
</body>

</html>