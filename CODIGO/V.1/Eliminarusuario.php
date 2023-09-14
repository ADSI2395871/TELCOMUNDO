<html>
<head>
     <title>Usuario Eliminado</title>
     <link href="Public/Css/formulario1.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php
    include 'Controlador/Conexion.php';
        $registros = mysqli_query($conecta, "select id_usuario from Usuario where 
        id_usuario=$_REQUEST[id_usuario]") or
    die("Problemas en el select:" .
        mysqli_error($conecta));
    if ($reg = mysqli_fetch_array($registros)) {
        mysqli_query($conecta, "delete from Usuario
        where id_usuario=$_REQUEST[id_usuario]") or
    die("Problemas en el select:" .
        mysqli_error($conecta));
        echo "<script>alert('USUARIO ELIMINADO');
             window.location = 'Inicio2Analista.php';    
                </script>
            ";  

    } else {
        echo "<script>alert('no se elimino usuario intente de nuevo');
                    window.location = 'Eliminarorden.html';    
                </script>
            ";  

    }
    mysqli_close($conecta);
    ?>
</body>