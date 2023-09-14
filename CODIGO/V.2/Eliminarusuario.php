<html>
<head>
     <title>Usuario Eliminado</title>
     <link href="Public/Css/formulario1.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php
    include 'Controlador/Conexion.php';
        $registros = sqlsrv_query($conecta, "select id_usuario from telcomundo.Usuario where 
        id_usuario = '$_REQUEST[id_usuario]'") or
    die("Problemas en el select:" .
        sqlsrv_error($conecta));
    if ($reg = sqlsrv_fetch_array($registros)) {
        sqlsrv_query($conecta, "delete from telcomundo.Usuario
        where id_usuario=$_REQUEST[id_usuario]") or
    die("Problemas en el select:" .
        sqlsrv_error($conecta));
        echo "<script>alert('USUARIO ELIMINADO');
             window.location = 'Inicio2Analista.php';    
                </script>
            ";  

    } else {
        echo "<script>alert('no se elimino usuario intente de nuevo');
                    window.location = 'Eliminarusuario1.php';    
                </script>
            ";  

    }
    sqlsrv_close($conecta);
    ?>
</body>