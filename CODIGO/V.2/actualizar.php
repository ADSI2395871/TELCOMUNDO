

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
                    window.location = '14buscar.php';    
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
	  <link href="Public/Css/formulario6.css" rel="stylesheet" type="text/css" />
    <title>Actualizar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT&display=swap" rel="stylesheet">
    <header>
      <nav>
        <a class="ultimos" href="14buscar.php">Regresar</a>
      </nav>
    </header>
<body>
    <main>
    <h1>TELCOMUNDO</h1>
      <div class="Login">
        <section>
        <form action="actualizar123.php" method="post" class="formulario">
        <fieldset>
            <legend> Actualizar Datos </legend>
                <div class="contenedor-campos">

                <div class="campo">
                                <label>Cedula</label>
                                <input class="input-text" name='Id' type='number'  size="20" value='<?php echo $reg['id_usuario']; ?>'/>
                            </div>
                        
                            <div class="campo">
                                  <label>Nombre</label>
                                  <input class="input-text" type="text" name="nombres" size="40" value='<?php echo $reg['nombre']; ?>'/>
                            </div>
                              
                                
                            <div class="campo">
                                  <label>Apellido</label>
                                  <input class="input-text" name='apellidos' type='text' size="20" value='<?php echo $reg['apellido']; ?>' />
                            </div>

                            <div class="campo">
                                  <label>Correo</label>
                                  <input class="input-text" name='correo' type='text' size="80" value='<?php echo $reg['correo']; ?>'/>
                            </div>

                            <div class="campo">
                                  <label>Telefono</label>
                                  <input class="input-text" name='Telefono' type='number' size="20" value='<?php echo $reg['tel']; ?>' />
                            </div>

                            <div class="campo">
                                  <label>Direccion</label>
                                  <input class="input-text" name='Direccion' type='text' size="50" value='<?php echo $reg['direccion']; ?>'/>
                            </div>

                            <div class="campo">
                                  <label>Contraseña</label>
                                  <input class="input-text" name='Contraseña' type='Text'size="50" value='<?php echo $reg['contraseña']; ?>' />
                            </div>                  
                    
                            <div class="alinear-derecha flex">
                        <input type="submit" name="actualizar">
                         </div>
                 
        
        </fieldset> 
        </form>
        </section>
      </div>
    </main>
</body>
</html>