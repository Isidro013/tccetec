
<!DOCTYPE html>

<html>
<head>

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
  
</head>

<body>
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
              <input name="nomecomple" class="form-control" placeholder="Nome e sobrenome" type="text">
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
              <input name="email" class="form-control" placeholder="Email" type="email">
          </div> <!-- form-group// -->
                
         <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
           </div>
              <input name="senha" id="pass" class="form-control" placeholder="Crie uma Senha" type="password">
          </div> 

         <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
           </div>
              <input name="confirmsenha" id="confirmpass" class="form-control" placeholder="Confirmar senha" type="password">
          </div>  <!-- form-group// -->
                                          
          <div class="form-group">
              <button type="submit" name="btnCadUsuario" class="btn btn-primary btn-block"> Criar Conta</button>
          </div> <!-- form-group// -->      
          <p class="text-center">Cadastrado? <a href="login.php">Acesse</a> </p>                                                                 
      </form>
    </div>
  
  </div>
</div>
</div>
<script type="text/javascript">
var pass = document.getElementById("pass")
  , confirmpass = document.getElementById("confirmpass");

function validatePassword(){
  if(pass.value != confirmpass.value) {
    confirmpass.setCustomValidity("Senhas diferentes!");
  } else {
    confirmpass.setCustomValidity('');
  }
}

pass.onchange = validatePassword;
confirmpass.onkeyup = validatePassword;
</script>

<script type="text/javascript">
  function emailIsValid (email) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
}
</script>
</body>
</html> 