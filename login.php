<?php  
session_start();
include 'conexao.php';

?>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<meta http-equiv=”Content-Type” content=”text/html; charset="iso-8859-1">
	<meta http-equiv=”Content-Type” content=”text/html; charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/css2.css">


<!------ Include the above in your HEAD tag ---------->
<div class="container">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="assets/imagens/logo.png" id="icon" alt="User Icon" />
    </div>
    <?php 
    if(isset($_SESSION['nao_autenticado'])):
     ?>
 	<div class="notification is-danger" id="errousuario">
 		<p>ERRO: Usuario ou senha invalidos.</p>
 	</div>
 	<?php 
 	endif;
 	unset($_SESSION['nao_autenticado']); ?>
    <!-- Login Form -->
    <form action="logar.php" method="post">
      <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="Usuario">
      <input type="password" id="senha" class="fadeIn third" name="senha" placeholder="Senha">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="cadastrarusuario.php">Cadastrar-se</a>
    </div>

  </div>
</div>
</div>
