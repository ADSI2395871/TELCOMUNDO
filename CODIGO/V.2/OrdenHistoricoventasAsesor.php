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
$consulta = "SELECT * FROM telcomundo.informe_ventas $where";
$resultado = sqlsrv_query($conecta,$consulta);
$Suma = "SELECT SUM(comision) AS TOTAL FROM telcomundo.informe_ventas $where";
$Total = sqlsrv_query($conecta,$Suma);
?>

<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/Tablas.css">
    <title>Historico de ventas</title>
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
    <h2>  Revisa tus ventas</h2>
    <h2>  <strong><?php echo $_SESSION['ID'];?></strong> </h2>

    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="table-responsive">
                <table class="table">
                    <thead class="text_muted">
                        <th>Orden de trabajo</th>
                        <th>Id usuario</th> 
                        <th>Paquete</th>
                        <th>Servicios</th>
                        <th>Cod de tarifa</th>
                        <th>Pago</th>
                    </thead>
                    <tbody>
                        <?php while($row = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC)){?>
                            <tr>
                                <td><?php echo $row['orden_trabajo'];?></td>
                                <td><?php echo $_SESSION['ID'];?></td>
                                <td><?php echo $row['paquete'];?></td>
                                <td><?php echo $row['servicios'];?></td>
                                <td><?php echo $row['cod_tarifa'];?></td>
                                <td><?php echo $row['pago'];?></td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>