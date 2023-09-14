<?php
include 'Controlador/Conexion.php';
require 'controlador/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<link href="Public/Css/formulario1.css" rel="stylesheet" type="text/css" />
    <title>Registrar Banco</title>
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
        <form class="formulario" action="Bancoasesor.php" method="post">
                    <fieldset>
                        <legend> Registro de cuenta asesor</legend>
                        <div class="contenedor-campos">
                            <div class="campo">
                                <label>Cedula</label>
                                <input class="input-text" type="number" name="id_usuario" size="40" placeholder="Numero de identificación">
                            </div>

                            <div class="campo">
                                <label>Banco</label>
                                <input class="input-text" type="text" name="banco" size="40" placeholder="Seleccione su Banco"> 
                            </div>

                            <div class="campo">
                                <label>Cuenta</label>
                                <input class="input-text" type="number" name="cuenta" size="20" placeholder="Numero  de Cuenta"> 
                            </div>

                        <div class="alinear-derecha flex">
                        <input type="submit" name="insert">
                         </div>
                        

                    </fieldset>
                             
                 </form>


            </section>
    
    
                
                
       
      
 </table>
</body>
</html>