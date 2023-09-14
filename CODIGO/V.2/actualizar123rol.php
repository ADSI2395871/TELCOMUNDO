<?php
if(isset($_POST['actualizar'])){
    include 'Controlador/Conexion.php';
    require 'controlador/config.php';

    $registros = sqlsrv_query($conecta, "UPDATE telcomundo.usuario 
    SET id_usuario =$_REQUEST[Id],id_rol ='$_REQUEST[Rol]'
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

?>
