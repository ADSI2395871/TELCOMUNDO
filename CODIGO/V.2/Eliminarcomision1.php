<?php require 'controlador/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="Public/Css/formulario4.css" rel="stylesheet" type="text/css" />
    <title>Eliminar comision</title>
</head>
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
                    <form class="formulario" action="Eliminarcomision.php" method="post">
                    <legend>Elimiar Comisión</legend>
                        <div class="contenedor-campos">
                                <div class="campo">
                                    <label>Codigo de tarifa</label>
                                    <input class="input-text" type="text" name="cod_tarifa" placeholder="Escriba codigo de tarifa a eliminar">
                                </div>

                            <div class="Login">
                                <input type="submit" value="Eliminar">
                            </div>
                    </form>
                </div>
                <div class='submit'>   
            </div>
        </main>
</body>
</html>
