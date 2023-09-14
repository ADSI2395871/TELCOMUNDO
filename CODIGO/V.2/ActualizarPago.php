

<?php
require 'controlador/config.php';
if(isset($_REQUEST['Ot'])){

  $Ot = $_REQUEST['Ot'];
    /*error_reporting(0);*/

    include 'Controlador/Conexion.php';

    $registros = sqlsrv_query($conecta, "select * from telcomundo.informe_ventas where orden_trabajo=$Ot")
    or die("Problemas en el select:" . sqlsrv_error($conecta));

    if ($reg = sqlsrv_fetch_array($registros)) { 

    }
    else{
        echo "
        <script>alert('Orden no encontrado');
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
	  <link href="Public/Css/formulario1.css" rel="stylesheet" type="text/css" />
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
        <section>
        <form class="formulario" action= "actualizar123pago.php" method="post" >
        <fieldset>
            <legend> Actualizar Pago y legalizacion Orden de trabajo </legend>
                <div class="contenedor-campos">

                <div class= "campo">
                    <label>Orden de Trabajo</label>
                    <input class="input-text" name="Ot" type='number'value='<?php echo $Ot; ?>'  placeholder="Orden de Trabajo" />
                  </div> 

                  <div class= "campo">
                    <label>Pago(X/0)</label>
                    <input class="input-text" name="pago" type='text'value='<?php echo $reg['pago']; ?>'  placeholder="Pago" />
                  </div> 
        
                  <div class= "campo">
                    <label>Legalización(X/0)</label>
                    <input class="input-text" name="legalizacion" type='text'value='<?php echo $reg['legalizacion']; ?>'  placeholder="Legalización" />
                  </div>

                 

                  <div class="Login">
                        <input type="submit" name="actualizar" value ='Actualizar'>
                  </div>
        
                </div>
        
        </fieldset> 
        </form>
        </section>
      </div>
    </main>
</body>
</html>