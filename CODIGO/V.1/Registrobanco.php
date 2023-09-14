<?php
include 'Controlador/Conexion.php';
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
               
                <form class="formulario">
                    <fieldset>
                        <legend> Registro de cuenta asesor</legend>
                        <div class="contenedor-campos">
                            <div class="campo">
                                <label>Cedula</label>
                                <input class="input-text" type="text" placeholder="Numero de identificación">
                            </div>

                            <div class="campo">
                                <label>Banco</label>
                                <input class="input-text" type="number" placeholder="Seleccione su Banco"> 
                            </div>

                            <div class="campo">
                                <label>Cuenta</label>
                                <input class="input-text" type="email" placeholder="Numero  de Cuenta"> 
                            </div>

                        
                        

                        <div class="alinear-derecha flex">
                        <input type="submit" name="botton">
                         </div>
                        

                    </fieldset>
                             
                 </form>


            </section>
    
    
                
                
       
      
 </table>
</body>
</html>