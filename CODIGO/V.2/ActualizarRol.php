

<?php
require 'controlador/config.php';
if(isset($_REQUEST['codigo'])){

  $id = $_REQUEST['codigo'];
    /*error_reporting(0);*/

    include 'Controlador/Conexion.php';

    $registros = sqlsrv_query($conecta, "select * from telcomundo.usuario where id_usuario=$id")
    or die("Problemas en el select:" . sqlsrv_error($conecta));

    if ($reg = sqlsrv_fetch_array($registros)) { 

    }
    else{
        echo "
        <script>alert('Usuario no encontrado');
                    window.location = 'Inicio2Analista.php';    
                </script>
            ";
    }
 
    sqlsrv_close($conecta);


}


?>
<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
	  <link href="Public/Css/formulario5.css" rel="stylesheet" type="text/css" />
    <title>Actualizar Rol</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT&display=swap" rel="stylesheet">
<header>
      <nav>
        <a class="ultimos" href="Inicio2Analista.php">Regresar</a>
      </nav>
    </header>
<body>
    <main>
    <h1>TELCOMUNDO</h1>
      <div class="Login">
        
        <form class="formulario" action="actualizar123rol.php" method="post">
        <fieldset>
            <legend> Actualizar Rol</legend>
                <div class="contenedor-campos">

                <div class= "campo">
                    <label>Cedula usuario</label>
                    <input class="input-text" name="Id" type="number"value='<?php echo $reg['id_usuario']; ?>'  placeholder="Numero  de documento" />
                  </div>

                  
        
                  <div class= "campo">
                    <label>Rol</label>
                    <input class="input-text" name="Rol" type="number"value='<?php echo $reg['id_rol']; ?>'  placeholder="rol" />
                  </div>

                  <div class="Login">
                        <input type="submit" name="actualizar" value ='Actualizar'>
                         </div>
        
                </div>
        
        </fieldset> 
        </form>
       
      </div>
    </main>
</body>
</html>