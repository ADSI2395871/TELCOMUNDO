<?php 
include 'Controlador/Conexion.php';
require 'controlador/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="Public/Css/formulario3.css" rel="stylesheet" type="text/css" />
    <title>Registrar Comision</title>
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
          <form action="Registrarcomision.php" method="post" class="formulario">
              <fieldset>
                  <legend> Registrar Comision</legend>
                      <div class="contenedor-campos">

                            <div class="campo">
                                <label>Codigo Tarifa</label>
                                <input class="input-text" name='cod_tarifa' type='text'  size="20" placeholder="cod de tarifa"/>
                            </div>

                            <div class="campo">
                                <label>Ciudad</label>
                                <input class="input-text" name='ciudad_com' type='text'size="30" placeholder="cuidad"/>
                            </div>

                            <div class="campo">
                                <label>Comision</label>
                                <input class="input-text" name='comision' type='number'size="20" placeholder="comision"/>
                            </div>

                            <div class="campo">
                                <label>Paquete</label>
                                <input class="input-text" name='paquete_com' type='text'  size="20" placeholder="paquete" />
                            </div>

                            <div class="campo">
                                <label>Servicios</label>
                                <input class="input-text" name='servicios_com' type='number' size="20" placeholder="servicios"/>
                            </div>

                            <div class="campo">
                                <label>Estrato</label>
                                <input class="input-text" name='estrato_com' type='number' size="1" placeholder="estrato" />
                            </div>

                            <div class="login">
                        <input type="submit" name="insert">
                         </div>

                      </div>
      
              </fieldset>                
          </form>    
        </section>
      </div>                    
    </main>
</body>

</html>