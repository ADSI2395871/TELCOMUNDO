<?php
ini_set('display_errors', 1);
try{
if(isset($_POST['actualizar'])){
    include 'Controlador/Conexion.php';
    require 'controlador/config.php';

    $registros = sqlsrv_query($conecta, "UPDATE telcomundo.usuario 
    SET id_usuario =$_REQUEST[Id],nombre ='$_REQUEST[nombres]',
    apellido='$_REQUEST[apellidos]',correo='$_REQUEST[correo]',
    tel =$_REQUEST[Telefono],direccion ='$_REQUEST[Direccion]',
    contraseña ='$_REQUEST[Contraseña]'
    Where id_usuario=$_REQUEST[Id] ") 
    or die("Problemas en el select:");

    if($registros ==TRUE){
        echo"<script>alert('actualizacion fue correcta');
                    window.location = 'Inicio2Analista.php';    
                </script>
            ";  
    }else{
        echo"<script>alert('actualizacion incorrecta');
                    window.location = 'Inicio2Analista.php';    
                </script>
            ";     
    }


}
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
