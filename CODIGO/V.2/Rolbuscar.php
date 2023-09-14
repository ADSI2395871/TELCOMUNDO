<?php require 'controlador/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="Public/Css/formulario4.css" rel="stylesheet" type="text/css" />
    <title>Actualizar Rol</title> 
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
                    <form class="formulario" action="actualizarRol.php" method="post">
                    <legend>Actualizar Rol</legend>
                        <div class="contenedor-campos">
                            <div class="campo">
                                <label>Ingrese id de usuario</label>
                                <input class="input-text" type="text" name="codigo" placeholder="Escriba Id usuario">
                            </div>

                     <div class="Login">
                       <input type="submit" value="Actualizar">
                       </div>

                    </form>
                </div>
                <div class='submit'>   
            </div>
        </main>
</body>
</html>
    
      