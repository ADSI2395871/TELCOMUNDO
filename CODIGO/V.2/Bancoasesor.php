
<html>
<html>
<head>
<title>Pagina 2 en PHP para la conexion
con el Codigo de MYSQL </title>
</head>
<body>
<?php
     include 'Controlador/Conexion.php';
    if (isset($_POST['insert'])) {
        $id_usuario = $_POST['id_usuario'];
        $banco = $_POST['banco'];
        $cuenta = $_POST['cuenta'];

        $insertar = "INSERT INTO telcomundo.banco(id_usuario,banco,cuenta)VALUES('$id_usuario',
        '$banco','$cuenta')";

        $ejecutar = sqlsrv_query($conecta,$insertar);

        if($ejecutar){
            echo "
            <script>alert('Banco Registrado');
                        window.location = 'Inicio2Analista.php';    
                    </script>
                ";   
        }
        else {
            echo "
            <script>alert('No se registro Banco intente de nuevo');
                        window.location = 'Inicio2Analista.php';    
                    </script>
                ";   
        }
}
?>