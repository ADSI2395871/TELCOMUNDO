
<html>
<html>
<head>
<title>Pagina 2 en PHP para la conexion
con el Codigo de MYSQL </title>
</head>
<body>
<?php
   include 'Controlador/Conexion.php';
      $colsulta= mysqli_query($conecta,"insert into banco(id_usuario,
      banco,cuenta) 
      values($_REQUEST[id_usuario],'$_REQUEST[banco]',
      $_REQUEST[cuenta])") 
    or die("Problemas en el select".mysqli_error($conecta));
    mysqli_close($conecta);
    echo '<script language="javascript">alert("La cuenta bancaria fue registrada");
                window.location = "Registrobanco.php"; 
         </script>';


?>
</body>
</html>