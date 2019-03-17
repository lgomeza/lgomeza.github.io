<!DOCTYPE html>
<html>
<head>
	<title>Ofertas - Mesero</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="mesero.css">
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/tuerca.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet">
</head>

<body>
<?php
	require 'header.php';
	?>

  <div class="recipe-card">
	<aside>

		<img src="mesero.jpg" alt="Chai Oatmeal" />

	</aside>

	<article>

		<h2>Mesero de restaurante</h2>
		<h3>Trabajo Informal/Formal</h3>

		<ul>
			<li><span class="icon icon-users"></span><span>3</span></li>
			<li><span class="icon icon-clock"></span><span>Fines de semana jornada completa</span></li>
			<li><span class="icon icon-level"></span><span>Trabajador, responsable y paciente</span></li>
		</ul>

		<p>Se busca estudiante universitario para trabajar como mesero en un restaurante de comida china (Wlak to WOK) que tenga tiempo disponible los fines de semana para trabajar jornada completa. Es negociable.</p>

		<p class="ingredients"><span>Requisitos:&nbsp;</span>Paciencia, actitud, amor por la cocina.</p>

	</article>

</div>

<div class="box">
	<a class="button" href="#popup1">APLICAR</a>
</div>

<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Aplicaste!</h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
			Tu perfíl será enviado a la empresa como aplicación al trabajo. Tendrás respuesta en los próximos días.
		</div>
	</div>
</div>

	<footer>
		<div id="foo">
		<a href="#" id="logo"><img src="logo.png" width="160px" height="80px"></a>			
		<p>U-Work. Bogotá, Colombia. Pbx: 321 3457213 - 696 8501 Copyright © 2019 - All rights reserved</p>
		</div>
	</footer>
</body>
</html>