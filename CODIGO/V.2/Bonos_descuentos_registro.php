<?php require 'controlador/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
 <link rel="stylesheet" href="Public/Css/formulario2.css">
    <title>REGISTRAR BONO O DESCUENTO</title>
<<link rel="preconnect" href="https://fonts.googleapis.com">
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

        <form class="formulario" action="Bonos_descuentos_formulario.php" method="post" >
        <fieldset>
                  <legend> Registrar Bonos Y/O Descuentos</legend>
                      <div class="contenedor-campos">

                      <div class="campo">
                               <label>Numero del bono</label>
                               <input class="input-text" type="number" name="id_bono" placeholder="Id bono">
                           </div>

                      <div class="campo">
                               <label>Numero Cedula</label>
                               <input class="input-text" type="number" name="id_usuario"  placeholder="Id Usuario">
                           </div>

                           <div class="campo">
                               <label>Tipo de bono </label>
                               
                               <input class="input-text" name="Tipo_bono"  placeholder="Tipo de bono">
                           </div>

                           <div class="campo">
                               <label>Tipo de descuento</label>
                               <input class="input-text" name="Tipo_descuento"  placeholder="Tipo de descuento">
                           </div>
                          
                           <div class="campo">
                               <label>valor  de bono </label>
                               <input class="input-text"name="valor"  placeholder="valor">
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

