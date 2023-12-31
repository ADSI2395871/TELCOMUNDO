<?php 
session_start();
$connectionInfo = array("UID" => "CloudSAa141dee4", "pwd" => "Telcomundo*", "Database" => "Telcomundo", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:telcomundoserv.database.windows.net,1433";
$conecta = sqlsrv_connect($serverName, $connectionInfo);

if($conecta){
    // CONEXION EXITOSA;
}else{
    // "fallo en la conexion";
    die(print_r(sqlsrv_errors(), true));
}

ini_set('display_errors', 1);

try {
    if (isset($_POST["botton"])) {

        if ($_REQUEST['ID'] == null && $_REQUEST['contraseña'] == null) {
            echo "<script>alert('Ingrese datos al formulario');window.location = 'Index.php';</script>";
            exit; // Agregamos esto para detener la ejecución del script
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
                    exit; // Agregamos esto para detener la ejecución del script
                } elseif ($filas['id_rol'] == 9) { // Analista
                    header("location: Inicio2Analista.php");
                    exit; // Agregamos esto para detener la ejecución del script
                } elseif ($filas['id_rol'] == 10) { // Asesor
                    header("location: Inicio3Asesor.php");
                    exit; // Agregamos esto para detener la ejecución del script
                }
            } else {
                // Aquí puedes manejar el caso en que $filas esté vacío o la consulta falle
                // Redirige o muestra un mensaje de error apropiado
                echo "<script>alert('USUARIO O CONTRASEÑA INCORRECTA');window.location = 'Index.php';</script>";
                exit; // Agregamos esto para detener la ejecución del script
            }

            sqlsrv_close($conecta);
        }
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
