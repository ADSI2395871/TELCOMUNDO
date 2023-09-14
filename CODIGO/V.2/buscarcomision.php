<?php 
include 'Controlador/Conexion.php';
require 'controlador/config.php';
$where="";
if (!empty($_POST)) {
    $valor = $_POST['buscar'];
    if(!empty($valor)){
        $where = "WHERE cod_tarifa LIKE '%$valor%' ";
    }
}
$consulta = "SELECT * FROM telcomundo.comisiones $where";
$ejecutar =sqlsrv_query($conecta,$consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/Tablas.css">
    <title>Historico bonos y descuentos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT&display=swap" rel="stylesheet">
 
</head>
<body>
    <h1>TELCOMUNDO</h1>
    <h2>  Buscar Comision</h2>
    <h2>  <strong><?php echo $_SESSION['ID'];?></strong> </h2>
    <div class="col-sm-12 col-md-12 col-lg-12">
    <form class="bonos1" action="<?php echo $_SERVER['PHP_SELF'];
             ?>" method="post">
            <input type="text" name="buscar" class="form-control"placeholder="Ingrese Cod tarifa"><br>
            <input type="submit" name="buscando" value="Buscar" class="btn">
        </form>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="table-responsive">
                <table class="table">
                    <thead class="text_muted">
                        <th>Codigo de tarifa</th> 
                        <th>Ciudad</th>
                        <th>Paquete</th>
                        <th>Servicios</th>
                        <th>Estrato</th>
                        <th>Comision</th>
                    </thead>
                    <tbody>
                        <?php while($row = sqlsrv_fetch_array($ejecutar, SQLSRV_FETCH_ASSOC)){?>
                        <tr>
                            <td><?php echo $row['cod_tarifa'];?></td>
                            <td><?php echo $row['ciudad_com'];?></td>
                            <td><?php echo $row['paquete_com'];?></td>
                            <td><?php echo $row['servicios_com'];?></td>
                            <td><?php echo $row['estrato_com'];?></td>
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
    