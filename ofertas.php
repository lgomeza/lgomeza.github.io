<?php session_start();

if(isset($_SESSION['usuario']))
{
	require 'ofertas.view.php';
}
else
{
	header('Location: login.php');
}
?>