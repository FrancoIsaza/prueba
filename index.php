<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<title>index</title>
</head>
<body>
	<header>
		<?php include 'menu.php'; ?>

		<br>
		<div class="content">
			<br>
			<B><p>Bienvenidos a mi sitio web de M&B. una empresa que se encarga de la administración, 
				ya sea de consorcios de edificios, o en general. Además, todo lo que esté relacionado 
				a Recursos Humanos. Si te interesa, y te querés contactar con nosotros, despliega 
				el menú "Contacto". Si querés saber quiénes somos, despliega el menú "Nosotros"  
				y vas a conocer nuestra historia.</p>
				<br>
				<P>¡Estamos para ayudarte! No dudes en mandarnos mensaje o pasar por nuestra oficina.</p>
			</B>
			<br>
		</div>
	</header>
	<div class="conteiner">
		<div class="slider">
			<input type="radio" name="slider" id="slideOne" checked>
			<input type="radio" name="slider" id="slideTwo">
			<input type="radio" name="slider" id="slideThree">

			<div class="buttons">
				<label for="slideOne"></label>
				<label for="slideTwo"></label>
				<label for="slideThree"></label>
			</div>

			<div class="contentt">
				<div class="firstslide"><img src="img/agenda - copia.png" alt=""></div>
				<div class="secondslide"><img src="img/taza.png" alt=""></div>
				<div class="thirdslide"><img src="img/llavero.png" alt=""></div>
			</div>

		</div>

	</div>
</body>
</html>