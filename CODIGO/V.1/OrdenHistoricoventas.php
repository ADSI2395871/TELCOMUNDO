<?php 
include 'Controlador/Conexion.php';
$where="";
if (!empty($_POST)) {
    $valor = $_POST['buscar'];
    if(!empty($valor)){
        $where = "WHERE id_usuario LIKE '%$valor%' ";
    }
}
$consulta = "SELECT * FROM Historico $where";
$resultado = $conecta->query($consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/Tablas.css">
    <title>Historico de ventas</title>
</head>
<body>
    <h2>TELCOMUNDO</h2>
    <h1>  Revisa tus ventas</h1>

    <div class="col-sm-12 col-md-12 col-lg-12">
        <form class="bonos1" action="<?php echo $_SERVER['PHP_SELF'];
             ?>" method="post">
            <input type="text" name="buscar" class="form-control"placeholder="INGRESE ID"><br>
            <input type="submit" name="buscando" value="Buscar" class="btn-block btn-sm btn-success">
        </form>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="table-responsive">
                <table class="table">
                    <thead class="text_muted">
                        <th>Orden de trabajo</th>
                        <th>Id usuario</th> 
                        <th>Paquete</th>
                        <th>Servicios</th>
                        <th>Cod de tarifa</th>
                        <th>Comision</th>
                        <th>Pago</th>
                    </thead>
                    <tbody>
                        <?php while($row = $resultado->fetch_assoc()){?>
                        <tr>
                            <td><?php echo $row['orden_trabajo'];?></td>
                            <td><?php echo $row['id_usuario'];?></td>
                            <td><?php echo $row['paquete'];?></td>
                            <td><?php echo $row['servicios'];?></td>
                            <td><?php echo $row['cod_tarifa'];?></td>
                            <td><?php echo $row['comision'];?></td>
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