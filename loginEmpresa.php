<?php session_start();
if(isset($_SESSION['empresa']))
{
	header('Location: index.php');
}
$errores='';

if($_SERVER['REQUEST_METHOD']== 'POST')
{
	$correo= filter_var(strtolower($_POST['correo']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password = hash('sha512', $password);
	try{
	$conexion= new PDO('mysql:host=localhost;dbname=UWork', 'root', '');
	}
	catch(PDOException $e){
		echo "Error" . $e->getMessage();
	}

	$statement= $conexion->prepare('SELECT * FROM empresas WHERE correo = :correo AND password = :password');
	$statement->execute(array(
		':correo' => $correo,
		':password' => $password
		));

	$resultado = $statement->fetch();
	echo $resultado;
	if($resultado !== false)
	{
		$_SESSION['empresa'] = $correo;
		header('Location: index.php');
	}
	else
	{
		$errores .= 'Datos incorrectos  <br />';
	}
}

$enviado='';

		if(!$errores)
		{
	
			$enviado= 'true';
		}




require 'loginEmpresa.view.php';
?>