<?php  
session_start();
include "conexao.php";
 

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('location: login.php');
	exit(); 
}

$usuario = mysqli_real_escape_string($con, $_POST['usuario']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);

$query = "SELECT * from tbl_usuario where usuario = '$usuario' and senha = '$senha'";  

$resultado = mysqli_query($con, $query);  
 
$qtdLinhas = mysqli_num_rows($resultado);

if ($qtdLinhas == 1) {
	$_SESSION['usuario'] = $usuario;
	header('location: index.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('location: login.php');
	exit();
}