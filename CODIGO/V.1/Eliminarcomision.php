<html>
<head>
     <title>Orden borrada</title>
     <link href="Public/Css/formulario1.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php
    include 'Controlador/Conexion.php';
        $registros = mysqli_query($conecta, "select cod_tarifa from Comisiones where 
        cod_tarifa = '$_REQUEST[cod_tarifa]'") or
    die("Problemas en el select:" .
        mysqli_error($conecta));
    if ($reg = mysqli_fetch_array($registros)) {
        mysqli_query($conecta, "delete from Comisiones
        where cod_tarifa='$_REQUEST[cod_tarifa]'") or
        die("Problemas en el select:" .
        mysqli_error($conecta));
        echo "<script>alert('Comision eliminada');
             window.location = 'Inicio2Analista.php';
                </script>
            ";  

    } else {
        echo "<script>alert('no se elimino la comision intente de nuevo');
                    window.location = 'Eliminarcomision.html';    
                </script>
            ";  

    }
    mysqli_close($conecta);
    ?>
</body>

</html>