<?php require 'controlador/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	  <link href="Public/Css/formulario7.css" rel="stylesheet" type="text/css" />
    <title>Registrar Ventas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT&display=swap" rel="stylesheet">
<header>
      <nav>
        <a class="ultimos" href="Inicio3Asesor.php">Regresar</a>
      </nav>
    </header>
<body>
<main>
    <h1>TELCOMUNDO</h1>
      <div class="Login">
        <section>
        <form action="OrdenRegistroformulario.php" method="post" class="formulario">
        <fieldset>
            <legend> Registrar Ventas</legend>
                <div class="contenedor-campos">

                        <div class="campo">
                            <label>Orden de Trabajo</label>
                            <input class="input-text" name='orden_trabajo' type='number'  size="20" placeholder="orden_trabajo"/>
                         </div>
                        
                         <div class="campo">
                            <label>Paquete</label>
                            <input class="input-text" name='paquete' type='text'  size="20" placeholder="paquete" />
                        </div>

                        <div class="campo">
                            <label>Servicios</label>
                            <input class="input-text" name='servicios' type='number' size="20" placeholder="servicios"/>
                         </div>

                         <div class="campo">
                            <label>Estrato</label>
                            <input class="input-text" name='estrato' type='number' size="1" placeholder="estrato" />
                        </div>

                        <div class="campo">
                            <label>Ciudad</label>
                            <input class="input-text" name='ciudad' type='text' size="20" placeholder="ciudad" />
                        </div>

                        <div class="campo">
                            <label>Localidad</label>
                            <input class="input-text" name='localidad' type='text' size="20" placeholder="localidad" />
                        </div>

                        <div class="campo">
                            <label>Fecha</label>
                            <input class="input-text" name='fecha' type='date' size="20" placeholder="fecha" />
                        </div>

                        <div class="campo">
                                <label>Codigo Tarifa</label>
                                <input class="input-text" name='cod_tarifa' type='text'  size="20" placeholder="cod de tarifa"/>
                            </div>
                            
                        <div class="login">
                                <input s type="submit" name="insert"/>
                            </div>

                            </div>
        </fieldset> 
        </form>
        </section>
      </div>
    </main>
</body>
</html>
            