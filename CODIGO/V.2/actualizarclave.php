<?php
if(isset($_POST['actualizar'])){
    include 'Controlador/Conexion.php';

    $registros = sqlsrv_query($conecta, "UPDATE telcomundo.usuario 
    SET id_usuario =$_REQUEST[Id],contraseña =$_REQUEST[Contraseña]
    Where id_usuario=$_REQUEST[Id] ")
    or die("Problemas en el select:" );

    if($registros ==TRUE){
        echo"<script>alert('actualizacion fue correcta');
            window.location = 'Index.php';    
        </script>
        ";  
    }else{
        echo"<script>alert('actualizacion incorrecta');
            window.location = 'Index.php';
        </script>
    ";     
    }


}

?>