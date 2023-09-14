
<?php require 'controlador/config.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/inicio.css">
    <title>Inicio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT&display=swap" rel="stylesheet">
</head>
<body>
     <header>
        <h1>TELCOMUNDO</h1>
     </header>
     <!--<img src="imagenes/Claro.jpg.webp">-->
     <a href="Controlador/cerrar_session.php" class="salir">Salir</a>  
     <section  class="usuario">
        <div >
            <h2>Bienvenido lider</h2> 
            <h2> <strong><?php echo $_SESSION['ID'];?></strong> </h2>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-gitlab" width="40" height="40" viewBox="0 0 24 24" stroke-width="3" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M21 14l-9 7l-9 -7l3 -11l3 7h6l3 -7z" />
</svg>
    </section>
    <main class="contenedor sombra">
    <section  class ="hero">
        <div class="contenido-hero">  
            <ul class="nav ">
                <li><a href="">Buscar</a>
                    <ul>
                        
                    <li><a href="buscarcomision.php">Tabla De Comisiones</a></li>   
                    <li><a href="Bonos_historial.php">Bonos y Descuentos</a></li>
                    <li><a href="OrdenHistoricoventas.php">Hisotrico De Ventas</a></li>
            </ul></li> 
            <ul class="nav">
                <li><a href="">Liquidacion</a>
                    <ul>
                    <li><a href="LiquidacionVentas.php">Liquidacion de Ventas</a></li>   
                    <li><a href="LiquidacionBonos.php">Liquidacion Bonos y Descuentos</a></li>
            </ul> </li>
            <ul class="nav">    
                <li><a href="">Producto</a>
                    <ul>
                        <li><a href="https://tienda.claro.com.co">visitar tienda</a></li>
                </ul>
            </ul>
            <ul class="nav">  
                <li><a href="">Nuevas Ofertas</a> 
                <ul>
                    <li> <a href="https://www2.claro.com.co/personas/servicios/promociones/">ofertas del mes</a></li>
                </ul>          
                    
            </ul>
             
        <ul class="nav"> 
            <li><a href="">capacitaciones</a>
                <ul>
                    <li><a href="https://www.youtube.com/watch?v=N0389X9kw7Y"><Var></Var>Ventas</a></li>
                </ul>
            </li>    
        </ul>   
        
        
            </nav>            
        </section> 
        
        </div>

    
</body>
</html>