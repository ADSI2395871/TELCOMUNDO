<html>
<html>
<head>
<title>Pagina 2 en PHP para la conexion
con el Codigo de MYSQL </title>
</head>
<body>
<?php
   include 'Controlador/Conexion.php';
    $colsulta= mysqli_query($conecta,"insert into Bonos_descuentos(id_bono,
      id_usuario,Tipo_bono,Tipo_descuento,valor) 
      values($_REQUEST[id_bono],
      $_REQUEST[id_usuario],'$_REQUEST[Tipo_bono]',
      '$_REQUEST[Tipo_descuento]',
      $_REQUEST[valor])") 
    or die("Problemas en el select".mysqli_error($conecta));
    mysqli_close($conecta);
    echo '<script language="javascript">alert("el bono o descuentcuento fue registrado");
                window.location = "Bonos_descuentos_registro.php"; 
          </script>';


?>
</body>
</html>