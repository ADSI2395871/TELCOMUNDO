<?php
ini_set('display_errors', 1);
try{
     include 'Controlador/Conexion.php';
    if (isset($_POST['insert'])) {
        $id_bono = $_POST['id_bono'];
        $id_usuario = $_POST['id_usuario'];
        $Tipo_bono = $_POST['Tipo_bono'];
        $Tipo_descuento = $_POST['Tipo_descuento'];
        $valor = $_POST['valor'];

        $insertar = "INSERT INTO telcomundo.Bonos_descuentos(id_bono,id_usuario,Tipo_bono,
        Tipo_descuento,valor)VALUES('$id_bono',
        '$id_usuario','$Tipo_bono','$Tipo_descuento','$valor')";

        $ejecutar = sqlsrv_query($conecta,$insertar);

        if($ejecutar){
            echo "
            <script>alert('Bono o descuento registrado');
                        window.location = 'Inicio2Analista.php';    
                    </script>
                ";   
        }
        else {
            echo "
            <script>alert('No se registro intente de nuevo');
                        window.location = 'Inicio2Analista.php';    
                    </script>
                ";   
        }
}
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
