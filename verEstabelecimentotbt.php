<?php 

	include 'navbar.php';

	$id = $_GET['id'];

	include "conexao.php";

	$sql = "SELECT nome, endereco, infos, bomsaber, acessibilidade, acessibilidade2, acessibilidade3, bomsaber2, bomsaber3, infos2, infos3, infos4, infos5, infos6 FROM projetodefi.hoteistbt where id=$id";

	$resultado = $con->query($sql);

	$linha = $resultado->fetch_assoc();

	$nome = $linha['nome'];
	$endereco = $linha['endereco'];
	$infos = $linha['infos'];
	$infos2 = $linha['infos2'];
	$infos3 = $linha['infos3'];
	$infos4 = $linha['infos4'];
	$bomsaber = $linha['bomsaber'];
	$bomsaber2 = $linha['bomsaber2'];
	$bomsaber3 = $linha['bomsaber3'];
	$acessibilidade = $linha['acessibilidade'];
	$acessibilidade2 = $linha['acessibilidade2'];
	$acessibilidade3 = $linha['acessibilidade3'];
	

?>

 <!DOCTYPE html>
<html>
<head>
	
<meta http-equiv=”Content-Type” content=”text/html; charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/css/csspag.css">
	<link rel="stylesheet" type="text/css" href="assets/css/css5.css"></style>
</head>

<body>
<!--Inicio da div Caminho da Pagina -->

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-xm-12">
			<div class="container" id="div2">
	<div class="row">
		<div class="col-sm-1 col-xm-12">

			

		</div>
		
		<div class="col-sm-11 col-xm-12">

			<ol class="breadcrumb" id="div2">
			<li class="breadcrumb-item">
				<a href="index.php"><i class="fa fa-home"></i> Home</a>
				<a href="listahoteltbt.php"><li class="breadcrumb-item active" aria-current="page">Hotéis Taubaté</a></li>
				<li class="breadcrumb-item active" aria-current="page"><?php echo utf8_encode($nome);?></li>
            </ol>
			</li>	

		</div>	
	
	</div>	
</div>
		</div>
	</div>
	
</div>

<!--Fim da div Caminho da Pagina -->

<!--Inicio da Aba de Informações-->

<div class="container" id="primeiradiv">
	<div class="row ">		
		<div class="col-sm-3 col-xm-12">
			<button id="btn-cadastro" type="button" class="btn btn-dark btn-lg border border-light" href="cadastrarEmpresa.php">Cadastrar Empresa</button>
		</div>

		<div class="col-sm-9 col-xm-12 d-flex w-100" >
			<div class="d-flex flex-row w-100">
				<div class="flex-row w-100" id="nav-info">
					<a href="#informa"><button type="button" class="btn btn-outline-dark borde border-light">Informações</button></a>
				</div>
								<div class="flex-row w-100" id="nav-info">
					<a href="#bomsaber"><button type="button" class="btn btn-outline-dark borde border-light">Bom Saber</button></a>
				</div>
				<div class="flex-row w-100" id="nav-info">
					<button type="button" class="btn btn-outline-dark borde border-light" data-toggle="modal" data-target="#modalavaliacao">Avaliações de Visitante</button>

					<!-- Modal -->

						<div class="modal fade" id="modalavaliacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        ...
						      </div>
						      <div class="modal-footer">
						       
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						        
						      </div>
						    </div>
						  </div>
						</div>

					<!--Fim Modal -->	

				</div>
			</div>
			
		</div>	
	
	</div>
</div>

<!--Fim da Aba de Informações-->

<!--Inicio da Div Nome e localização-->

<div class="container">
	<div class="row">
		<div class="col-sm-3 col-xm-12"  id="linhaNome">
			<a><img src="img/cadeira.png" width=25 height=25>Acessibilidade para Todos!</a>
		</div>
		
		<div class="col-sm-7 col-xm-12" id="nome" >
		<h3><p><?php echo utf8_encode($nome);?></p></h3>
		<a><img src="img/localizacao.png" width=25 height=25></a><?php echo utf8_encode("$endereco");?>
		
		</div>		

		<div class="col-sm-1 col-xm-12">
			
		</div>

		<div class="col-sm-1 col-xm-12">
		</div>
	</div>
</div>

<!--Fim da Div Nome e localização-->

<!--Inicio da div de Navegação e Fotos-->
		<?php 
		if(isset($_SESSION['msg'])){
		echo $_SESSION['msg']."<br><br>";
		unset($_SESSION['msg']);
		}
		?>

