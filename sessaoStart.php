<?php 
  session_start(); 

  if (!isset($_SESSION['usuario'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['usuario']);
  	header("location: login.php");
  }
?>