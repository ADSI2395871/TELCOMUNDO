<?php
session_start();

// Verifica si se ha enviado el formulario
if (isset($_POST["botton"])) {
    require_once "Controlador/Conexion.php"; // Incluye el archivo de conexión

    if ($_REQUEST['ID'] == null && $_REQUEST['contraseña'] == null) {
        echo "<script>alert('Ingrese datos al formulario');window.location = 'Index.php';</script>";
        exit;
    } else {
        $Usuario = $_POST['ID'];
        $Contraseña = $_POST['contraseña'];

        // Inicializa $filas con un valor predeterminado
        $filas = null;

        $consulta = "SELECT * FROM telcomundo.usuario  WHERE id_usuario = '$Usuario' AND contraseña = '$Contraseña'";
        $resultado = sqlsrv_query($conecta, $consulta);

        // Verifica si la consulta se realizó con éxito y asigna los resultados a $filas
        if ($resultado) {
            $filas = sqlsrv_fetch_array($resultado);
        }

        // Verifica si $filas contiene datos antes de usarlo
        if ($filas) {
            $_SESSION['ID'] = $Usuario;

            if ($filas['id_rol'] == 8) { // Lider    
                header("location: Inicio1Lider.php");
                exit;
            } elseif ($filas['id_rol'] == 9) { // Analista
                header("location: Inicio2Analista.php");
                exit;
            } elseif ($filas['id_rol'] == 10) { // Asesor
                header("location: Inicio3Asesor.php");
                exit;
            }
        } else {
            echo "<script>alert('USUARIO O CONTRASEÑA INCORRECTA');window.location = 'Index.php';</script>";
            exit;
        }

        sqlsrv_close($conecta);
    }
}
?>
