<?php session_start();

if(isset($_SESSION['empresa']))
{
	header('Location: index.php');
}
$errores='';
$enviado='';

if($_SERVER['REQUEST_METHOD']== 'POST')
{
	$nombre= $_POST['nombre'];
	$telefono= $_POST['Telefono'];
	$NIT= $_POST['NIT'];
	$correo= $_POST['correo'];
	$password= $_POST['password'];
	$password2= $_POST['password2'];

	if(!empty($nombre))
		{
			$nombre= trim($nombre);
			$nombre=filter_var($nombre, FILTER_SANITIZE_STRING);
			$nombre= strtolower($nombre);
		}
		else
		{
			$errores.= 'Por favor ingresa un nombre <br />';
		}


		if(!empty($correo))
		{
			$correo=filter_var($correo, FILTER_SANITIZE_EMAIL);

			if(!filter_var($correo, FILTER_VALIDATE_EMAIL))
			{
				$errores .= 'Por favor ingresa un correo valido <br />';
			}
		}
		else
		{
			$errores.= 'Por favor ingresa un correo <br />';
		}
	

		if(!empty($telefono))
		{
			$telefono=trim($telefono);
			$telefono= filter_var($telefono,FILTER_SANITIZE_NUMBER_INT);
			

		}
		else
		{
			$errores.= 'Por favor ingresa un telefono <br />';
		}
		if(!empty($NIT))
		{
			$NIT=trim($NIT);
			

		}
		else
		{
			$errores.= 'Por favor ingresa un NIT <br />';
		}
		
		if(!empty($password))
		{
	
			
		}

		else
		{
			$errores.= 'Por favor ingresa una contraseña <br />';

		}

		if(!empty($nombre) or  !empty($telefono) or !empty($NIT) or !empty($correo) or !empty($password) or !empty($password2))
		{
			try{
				$conexion= new PDO('mysql:host=localhost;dbname=UWork', 'root', '');
			}
			catch(PDOException $e)
			{
				echo "Error" . $e->getMessage();
			}

			$statement= $conexion->prepare('SELECT * FROM empresas WHERE NIT= :NIT LIMIT 1');
			$statement->execute(array(':NIT' => $NIT));
			$resultado= $statement->fetch();

			if($resultado !=false )
			{
				$errores .= 'El NIT ingresado ya existe <br />';
			}

			$password= hash('sha512', $password);
			$password2= hash('sha512', $password2);

			if($password != $password2)
			{
				$errores .= 'Las contraseñas no son iguales <br />';
			}

		}
		if($errores == '')
		{
			$statement = $conexion->prepare('INSERT INTO empresas (id, nombre, NIT, telefono, correo, password ) VALUES (null, :nombre, :NIT, :Telefono, :correo, :password)');
			$statement->execute(array(
				':nombre' => $nombre,
				':NIT' => $NIT,
				':Telefono' => $telefono,
				':correo'=> $correo,
				':password'=>$password 
			 ));
			header('Location: loginEmpresa.php');
		}

		
}

require 'registerEmpresa.view.php';
?>