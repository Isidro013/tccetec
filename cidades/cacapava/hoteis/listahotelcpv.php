<?php 
include "navbar.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Projeto Defi - Acessibilidade para todos.</title>
	<meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-1″>
	<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
	<meta name="viewport" content="width-device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/css/csspag.css">
	<style type="text/css">
	
	#lista{

	padding-top: 50px;	

	}	

	#divcidades{
		background-color: red;
	}
	</style>
</head>
<body>
	<div id="lista" class="container">
		<div class="row">
			<div class="col-sm-6 col-xm-12" id="divcidades">

			</div>
			<div class="col-sm-6 col-xm-12">
					<?php

						include 'conexao.php';

						$sql = "SELECT id, nome, endereco FROM projetodefi.projetodefi";
						$resultado = $con->query($sql);

						if ($resultado->num_rows > 0){
						
						echo "<table border='1'>";
						echo "<tr><th>ID</th><th>Nome</th><th>endereco</th></tr>";
						
						while($linha = $resultado->fetch_assoc()){
							echo "<tr><td id='listaderesultado'><a href='verEstabelecimento.php?id=" . $linha['id'] . "'>" . $linha["id"] . "</td><td>" . $linha["nome"] 
							. "</td><td>" . $linha["endereco"] . "</td></tr>";
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

