<?php require 'controlador/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="Public/Css/formulario4.css" rel="stylesheet" type="text/css" />
    <title>Actualizar Pago</title> 
</head>
<header>

<body>
    <header>
        <nav>
        <a class="ultimos" href="Inicio2Analista.php">Regresar</a>
        </nav>
      </header>
        <main>
            <h1>TELCOMUNDO</h1>
            <div class="Login">
                <div>
                    <form class="formulario" action="ActualizarPago.php" method="post">
                    <legend>Actualizar Pago</legend>
                        <div class="contenedor-campos">
                            <div class="campo">
                                <label>Ingrese Orden de Trabajo</label>
                                <input class="input-text" type="number" name="Ot" placeholder="Escriba Ot">
                            </div>

                     <div class="Login">
                       <input type="submit" value="buscar">
                       </div>

                    </form>
                </div>
                <div class='submit'>   
            </div>
        </main>
</body>
</html>
    
      

