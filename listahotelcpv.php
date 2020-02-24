<!DOCTYPE html>
<html>
<head>
	<title>Projeto Defi - Acessibilidade para todos.</title>
	
	
<meta http-equiv=”Content-Type” content=”text/html; charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/css/csspag.css">
	<link rel="stylesheet" type="text/css" href="assets/css/css6.css"></style>
</head>

<?php 

include "navbar.php";

 ?>

<body>
<div class="container" id="div1">
	<div class="row">
		<div class="col-sm-1 col-xm-12">

			

		</div>
		
		<div class="col-sm-8 col-xm-12">

			<h2>Hotéis disponíveis em Caçapava.</h2>

		</div>	
		<div class="col-sm-3 col-xm-12">

			<div class="col-sm-3 col-xm-12">
			
		
		</div>

		</div>		

	</div>

</div>


<div class="container" id="div2">
	<div class="row">
		<div class="col-sm-1 col-xm-12">

			

		</div>
		
		<div class="col-sm-11 col-xm-12">

			<ol class="breadcrumb" id="div2">
			<li class="breadcrumb-item">
				<a href="index.php"><i class="fa fa-home"></i> Home</a>
				<li class="breadcrumb-item active" aria-current="page">Hotéis Caçapava</li>
            </ol>
			</li>	

		</div>	
	
	</div>	
</div>


	<div class="container" id="div3">
		<div class="row">

				<div class="col-sm-1 col-xm-12">

				</div>

				<div class="col-sm-11 col-xm-12" id="div4">
					<?php

						include 'conexao.php';

						$sql = "SELECT id,nome, endereco, infos, bomsaber, acessibilidade, acessibilidade2, acessibilidade3, bomsaber2, bomsaber3, infos2, infos3, infos4, infos5, infos6 FROM projetodefi.hoteiscpv";
						$resultado = $con->query($sql);

						if ($resultado->num_rows > 0){
						
						echo "<table border='1'>";
						
						
						while($linha = $resultado->fetch_assoc()){
							echo utf8_encode("<tr><td><h6><a href='verEstabelecimento.php?id=" . $linha['id'] . "'>" . $linha["nome"] . "</h6></td><td>" . $linha["endereco"] . "</td></tr>");
						}
						
						echo "</table>";
						}else {
							echo "Nenhum resultado";
						}

						$con->close();
						
					 ?>
				</div>	
				
		</div>
		
	</div>
	
</body>
</html>

<?php 

include "footer.php";

 ?>

