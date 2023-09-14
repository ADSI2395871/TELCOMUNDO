
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
 <link rel="stylesheet" href="Public/Css/Formulario1.css">
    <title>REGISTRAR VENTAS</title>
</head>
<body>
<header>
      <nav>
      <a class="ultimos" href="Inicio3Asesor.php">Regresar</a>
      </nav>
    </header>
    <main>
      <h1>REGISTRA TUS VENTAS</h1>
      <div class="Login">
    <form action="OrdenRegistroformulario.php" method="post">
            
        <div class='field'>
            <input type="number" name="orden_trabajo" size="40" placeholder="orden_trabajo">
        </div>
        <div class='field'>
            <input type="text" name="paquete" size="40" placeholder="paquete">
        </div>
        <div class='field'>
            <input type="number" name="servicios" size="20" placeholder="servicios">
        </div>
        <div class='field'>
            <input type="text" name="estrato" size="20" placeholder="estrato">
        </div>
        <div class='field'>
            <input type="text" name="ciudad" size="20" placeholder="Ciudad">
        </div>
        <div class='field'>
            <input type="text" name="localidad" size="20" placeholder="localidad">
        </div>
        <div class='field'>
            <input type="text" name="legalizacion" size="20" placeholder="legalizacion">
        </div>
        <div class='field'>
            <input type="date" name="fecha" size="20" placeholder="fecha">
        </div>
        <div class='field'>
            <input type="text" name="cod_tarifa" size ="30" placeholder="cod_tarifa" >
        </div>
        <div class='field'>
            <input type="number" name="id_usuario" size="20" placeholder="id_usuario">
        </div>
        <div class='field'>
            <input type="text" name="pago" size="20" placeholder="pago">
        </div>
            
        <div class='submit'>
          <button>
            REGISTRAR
          </button>

      </form>
      </div>
    
    
                
                
       
      
 </table>
</body>
</html>