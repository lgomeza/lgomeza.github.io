<!DOCTYPE html>
<html>
<head>
	<title>Ofertas</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="ofertica.css">
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/tuerca.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet">
</head>

<body>
<?php
	require 'header.php';
	?>

<br>
<br>
	<div id="container">
	<div class="blog-card">
    <div class="meta">
      <div class="photo" style="background-image: url(software.jpg)"></div>
      <ul class="details">
        <li class="author"><a href="#">Poetri FAAS</a></li>
        <li class="date">Febrero 17 de 2019</li>
        <li class="fa fa-money">   $1'500,000 COP/Mensual</li>
        <li class="tags">
          <ul>
            <li><a href="#">Desarrollador</a></li>
            <li><a href="#">Código</a></li>
            <li><a href="#">Python</a></li>
            <li><a href="#">Java</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="description">
      <h1>Desarrollo de Software</h1>
      <h2>Trabajo con baja experiencia y tiempo negociable</h2>
      <p>Se busca estudiante de pregado con bases en desarrollo web para trabajar en un proyecto durante mínimo 2 semanas.</p>
      <p class="read-more">
        <a href="software.php">Saber más</a>
      </p>
    </div>
  </div>

   <div class="blog-card">
    <div class="meta">
      <div class="photo" style="background-image: url(perros.jpg)"></div>
      <ul class="details">
        <li class="author"><a href="#">Santiago Restrepo</a></li>
        <li class="date">Febrero 10 de 2019</li>
        <li class="fa fa-money">   50,000 COP/Diario</li>
        <li class="tags">
          <ul>
            <li><a href="#">Perros</a></li>
            <li><a href="#">Parque</a></li>
            <li><a href="#">Pasear</a></li>
            <li><a href="#">Trabajo</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="description">
      <h1>Paseador de perros</h1>
      <h2>Trabajo informal con disponibilidad sabados y domingos</h2>
      <p> Se busca estudiante universitario con dispoinibilidad en los fines de semana para cuidar perros de 1-2 horas.</p>
      <p class="read-more">
        <a href="perros.php">Saber más</a>
      </p>
    </div>
  </div>

   <div class="blog-card">
    <div class="meta">
      <div class="photo" style="background-image: url(mesero.png)"></div>
      <ul class="details">
        <li class="author"><a href="#">WOK to Walk</a></li>
        <li class="date">Febrero 2 de 2019</li>
        <li class="fa fa-money">   100,000 COP/Diario</li>
        <li class="tags">
          <ul>
            <li><a href="#">Comida</a></li>
            <li><a href="#">Restaurante</a></li>
            <li><a href="#">Mesero</a></li>
            <li><a href="#">China</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="description">
      <h1>Mesero de Restaurante</h1>
      <h2>Trabajo a tiempo completo negociable por 1 mes</h2>
      <p> Se necesita un estudiante universitario con tiempo disponible para trabajar 2-3 días semanales como mesero de un restaurante de comida china.</p>
      <p class="read-more">
        <a href="mesero.php">Saber más</a>
      </p>
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