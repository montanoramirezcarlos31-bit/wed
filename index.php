<!DOCTYPE html>
<?php
	include("conexion.php"); //Llamar al archivo conexión
	$cliente = "";
	$telefono = "";
	$mensajes = "";

	if(isset($_POST['enviar'])){
		$cliente = ($_POST['cliente']);
		$telefono = ($_POST['telefono']);
		$mensajes = ($_POST['mensajes']);
		
		//Sentencia sql
		$sql = "INSERT INTO comentario( cliente, telefono, mensajes) VALUES ('$cliente', '$telefono', '$mensajes')";
		
		//Consulta
		$query = mysqli_query($con, $sql);
		
		if($query){
			//echo "Compra realizada con exito";
		}
		else{
			//echo "Error en la compra";
		}
	}
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilos.css?v=2">
	<title>Pasteleria</title>

</head>
<body>

	<center>
	<h1>Pasteleria Roma</h1>
	<header>
        <nav>
            <ul>
                <li><a href="#precios">Precios de los productos</a></li>
                <li><a href="#descuentos">descuentos</a></li>
                <li><a href="#pedidos">Pedidos</a></li>
            </ul>
        </nav>
    </header>
	
	<section>
		<table>
			<td>
				<p>
					Desde 1987 hemos trabajado con dedicación y pasión para hacer más felices a las personas con nuestros 
					pasteles y gelatinas,siendo parte de momentos especiales como cumpleaños, reuniones y celebraciones
					importantes. A lo largo de los años,hemos perfeccionado nuestras recetas y mejorado nuestro servicio,
					siempre pensando en brindar la mejor calidad y sabor a nuestros clientes. Nos llena de orgullo haber 
					acompañado tantas historias y crear recuerdos inolvidables con cada uno de nuestros productos. Hoy, 
					adaptándonos a los nuevos tiempos, hemos decidido dar un paso adelante y abrir nuestra primera página web,
					 con el objetivo de estar más cerca de ti, facilitar tus pedidos y seguir endulzando cada uno de tus momentos especiales.
				</p>
			</td>
			<br>
			<td>
				<img src="Logo.jpg" alt="cara del vendedor" whidth="400" class = "descripcion">
			</td>
		</table>
	</section>

	<section id="precios">
	<h1>Pasteleria la pasión</h1><br><br>
	<table border = "1">
		<tr>
			<td> <img src ="pchoco.jpeg" alt="pastel de chocolate" width="200"></td> 
			<td><h3>Pastel de chocolate $800 pesos</h3><br><br>Pastel de chocolate con fresas en la parte superior<br><br>stok: 5</td>
			<td> <img src ="gfresa.jpeg" alt="gelatina" width="200"></td> 
			<td><h3>gelatina de fresa $270</h3><br><br>Gelatina de fresa hecha de forma artesanal con unestras fuertes mujeres trabajadoras<br><br>stok: 8</td>
		</tr>
		<tr>
			<td> <img src ="p2.jpg" alt="pastel de corazon" width="200"></td> 
			<td><h3>Pastel de chocolate $600 pesos</h3><br><br>Un hermoso pastel con forma de corazon, para siempre sentir amor en donde sea<br><br>stok: 5</td>
			<td> <img src ="g2.jpg" alt="gelatina de mango" width="200"></td> 
			<td><h3>gelatina de fresa $370</h3><br><br>Gelatina de mango para los calores de verano<br><br>stok: 9</td>
		</tr>
		<tr>
			<td> <img src ="p3.jpg" alt="pastel de hello kitty" width="200"></td> 
			<td><h3>Pastel de chocolate $800 pesos</h3><br><br>Pastel de de hollw kitty<br><br>stok: 10</td>
			<td> <img src ="g3.jpg" alt="gelatina veraniega" width="200"></td> 
			<td><h3>gelatina de fresa $270</h3><br><br>Gelatina veraniega para calmar el calor del verano<br><br>stok: 6</td>
		</tr>
	</table>
	<br><br>
	<?php 
	 $_stok1;
	 $_stok2;
	 $_stok3;
	 $_stok4;
	 $_stok5;
	 $_stok6;
	 $_prod1 = "pastel de chocolate";
	 $_prod2 = "Gelatina de fresa";
	 $_prod3 = "pastel de corazon";
	 $_prod4 = "gelatina de mango";
	 $_prod5 = "pastel de hello kitty";
	 $_prod6 = "gelatina veraniega";
	 $_precio1 = 800;
	 $_precio2 = 270;
	 $_precio3 = 600;
	 $_precio4 = 370;
	 $_precio5 = 650;
	 $_precio6 = 200;

	 

	 /*determinar cual producto es mas caro*/
	 
	 if($_precio1 == $_precio2){
	 	echo $_prod1 . "y" . $_prod2 . "tienen el mismo precio";
	 }else{
	 	if($_precio1>$_precio2){
	 		echo $_prod1. " es menos caro " .$_precio2 . "<br>";
	 		echo $_prod2. " es más caro " .$_precio1 . "<br>";
	 	}else{
	 		echo $_prod2. " es más caro ". $_precio1 . "<br>";
	 		echo $_prod1. " es menos caro " .$_precio2 . "<br>";
	 	}
	 }
	 ?>
	</section>


	<section id="descuentos">
	<br><br>
	<table border = "1">
		<tr>
			<td> <img src ="cake.jpg" alt="pastel de chocolate" width="200"></td> 
			<td><h3>Pastel de chocolate $550 pesos</h3><br><br>Pastel de chocolate con fresas en la parte superior<br><br>stok: 5</td>
		</tr>
		<tr>
			<p>Descuentos</p>
			<p>los descuetos bajan con forme la semana avanza</p>
		<tr>
	</table>

	<br>
	 <?php 

	 $_stok1;
	 $_stok2;
	 $_prod1 = "pastel de chocolate";
	 $_prod2 = "Gelatina_fresa";
	 $_precio1 = 550;
	 $_precio2 = 200;
	 $_dxd = 0;

	 for ($i=2; $i <=10 ; $i++) { 
	 	$_dxd = $_dxd + 0.01;
		 $_descuento = ($_precio1 - ($_precio1*$_dxd));
	 	echo "dia ". $i . " promocion de decuento de " . $_descuento . "<br>";
	 }
	  ?>
	</section>

	<section id = "pedidos">
		<h2>Compra un Pastel</h2>

		<form action="scrip5.php" method="POST">
			<label>Escribe tu nombre: </label><br>
			<input type = "text" name = "cliente" placeholder = "Ej. Juanito Alcachofa"><br><br>
			
			<label>Escribe el numero de tu telefono:</label><br>
			<input type = "text" name = "telefono" placeholder = "Ej. 1234567890"><br><br>

			<label>¿Que producto desea?:</label><br>
			<textarea name = "mensajes" class = "campo-formulario" rows= "5"></textarea><br><br>
			
			<button type = "submit" name = "enviar" id = "btn_enviar">Confirma tu compra</button>
		</form>
	</section>

    <footer>
	 	<h2>Es de nuestro agrado servirle<h2>
		<p>Nos puede encontar en: Juan Rulfo No 8 colonia manantiales</p>
		<p>Encoentranos en Facebook como @Constantinopla</p>
		<p>Nos puedes contactar con el numero: 22810222000</p>
		<p>Horarios de 9:00 AM a 7:00 PM</p>
		<p><small>Emprendimiento por pp y sus amigos<br>&copy;2005 Pasteleria la pasión </p>
	</footer>
	</center>

</body>
</html>