<div class="container">
	<div class="row">
		<div class="col-sm-3 col-xm-12 flex-column w-100">
			<div id="pesquisa" class="d-flex flex-column w-100">

				<div class="widget-area no-padding blank">
								<div class="status-upload">
									<form method="post" action="#">
										<textarea placeholder="Deixe sua Avaliação." name="coment"></textarea>
									
										<button type="submit" class="btn btn-dark">Enviar</button>
									</form>
								</div><!-- Status Upload  -->
							</div><!-- Widget A-->
								
								<?php
								
								include_once("conexao.php");

								if(!empty($_POST['coment'])){
									$coment = $_POST['coment'];
									
									//Salvar no banco de dados
									$comentarios = "INSERT INTO comentarios (comentario, created, id_hoteis) VALUES ('$coment', NOW(), $id)";
									$resultado_coment = mysqli_query($con, $comentarios);
									
								}
								?>


							<?php

							if(isset($_SESSION['msg'])){
			echo $_SESSION['msg']."<br><br>";
			unset($_SESSION['msg']);
		}
		?>

				<form method="POST" action="<?php "verEstabelecimento.php?id=$id" ?>" enctype="multipart/form-data">
			<div class="estrelas" id="avalia">
				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"><br>
				
				<input type="submit" class="btn btn-dark" id="btn_avalia" value="Avaliar">
				
			</div>
		</form>
			</div>	

			<?php

			include_once("conexao.php");

			if(!empty($_POST['estrela'])){
				$estrela = $_POST['estrela'];
				$id = $id;
				//Salvar no banco de dados
				$result_avaliacos = "INSERT INTO avaliacoes (qnt_estrela, created, id_hoteiscpv) VALUES ('$estrela', NOW(), $id)";
				$resultado_avaliacos = mysqli_query($con, $result_avaliacos);
			}
			?>

			<div id="mapa" class="d-flex flex-column w-100">
			<a href="https://www.google.com.br/maps/@-23.0937857,-45.6858162,15z"><img src="img/googlemaps.png" width=264 height=98></a>
			</div>
		</div>

		<div class="col-sm-9 col-xm-12" id="fotosdiv">
		

		<?php

		include "conexao.php";

		$fto = "SELECT id, nomeft,imagem1,imagem2,imagem3,imagem4,imagem5,imagem6,imagem7,imagem8,imagem9,imagem10,imagem11,imagem12 FROM projetodefi.imagens where id=$id";

	    $resultado_fto = $con->query($fto);

		$total = $resultado_fto->fetch_assoc();

		$nomeft = $total['nomeft'];
		$imagem1 = $total['imagem1'];
		$imagem2 = $total['imagem2'];
		$imagem3 = $total['imagem3'];
		$imagem4 = $total['imagem4'];
		$imagem5 = $total['imagem5'];
		$imagem6 = $total['imagem6'];
		$imagem7 = $total['imagem7'];
		$imagem8 = $total['imagem8'];
		$imagem9 = $total['imagem9'];
		$imagem10 = $total['imagem10'];
		$imagem11 = $total['imagem11'];
		$imagem12 = $total['imagem12'];

		?>
			<div class="row">
			  <div class="column">
			    <img src="fotos\<?php echo "$imagem1"; ?>" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
			  </div>
			  <div class="column">
			    <img src="fotos\<?php echo "$imagem2"; ?>" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
			  </div>
			  <div class="column">
			    <img src="fotos\<?php echo "$imagem3"; ?>" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
			  </div>
			  <div class="column">
			    <img src="fotos\<?php echo "$imagem4"; ?>" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
			  </div>
			  <div class="column" id="galery">
			    <img src="fotos\<?php echo "$imagem5"; ?>" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
			  </div>
			  <div class="column" id="galery">
			    <img src="fotos\<?php echo "$imagem6"; ?>" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
			  </div>
			  <div class="column" id="galery">
			    <img src="fotos\<?php echo "$imagem7"; ?>" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
			  </div>
			  <div class="column" id="galery">
			    <img src="fotos\<?php echo "$imagem8"; ?>" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
			  </div>
			    <div class="column" id="galery">
			    <img src="fotos\<?php echo "$imagem9"; ?>" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
			  </div>
			    <div class="column" id="galery">
			    <img src="fotos\<?php echo "$imagem10"; ?>" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
			  </div>
			    <div class="column" id="galery">
			    <img src="fotos\<?php echo "$imagem11"; ?>" style="width:100%" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
			  </div>
			    <div class="column" id="galery">
			    <img src="fotos\<?php echo "$imagem12"; ?>" style="width:100%" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
			  </div>
			</div>

			<div id="myModal" class="modal">
			  <span class="close cursor" onclick="closeModal()">&times;</span>
			  <div class="modal-content">

			    <div class="mySlides">
			      <div class="numbertext">1 / 12</div>
			      <img src="fotos\<?php echo "$imagem1"; ?>" style="width:100%">
			    </div>

			    <div class="mySlides">
			      <div class="numbertext">2 / 12</div>
			      <img src="fotos\<?php echo "$imagem2"; ?>" style="width:100%">
			    </div>

			    <div class="mySlides">
			      <div class="numbertext">3 / 12</div>
			      <img src="fotos\<?php echo "$imagem3"; ?>" style="width:100%">
			    </div>
			    
			    <div class="mySlides">
			      <div class="numbertext">4 / 12</div>
			      <img src="fotos\<?php echo "$imagem4"; ?>" style="width:100%">
			    </div>
				
				<div class="mySlides">
			      <div class="numbertext">4 / 12</div>
			      <img src="fotos\<?php echo "$imagem4"; ?>" style="width:100%">
			    </div>

			    <div class="mySlides">
			      <div class="numbertext">5 / 12</div>
			      <img src="fotos\<?php echo "$imagem5"; ?>" style="width:100%">
			    </div>

			    <div class="mySlides">
			      <div class="numbertext">6 / 12</div>
			      <img src="fotos\<?php echo "$imagem6"; ?>" style="width:100%">
			    </div>

			    <div class="mySlides">
			      <div class="numbertext">7 / 12</div>
			      <img src="fotos\<?php echo "$imagem7"; ?>" style="width:100%">
			    </div>

			    <div class="mySlides">
			      <div class="numbertext">8 / 12</div>
			      <img src="fotos\<?php echo "$imagem8"; ?>" style="width:100%">
			    </div>

			    <div class="mySlides">
			      <div class="numbertext">9 / 12</div>
			      <img src="fotos\<?php echo "$imagem9"; ?>" style="width:100%">
			    </div>

			    <div class="mySlides">
			      <div class="numbertext">10 / 12</div>
			      <img src="fotos\<?php echo "$imagem10"; ?>" style="width:100%">
			    </div>

			    <div class="mySlides">
			      <div class="numbertext">11 / 12</div>
			      <img src="fotos\<?php echo "$imagem11"; ?>" style="width:100%">
			    </div>

			    <div class="mySlides">
			      <div class="numbertext">12 / 12</div>
			      <img src="fotos\<?php echo "$imagem12"; ?>" style="width:100%">
			    </div>
			    	
			    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			    <a class="next" onclick="plusSlides(1)">&#10095;</a>

			    <div class="caption-container">
			      <p id="caption"></p>
			    </div>


			</div>    
		</div>

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
		</div>		
	</div>
