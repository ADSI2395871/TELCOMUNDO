<?php

include 'Controlador/Conexion.php';

if (null !== $_POST["botton"]){


if($_REQUEST['ID'] ==null && $_REQUEST['contraseña'] ==null)
    {
    echo "
    <script>alert('Ingrese datos al formulario');
                window.location = 'Index.php';    
            </script>
        ";
    }
  else 
  $Usuario = $_POST['ID'];
  $Contraseña = $_POST['contraseña'];
  session_start();
  $_SESSION['ID'] = $Usuario;
  
  // Inicializa $filas con un valor predeterminado
  $filas = null;
  
  $colsulta = "SELECT * FROM telcomundo.usuario  WHERE id_usuario = '$Usuario' AND contraseña = '$Contraseña'";
  $resultado = sqlsrv_query($conecta, $colsulta);
  
  // Verifica si la consulta se realizó con éxito y asigna los resultados a $filas
  if ($resultado) {
      $filas = sqlsrv_fetch_array($resultado);
  }
  
  // Verifica si $filas contiene datos antes de usarlo
  if ($filas) {
      if ($filas['id_rol'] == 8) { // Lider    
          header("location: Inicio1Lider.php");
      } elseif ($filas['id_rol'] == 9) { // Analista
          header("location: Inicio2Analista.php");
      } elseif ($filas['id_rol'] == 10) { // Asesor
          header("location: Inicio3Asesor.php");
      }
  } else {
      // Aquí puedes manejar el caso en que $filas esté vacío o la consulta falle
      // Redirige o muestra un mensaje de error apropiado
      echo "<script>alert('USUARIO O CONTRASEÑA INCORRECTA'); window.location = 'Index.php';</script>";
  }
  
  sqlsrv_close($conecta);
}  
    ?>