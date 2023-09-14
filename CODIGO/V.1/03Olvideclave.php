<?php
if($_REQUEST['ID'] ==null && $_REQUEST['contraseña'] ==null)
{
    echo "
    <script>alert('Ingrese datos al formulario');
                window.location = 'olvideclave01.php';    
            </script>
        ";

        }
  else {
    include 'Controlador/Conexion.php';
    
    $colsulta = mysqli_query($colsulta, "select * from usuario where id_usuario=$id")
    or die("Problemas en el select:" . mysqli_error($conecta));
    if ($reg = mysqli_fetch_array($conecta)) { 
        header("location: actualizarclave.php");
    }
    if ($colsulta== true){
        echo "
        <script>alert('USUARIO O CONTRASEÑA INCORRECTA');
                    window.location = 'Index.php';    
                </script>
            ";
    
    }



    mysqli_close($conecta);
   

  }



  ?>

