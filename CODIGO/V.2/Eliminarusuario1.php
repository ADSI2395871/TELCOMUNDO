<?php require 'controlador/config.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="Public/Css/formulario4.css" rel="stylesheet" type="text/css" />
        <title>Eliminar Usuario</title>
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
                    <form class="formulario" action="Eliminarusuario.php" method="post">
                    <legend>Eliminar Usuario</legend>

                    <div class="contenedor-campos">
                            <div class="campo">
                                <label>Usuario</label>
                                <input class="input-text" type="text" name="id_usuario" placeholder="Escriba usuario a eliminar">
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
    