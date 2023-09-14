
<?php require 'controlador/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/Inicio.css">
    <title>Inicio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT&display=swap" rel="stylesheet">
</head>
 
</head>
<body>
    <header>
        <h1>TELCOMUNDO</h1>
     </header>
     <!--<img src="imagenes/Claro.jpg.webp">-->
     <a href="Controlador/cerrar_session.php" class="salir">Salir</a> 
     <section  class="usuario">
        <div >

        
            <h2>Bienvenido analista</h2> 
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
                <li><a href="">Registrar</a>
                <ul>
                    <li><a href="Registrarcomision1.php">Comision</a></li>
                    <li><a href="Registrobanco.php">Banco</a></li>
                    <li><a href="Rolbuscar.php">Rol</a></li>
                    <li><a href="Pagobuscar.php">Pago y legalizacion</a></li>
                    <li><a href="Bonos_descuentos_registro.php">Bonos o descuentos</a></li> 
                </ul>
            </li>
            <li><a href="">Buscar</a>
                <ul>
                    <li><a href="buscarcomision.php">Tabla de comisiones</a></li>   
                    <li><a href="Bonos_historial.php">Bonos y descuentos</a></li>
                    <li><a href="OrdenHistoricoventas.php">Hisotrico de Ventas</a></li>
                    <li><a href="BuscarAsesor.php">Usuario</a></li>
                    
                </ul>
            </li>
            <li><a href="">Eliminar</a>
                <ul>
                <li><a href="Eliminarorden1.php">Orden de trabajo</a></li>
                    <li><a href="Eliminarusuario1.php">Usuario</a></li>
                    <li><a href="Eliminarbonos1.php">Bonos o descuentos</a></li>
                    <li><a href="Eliminarcomision1.php">Comisiones</a></li>
                </ul>
            </li>
            <li><a href="">Liquidacion</a>
                <ul>
                    <li><a href="LiquidacionVentas.php">Liquidacion de ventas</a></li>   
                    <li><a href="LiquidacionBonos.php">Liquidacion bonos y descuentos</a></li>
                </ul> 
               </li> 
                <li><a href="">Producto</a>
                    <ul>
                        <li><a href="https://tienda.claro.com.co">Visitar tienda</a></li>
                </ul>
            </ul>
            <ul class="nav">  
                <li><a href="">Nuevas ofertas</a> 
                <ul>
                    <li> <a href="https://www2.claro.com.co/personas/servicios/promociones/">ofertas del mes</a></li>
                </ul>          
                    
            </ul>
             
        <ul class="nav"> 
            <li><a href="">Capacitaciones</a>
                <ul>
                    <li><a href="https://www.youtube.com/watch?v=N0389X9kw7Y">Mejora de ventas</a></li>
                </ul>
            </li>    
        </ul>    
        <ul class="nav"> 
            <li><a href="">Actualizar</a>
                <ul>
                    <li><a href="14buscar.php">Actualizar datos</a></li>
                </ul>
            </li>    
        </ul>    
            
            </nav>            
        </section> 
        
        </div>
</body>
</html>