</div>

<!-- Fim da div de Navegação e fotos-->

<!-- Inicio da div de acessibilidade-->

		 <div class="container">

			<div class="row">
				<div class="col-sm-3 col-xm-12" id="handtalk">
					
					<img src="img/handtalk.png" width=170 height=120 position="justify">
						<h4><b>Olá, eu sou o Hugo!</b></h4><br>

					<p>Aqui você vai conhecer um pouco mais sobre a comunidade surda e a importância da acessibilidade. Seja nas empresas, nas escolas, no governo ou no dia a dia, todos nós podemos quebrar barreiras e construir um mundo mais acessível e inclusivo!<br><br> Vamos fazer a mudança acontecer? 😉

Conheça mais sobre a Hand Talk: <br>
<a href="https://www.handtalk.me"> www.handtalk.me</a></p>
				</div>
				<div class="col-sm-8 col-xm-12" id="acessi">
					<h3 id="acessibilidade">Acessibilidade</h3>
					<?php echo utf8_encode($acessibilidade);?>
					<br><br>
					<?php echo utf8_encode($acessibilidade2);?>
					<br><br>
					<?php echo utf8_encode($acessibilidade3);?>
					<br><br>
					<hr>
				</div>
				
				<div class="col-sm-1 col-xm-12">
					
				</div>
				
			</div>
		  
		</div>

<!-- Fim da div de acessibilidade-->

<!-- Inicio da div de Informações-->
<div class="container" id="informa">
	<div class="row">
		<div class="col-sm-3 col-xm-12">
			
		</div>
		
		<div class="col-sm-8 col-xm-12">
			<h3 id="acessibilidade">Informações</h3>
			<?php echo utf8_encode($infos);?><br><br>
			<?php echo utf8_encode($infos2);?><br><br>
			<?php echo utf8_encode($infos3);?><br><br>

		</div>

		<div class="col-sm-1 col-xm-12">
			
		</div>
		
		
	</div>
	
</div>

<!-- Fim da div de Informações-->

<!-- Inicio da div de Bom saber-->

<div class="container" id="bomsaber">
	<div class="row">
		<div class="col-sm-3 col-xm-12">
			
		</div>
		
	<div class="col-sm-8 col-xm-12">
			<h3 id="acessibilidade">Bom Saber</h3>
			<img src="img/entrada.jpg" width=75 height=75><?php echo utf8_encode($bomsaber);?><br><br>
			<img src="img/saida.jpg" width=75 height=75><?php echo utf8_encode($bomsaber2);?><br><br>
			<img src="img/pet.png" width=40 height=40><?php echo utf8_encode($bomsaber3);?><br><br>

		</div>
		
			<div class="col-sm-1 col-xm-12">
			
		
		</div>
		
		
	</div>

	<div class="row">
		<div class="col-sm-3 col-xm-12">
			
		</div>

		<div class="col-sm-7 col-xm-12">
			<?php echo "$infos4";?> <img src="img/pag.jpg" width=375 height=44>
		</div>

		<div class="col-sm-2 col-xm-12">
			
		</div>

	</div>
	
</div>
<!-- Fim da div de Bom saber-->

</body>
</html>

<?php 

include "footer.php";

 ?>