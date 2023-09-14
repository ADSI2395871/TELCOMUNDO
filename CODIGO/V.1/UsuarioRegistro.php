
<html>
<head>
<title>Pagina 2 en PHP para la conexion
con el Codigo de MYSQL </title>
<link rel="stylesheet" href="public/Css/formulario1.css">
</head>
<body>
<?php
include 'Controlador/Conexion.php';
if($_REQUEST['contraseña']==$_REQUEST['repetir_contraseña']){   $contraseña=$_REQUEST['contraseña'];
    $colsulta= mysqli_query($conecta,"insert into usuario(id_usuario,
        id_rol,nombre, apellido,tel,correo,direccion,contraseña) 
        values($_REQUEST[id_usuario],$_REQUEST[id_rol],
        '$_REQUEST[nombre]','$_REQUEST[apellido]',$_REQUEST[tel],
        '$_REQUEST[correo]',
        '$_REQUEST[direccion]','$_REQUEST[contraseña]')") 
    or die("Problemas en el select".mysqli_error($conecta));
    mysqli_close($conecta);
    echo"
        <script>alert('USUARIO REGISTRADO');
                    window.location = 'Index.php';    
                </script>
            ";  

}else{
    echo "contraseña no concide";
}


?>
</body>
</html>