<?php  
session_start();
include 'conexao.php';

?>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<meta http-equiv=”Content-Type” content=”text/html; charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/css2.css">
  <link rel="stylesheet" type="text/css" href="assets/css/css3.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<!------ Include the above in your HEAD tag ---------->
<div class="container">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
     <form action="cadastrando.php" method="post">
  <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
     </div>
        <input name="nomecomple" class="form-control" placeholder="Nome completo" type="text">
    </div> 
    <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
     </div>
        <input name="nomeuser" class="form-control" placeholder="Nome usuario" type="text">
    </div><!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
     </div>
        <input name="email" class="form-control" placeholder="Email" type="text">
    </div> <!-- form-group// -->
    
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    </div>
        <input name="senha" class="form-control" placeholder="Crie uma senha" type="password">
    </div> <!-- form-group// -->
                                    
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Criar Conta</button>
    </div> <!-- form-group// -->      
    <p class="text-center">Cadastrado? <a href="login.php">Acesse</a> </p>                                                                 
</form>
    </div>

  </div>
</div>
</div>
