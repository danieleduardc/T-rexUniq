<!DOCTYPE html>
<html>
<head>
	<title>T-rex | Encuesta</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body style="background-color: #c6b28dc0" >

<form method="post">
		<h1 style="margin: 15px" >Encuesta T-rex</h1>	

		<div>
			<img src="img/prueba2.png" width="120" height="80"  alt="" class="pruebas">
		</div>
		<label><b>1. Que camino nos lleva a la meta: </b></label>
		<select id="prueba" name="prueba1" style="margin: 10px">
			<option value=0>→↓→↑</option>
			<option value=5>↑→→↓</option>
			<option value=0>↓↓→↑</option>
		</select>

		<div>
			<img src="img/prueba1.png" alt="" class="pruebas">
		</div>
		<label><b>2. Que camino nos lleva a la meta: </b></label>
		<select id="prueba" name="prueba2" style="margin: 10px">
			<option value=0>↓→→↓</option>
			<option value=5>→→→↓</option>
			<option value=0>→↓→↑</option>
		</select>
		
		<div>
			<img src="img/prueba3.png" alt="" width="210" height="110" class="pruebas">
		</div>
		<label><b>3. Que movimientos tiene figura para llegar a la meta: </b></label>
		<select id="prueba" name="prueba3" style="margin: 10px">
			<option value=0>↑←↑→↓↓←↓↓→↓↓→→←↑→</option>
			<option value=5>↓↓→↓↓→→↑↑→→↑→→↓↓↓</option>
			<option value=0>↓↓↓→↓↓→→↑↑→→↑→→↓↓</option>
		</select>

		<label><b>Ingresa tu nombre:</b></label>
    	<input type="text" name="name" placeholder="Nombre Completo" style="margin: 10px">
	
    	<label><b>Como estuvo el juego ?</b></label>
		<select id="calificacion" name="calificacion" style="margin: 10px">
			<option value=0>Exelente</option>
			<option value=1>Bueno</option>
			<option value=2>Regular</option>
			<option value=3>Malo</option>
			<option value=4>Muy Malo</option>
		</select>
		<br>
		<label><b>Te parecio muy dificil ?</b></label>
		<select id="calificacion" name="dificultad" style="margin: 10px">
			<option value=0>No nada</option>
			<option value=1>Moderado</option>
			<option value=2>Mas o menos</option>
			<option value=3>Dificil</option>
			<option value=4>Perdi muchas neuronas</option>
		</select>
		<label><b>Cual mapa te gusto mas ?</b></label>
		<select id="mapa" name="mapa" style="margin: 10px">
			<option value=1>Mapa 1</option>
			<option value=2>Mapa 2</option>
			<option value=3>Mapa 3</option>
			<option value=4>Mapa 4</option>
		</select>
		<br>
		<label><b>Lo recomendarias ?</b></label>
		<select id="mapa" name="recomendacion" style="margin: 10px">
			<option value=1>Si</option>
			<option value=2>No</option>
		</select>
		
		<input type="submit" value= "Enviar" name="register">
    </form>
		<?php
		include("registrar.php");
		?>
</body>
</html>