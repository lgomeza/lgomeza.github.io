<!DOCTYPE html>
<html>
<head>
	<title>Registrarse</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/reg.css">
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/tuerca.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet">
</head>

<body>

	<br>

	<h1 align="center">Registrarse como Empresa</h1>
	<br>

	<div class="wrap">
	<form action= "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login">
	<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la empresa:" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
		
	<input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Telefono de contacto:" value="<?php if(!$enviado && isset($Telefono)) echo $Telefono ?>">

	<input type="text" class="form-control" id="NIT" name="NIT" placeholder="NIT: " value="<?php if(!$enviado && 
		isset($NIT)) echo $NIT ?>">
	
	<input type="text" class="form-control" id="correo" name="correo" placeholder="Correo:" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
	
	<input type="password" class="form-control" id="password" name="password" placeholder="Contraseña:" >
	<input type="password" name="password2" class="form-control" id="password" placeholder="Repetir Contraseña:">
	
	<?php if(!empty($errores)): ?>
		<div class="alert error">
			<?php echo $errores; ?>
		</div>
		<?php elseif ($enviado): ?>
		<div class="alert success">
			<p>Enviado Correctamente</p>
		</div>
		 
	<?php endif ?>
		<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>

	</form>
	<div class="cuenta">
	<p> ¿ Ya tienes cuenta ? </p><a href="loginEmpresa.php">Inicia Sesion</a>
	</div>
	</div>

	<footer>
		<div id="foo">
		<a href="index.php" id="logo"><img src="logo.png" width="160px" height="80px"></a>			
		<p>U-Work. Bogotá, Colombia. Pbx: 321 3457213 - 696 8501 Copyright © 2019 - All rights reserved</p>
		</div>
	</footer>
</body>
</html>