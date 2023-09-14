<html>
<head>
     <title>Bono o descuento eliminado</title>
     <link href="Public/Css/formulario1.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php
    include 'Controlador/Conexion.php';
        $registros = mysqli_query($conecta, "select id_bono from Bonos_descuentos where 
        id_bono = '$_REQUEST[id_bono]'") or
    die("Problemas en el select:" .
        mysqli_error($conecta));
    if ($reg = mysqli_fetch_array($registros)) {
        mysqli_query($conecta, "delete from Bonos_descuentos
        where id_bono=$_REQUEST[id_bono]") or
        die("Problemas en el select:" .
        mysqli_error($conecta));
        echo "<script>alert('BONO O DESCUENTO ELIMINADO');
             window.location = 'Inicio2Analista.php';    
                </script>
            ";  

    } else {
        echo "<script>alert('no se elimino bono o descuento intente de nuevo');
                    window.location = 'Eliminarbonos.html';    
                </script>
            ";  

    }
    mysqli_close($conecta);
    ?>
</body>

</html>