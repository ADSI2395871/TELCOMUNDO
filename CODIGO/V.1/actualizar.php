

<?php

if(isset($_REQUEST['codigo'])){

  $id = $_REQUEST['codigo'];
    /*error_reporting(0);*/

    include 'Controlador/Conexion.php';

    $registros = mysqli_query($conecta, "select * from usuario where id_usuario=$id")
    or die("Problemas en el select:" . mysqli_error($conecta));

    if ($reg = mysqli_fetch_array($registros)) { 

    }
    else{
        echo "
        <script>alert('Usuario no encontrado');
                    window.location = 'buscar.php';    
                </script>
            ";
    }
 
$conecta -> close();


}


?>
<!DOCTYPE html>
<html lang="en">
<head> <link href='public/css/formulario1.css' rel='stylesheet' type='text/css' />
	
    <title>Actualizar datos</title>
  </head>
  <body>
    <header>
      <nav>
      </nav>
    </header>
    <main>
    <h1>BIENVENIDO A TELCOMUNDO</h1>
    <h2>actualiza tus datos</h2>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class='Login'>
      <form action='actualizar123.php' onclick='actualizar123.php' method='post'>
        <div class='field'>
              <label for="NUMERO DE IDENTIFICACION">IDENTIFICACION</label>
          <input name='Id' type='number' value='<?php echo $reg['id_usuario']; ?>'size="20" placeholder="id_comumento" /> 
        </div>
        <div class='field'>
              <label for="NOMBRE">NOMBRE</label>
          <input name='nombres' type='name'value='<?php echo $reg['nombre']; ?>' size="40" placeholder="nombre" />
        </div>
        <div class='field'>
             <label for="APELLIDO">APELLIDO</label>
          <input name='apellidos' type='name'value='<?php echo $reg['apellido']; ?>' size="40" placeholder="apellido" />
        </div>
        <div class='field'>
            <label for="CORREO ">CORREO</label>
          <input name='correo' type='email'value='<?php echo $reg['correo']; ?>'  size="80" placeholder="correo" />
        </div>
        <div class='field'>
             <label for="TELEFONO">TELEFONO</label>
          <input name='Telefono' type='number'value='<?php echo $reg['tel']; ?>'  size="80" placeholder="telefono" />
        </div>
        <br>
        
       
        <input  class="btn" name ='actualizar' type='submit' value ='ACTUALIZA DATOS' >
        
      </form>
      </div>
    </main>
      </div>
</body>
</html>