<?php 
include 'Controlador/Conexion.php';
$where="";
if (!empty($_POST)) {
    $valor = $_POST['buscar'];
    if(!empty($valor)){
        $where = "WHERE cod_tarifa LIKE '%$valor%' ";
    }
}
$consulta = "SELECT * FROM comisiones $where";
$resultado = $conecta->query($consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/Tablas1.css">
    <title>Buscar comision</title>
</head>
<body>
    <h2>Usuario</h2>
    <h1>  BUSCAR COMISION</h1>

    <div class="col-sm-12 col-md-12 col-lg-12">
        <form class="bonos1" action="<?php echo $_SERVER['PHP_SELF'];     ?>" method="post">
            <input type="text" name="buscar" class="form-control"placeholder=" codigo tarifa"><br>
            <input type="submit" name="buscando" value="Buscar" class="btn-block btn-sm btn-success">
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
                        <?php while($row = $resultado->fetch_assoc()){?>
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