<?php require 'controlador/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="Public/Css/formulario4.css" rel="stylesheet" type="text/css" />
    <title>Eliminar venta</title>
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
                    <form class="formulario" action="Eliminarorden.php" method="post">
                    <legend>Eliminar Orden De Trabajo</legend>
                        <div class="contenedor-campos">
                            <div class="campo">
                                <label>Orden de trabajo</label>
                                <input class="input-text" type="text" name="orden_trabajo" placeholder="Escriba orden a eliminar">
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
    