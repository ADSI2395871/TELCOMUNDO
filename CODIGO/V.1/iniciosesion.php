<?php
include 'Controlador/Conexion.php';

if (null !== $_POST["botton"]){


if($_REQUEST['ID'] ==null && $_REQUEST['contraseña'] ==null)
{
    echo "
    <script>alert('Ingrese datos al formulario');
                window.location = 'Index.php';    
            </script>
        ";
}elseif ($_REQUEST['ID']!==null && $_REQUEST['contraseña'] ==null){
    echo "
        <script>alert('Datos Incorrectos');
                    window.location = 'Index.php';    
                </script>
            ";
    }
    elseif ($_REQUEST['ID']==null && $_REQUEST['contraseña']!==null){
        echo "
        <script>alert('Contraseña Incorrecta');
                    window.location = 'Index.php';    
                </script>
            ";
        }
  else {

    $Usuario=$_POST['ID'];
    $Contraseña=$_POST['contraseña'];
    
    
    $colsulta="SELECT*FROM Usuario  WHERE id_usuario = '$Usuario' AND contraseña = '$Contraseña'";
    
    $resultado=mysqli_query($conecta,$colsulta);
    
    $filas=mysqli_fetch_array($resultado);

    if ($filas['id_rol']==1){ //Lider    
        header("location: Inicio1Lider.php");

    }else
    if ($filas['id_rol']==2){ //Analista    x
        header("location: Inicio2Analista.php");
    }

    if ($filas['id_rol']==3){ //Asesor   x
        header("location: Inicio3Asesor.php");
    }

    else{
        ?>
        <?php
        include("Index.php");
        ?>
        echo "
        <script>alert('USUARIO O CONTRASEÑA INCORRECTA');
                    window.location = 'Index.php';    
                </script>
            ";
            <?php
    
    }
    }
}

    mysqli_close($conecta);
    ?>