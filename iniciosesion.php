<?php
try{
include 'Controlador/Conexion.php';

if (isset($_POST["botton"])) {
    if ($_REQUEST['ID'] == null && $_REQUEST['contraseña'] == null) {
        echo "
        <script>alert('Ingrese datos al formulario');
                    window.location = 'Index.php';    
                </script>
            ";
    } else {
        $Usuario = $_POST['ID'];
        $Contraseña = $_POST['contraseña'];
        session_start();
        $_SESSION['ID'] = $Usuario;
      
        $filas = null;
      
        $consulta = "SELECT * FROM telcomundo.usuario WHERE id_usuario = '$Usuario' AND contraseña = '$Contraseña'";
        $resultado = sqlsrv_query($conecta, $consulta);
      
        if ($resultado && sqlsrv_num_rows($resultado) > 0) {
            $filas = sqlsrv_fetch_array($resultado);
        }
      
        if ($filas) {
            if ($filas['id_rol'] == 8) { // Lider    
                header("location: Inicio1Lider.php");
            } elseif ($filas['id_rol'] == 9) { // Analista
                header("location: Inicio2Analista.php");
            } elseif ($filas['id_rol'] == 10) { // Asesor
                header("location: Inicio3Asesor.php");
            }
        } else {
            echo "<script>alert('USUARIO O CONTRASEÑA INCORRECTA'); window.location = 'Index.php';</script>";
        }
      
        sqlsrv_close($conecta);
    }  
}
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
