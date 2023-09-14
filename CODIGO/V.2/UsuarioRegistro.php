
<html>
<head>
<title>Usuario registrado </title>
<link rel="stylesheet" href="public/Css/formulario1.css">
</head>
<body>
<?php
include 'Controlador/Conexion.php';
if($_REQUEST['contraseña']==$_REQUEST['repetir_contraseña']){$contraseña=$_REQUEST['contraseña'];
    if (isset($_POST['insert'])) {
        $id_usuario = $_POST['id_usuario'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $tel = intval($_POST['tel']); 
        $correo = $_POST['correo'];
        $direccion = $_POST['direccion'];
        $contraseña = $_POST['contraseña'];

        $insertar = "INSERT INTO telcomundo.usuario(id_usuario,nombre,apellido,tel,correo,
        direccion,contraseña)VALUES('$id_usuario','$nombre','$apellido',
        '$tel','$correo','$direccion','$contraseña')";
  




$ejecutar = sqlsrv_query($conecta, $insertar);

if ($ejecutar) {
   
    echo "
    <script>alert('USUARIO REGISTRADO');
                window.location = 'Index.php';    
            </script>
        "; 
} else {
    // Manejo de errores de SQL Server
    echo "Error en la consulta: " . print_r(sqlsrv_errors(), true);
}
} else {
echo "La contraseña no coincide";
}
} else {
echo "La solicitud de inserción no está definida";
}
?>