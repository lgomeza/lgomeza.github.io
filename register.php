<?php session_start();

if(isset($_SESSION['usuario']))
{
	header('Location: index.php');
}
$errores='';
$enviado='';

if($_SERVER['REQUEST_METHOD']== 'POST')
{
	$nombre= $_POST['nombre'];
	$apellido= $_POST['apellido'];
	$edad= $_POST['edad'];
	$universidad= $_POST['universidad'];
	$carrera= $_POST['carrera'];
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
		if(!empty($apellido))
		{
			$apellido= trim($apellido);
			$apellido=filter_var($apellido, FILTER_SANITIZE_STRING);

		}
		else
		{
			$errores.= 'Por favor ingresa un apellido <br />';
		}

		if(!empty($edad))
		{
			$edad=trim($edad);
			$edad= filter_var($edad,FILTER_SANITIZE_NUMBER_INT);
			

		}
		else
		{
			$errores.= 'Por favor ingresa una edad <br />';
		}
		if(!empty($universidad))
		{
			$universidad= trim($universidad);
			$universidad=filter_var($universidad, FILTER_SANITIZE_STRING);

		}
		else
		{
			$errores.= 'Por favor ingresa una institucion educativa <br />';
		}
		if(!empty($carrera))
		{
			$carrera= trim($carrera);
			$carrera=filter_var($carrera, FILTER_SANITIZE_STRING);

		}
		else
		{
			$errores.= 'Por favor ingresa una carrera <br />';
		}
		if(!empty($password))
		{
	
			
		}

		else
		{
			$errores.= 'Por favor ingresa una contraseña <br />';

		}

		if(!empty($nombre) or !empty($apellido) or !empty($edad) or !empty($universidad) or !empty($carrera) or !empty($correo) or !empty($password) or !empty($password2))
		{
			try{
				$conexion= new PDO('mysql:host=localhost;dbname=UWork', 'root', '');
			}
			catch(PDOException $e)
			{
				echo "Error" . $e->getMessage();
			}

			$statement= $conexion->prepare('SELECT * FROM usuarios WHERE correo= :correo LIMIT 1');
			$statement->execute(array(':correo' => $correo));
			$resultado= $statement->fetch();

			if($resultado !=false )
			{
				$errores .= 'El correo ingresado ya existe <br />';
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
			$statement = $conexion->prepare('INSERT INTO usuarios (id, nombre,apellido, edad, universidad, carrera, correo, password ) VALUES (null, :nombre, :apellido, :edad, :universidad, :carrera, :correo, :password)');
			$statement->execute(array(
				':nombre' => $nombre,
				':apellido' => $apellido,
				':edad' => $edad,
				':universidad'=>$universidad,
				':carrera'=>$carrera,
				':correo'=> $correo,
				':password'=>$password 
			 ));
		}

		header('Location: login.php');
}

require 'register.view.php';
?>