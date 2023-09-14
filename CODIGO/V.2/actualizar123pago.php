<?php
if(isset($_POST['actualizar'])){
    include 'Controlador/Conexion.php';
    require 'controlador/config.php';

    $registros = sqlsrv_query($conecta, "UPDATE telcomundo.informe_ventas
    SET orden_trabajo =$_REQUEST[Ot],pago ='$_REQUEST[pago]',
    legalizacion='$_REQUEST[legalizacion]'
    Where orden_trabajo=$_REQUEST[Ot] ") 
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
