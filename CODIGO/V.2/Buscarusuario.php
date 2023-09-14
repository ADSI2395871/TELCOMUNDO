<title>Problema</title>
<link href="Public/Css/formulario1.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php
    include 'Controlador/Conexion.php';
        $registros = sqlsrv_query($conecta, "select id_usuario,
        nombre,apellido,tel,contraseña,correo,direccion
        from telcomundo.Usuario where id_usuario=$_REQUEST[id_usuario]")
    or die("Problemas en el select".sqlsrv_error($conecta));
    if ($reg = sqlsrv_fetch_array($registros)) {
        echo"<h3>". "id_usuario:". $reg['id_usuario']."<br>";
        echo "nombre:".$reg['nombre']."<br>";
        echo "apellido:".$reg['apellido']."<br>";
        echo "contraseña:".$reg['contraseña']."<br>";
        echo "correo:".$reg['correo']."<br>";
        echo "direccion:". $reg['direccion']."<br>";
    } else {
        echo "No existe un usuario con esa identificacion.";
    }
    sqlsrv_close($conecta);
    ?>
</body>

</html>