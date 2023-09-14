<?php 
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: iniciosesion.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Telcomundo</title>
    <link rel="stylesheet" href="Public/Css/Login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT&display=swap" rel="stylesheet">
  </head>
  <body>-
    <div class="Login">
    <img src="imagenes/claro58.jpg" class="avatar" alt="Avatar Image">
      <h1>TELCOMUNDO</h1>
      <form method=POST ACTION=iniciosesion.php>
        <label for="username">Id usuario</label>
        <input type="text" placeholder="Numero De Identificación"name="ID">
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Ingresa Tu Contraseña"name="contraseña">
        <input type="submit" name="botton">
        <a href="Olvideclave01.php">Olvidaste la contraseña</a><br>
        <a href="UsuarioRegistro.html">Registrate</a>
      </form>
    </div>
  </body>

  
</html>