<?php 
include 'Controlador/Conexion.php';
require 'controlador/config.php';
$where="";
if (!empty($_SESSION)) {
    $valor = $_SESSION['ID'];
    if(!empty($valor)){
        $where = "WHERE id_usuario LIKE '%$valor%' ";
    }
}
$consulta = "SELECT * FROM telcomundo.Liquidacion_ventas $where";
$resultado = sqlsrv_query($conecta,$consulta);
$Suma = "SELECT SUM(comision) AS TOTAL FROM telcomundo.Liquidacion_ventas $where";
$Total = sqlsrv_query($conecta,$Suma);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/Tablas.css">
    <title>Liquidación de ventas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT&display=swap" rel="stylesheet">
 
</head>
<body>
<header>
      <nav>
      <a class="salir" href="Inicio3Asesor.php">Regresar</a>
      </nav>
    </header>
    <h1>TELCOMUNDO</h1>
    <h2>Liquidación De Ventas</h2>
    <h2>  <strong><?php echo $_SESSION['ID'];?></strong> </h2>
    
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="table-responsive">
                <table class="table">
                    <thead class="text_muted">
                        <th>Total a pagar</th>
                    </thead>
                    <tbody>
                        <?php while($row = sqlsrv_fetch_array($Total, SQLSRV_FETCH_ASSOC)){?>
                        <tr>
                            <td><?php echo $row['TOTAL'];?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="table-responsive">
                <table class="table">
                    <thead class="text_muted">
                        <th>Id Usuario</th> 
                        <th>Nombre</th>
                        <th>Orden de trabajo</th>
                        <th>Paquete</th>
                        <th>Ciudad</th>
                        <th>Cod Tarifa</th>
                        <th>comision</th>
                    </thead>
                    <tbody>
                        <?php while($row = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC)){?>
                        <tr>
                            <td><?php echo $_SESSION['ID'];?></td>
                            <td><?php echo $row['concat(Usuario.nombre," ",Usuario.apellido)'];?></td>
                            <td><?php echo $row['Orden_trabajo'];?></td>
                            <td><?php echo $row['Paquete'];?></td>
                            <td><?php echo $row['ciudad'];?></td>
                            <td><?php echo $row['cod_tarifa'];?></td>
                            <td><?php echo $row['comision'];?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>