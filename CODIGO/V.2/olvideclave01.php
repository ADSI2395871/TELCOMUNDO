
<?php

if(isset($_REQUEST['codigo'])){

  $id = $_REQUEST['codigo'];
    /*error_reporting(0);*/

    include 'Controlador/Conexion.php';

    $registros = sqlsrv_query($conecta, "select * from usuario where id_usuario=$id")
    or die("Problemas en el select:" . mysqli_error($conecta));

    if ($reg = sqlsrv_fetch_array($registros)) { 

    }
    else{
        echo "
        <script>alert('Usuario no encontrado');
                    window.location = 'olvideclave01.php';    
                </script>
            ";
    }
 
$conecta -> close();


}


?>
<!DOCTYPE html>
<html lang="en">
<head> 
<head> <link href='public/Css/formulario8.css' rel='stylesheet' type='text/css' />
    <title>Actualizar clave </title>
  </head>
  <body>
    <header>
      <nav>
        <a class='ultimos' href='Index.php'>Regresar</a>
      </nav>
    </header>
    <main>
    <h1> TELCOMUNDO</h1>
    

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class='Login'>
                
      <form action='actualizarclave.php' onclick='actualizar.php' method='post' class = "formulario" >
      <fieldset>
       <legend>Recuperar Contraseña</legend>
       <div class="contenedor-campos">
        <div class="campo">
       
       <label>Identificación</label>
          <input class="input-text"  name='Id' type='number' value='<?php echo $reg['id_usuario']; ?>'placeholder="numero de  documento" /> 
          </div>
         
          <div class= "campo">
                    <label>Contraseña nueva</label>
                    <input class="input-text" name='Contraseña' type='number' value='<?php echo $reg['contraseña']; ?>'  placeholder="nueva contraseña " />
                  </div> 
     
     
        
        <input  type='submit' name ='actualizar' value ='Actualizar' >
        
      </form>
      </div>
    </main>
      </div>
</body>
</html>
