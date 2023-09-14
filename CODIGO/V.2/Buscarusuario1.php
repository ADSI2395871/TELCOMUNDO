<?php require 'controlador/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="Public/Css/formulario1.css" rel="stylesheet" type="text/css" />
    <title>Buscar Usuario</title>
</head>
<body>
    <header>
        <nav>
        <a class="ultimos" href="Inicio2Analista.php">Regresar</a>
        </nav>
      </header>
        <main>
            <h1>BIENVENIDO A TELCOMUNDO</h1>
            <h2> <strong><?php echo $_SESSION['ID'];?></strong> </h2>
            <div class="Login">
                <div>
                    <form action="Buscarusuario.php" method="post">
                        <h3> Ingrese El Usuario A Consultar</h3>
                       <input type="text" name="id_usuario">
                       <br>
                       <input type="submit" value="buscar">
                    </form>
                </div>
                <div class='submit'>   
            </div>
        </main>
</body>
</html>
    
</body>
</html>