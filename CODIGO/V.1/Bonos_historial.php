<?php 
include 'Controlador/Conexion.php';
$where="";
if (!empty($_POST)) {
    $valor = $_POST['buscar'];
    if(!empty($valor)){
        $where = "WHERE id_usuario LIKE '%$valor%' ";
    }
}
$consulta = "SELECT * FROM Historico_bonos $where";
$resultado = $conecta->query($consulta);
?>
<!DOCTYPE html>
<html lang="en">
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
    <h2>  Bonos y Descuentos</h2>

    <a href="Index.php" class="salir">Salir</a>  

    <div class="col-sm-12 col-md-12 col-lg-12">
        <form class="bonos1" action="<?php echo $_SERVER['PHP_SELF'];
             ?>" method="post">
            <input type="text" name="buscar" class="form-control"placeholder="Ingrese cedula"><br>
            <input type="submit" name="buscando" value="Buscar" class="btn">
        </form>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="table-responsive">
                <table class="table">
                    <thead class="text_muted">
                        <th>Cedula</th> 
                        <th>Nombre</th>
                        <th>Tipo de bono</th>
                        <th>Tipo de descuento</th>
                        <th>Valor</th>
                    </thead>
                    <tbody>
                        <?php while($row = $resultado->fetch_assoc()){?>
                        <tr>
                            <td><?php echo $row['id_usuario'];?></td>
                            <td><?php echo $row['concat(U.nombre," ",U.apellido)'];?></td>
                            <td><?php echo $row['Tipo_bono'];?></td>
                            <td><?php echo $row['Tipo_descuento'];?></td>
                            <td><?php echo $row['valor'];?></td>

                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>