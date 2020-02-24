<?php 
include 'conexao.php';
include 'verificar.php';

 ?>

 <!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/csspag.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <title> Defi </title>

    
</head>

<body>
      
      <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-tcc custom" style="background-color: #56BAED">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="fotos\iconlog.png" width=35 height=35></i> Defi </a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                            Cidades 
                        </a>
                        <div class="container">
                            <div class="row">
                                <div class="dropdown">
                                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" href="#"> Caçapava</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item"><a tabindex="-1" href="listahotelcpv.php"><i class="fas fa-hotel icone-preto"></i> Hotelaria </a></li>
                                                                                               
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" href="#"> Taubaté </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item"><a tabindex="-1" href="listahoteltbt.php"><i class="fas fa-hotel icone-preto"></i> Hotelaria </a></li>
                                                                                               
                                            </ul>
                                        </li>                                    
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home
                            <span class="sr-only">(current)</span>
                    </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="sobre.php"> Sobre </a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link">Olá, <?php echo $_SESSION['usuario']; ?></a>
                    </li>
                     <li class="nav-item active">
                    <a class="nav-link" href="sair.php"> Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</body>
</html>