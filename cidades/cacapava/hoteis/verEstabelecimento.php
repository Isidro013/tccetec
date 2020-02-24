<?php 

	include 'navbar.php';

	$id = $_GET['id'];

	include "conexao.php";

	$sql = "SELECT nome, endereco FROM projetodefi.projetodefi where id=$id";

	$resultado = $con->query($sql);

	$linha = $resultado->fetch_assoc();

	$nome = $linha['nome'];
	$endereco = $linha['endereco'];
	

?>

 <!DOCTYPE html>
<html>
<head>
	<meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-1″>
	<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
	<meta name="viewport" content="width-device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/css/csspag.css">
	<style type="text/css">
		
		body{

		padding-top: 100px;

		}
		div{

		
		min-height: 0px;
		
		}

		#pesquisa{

		background-color: #2B9179;
		height: 293px;
		border-radius: 10px;
		padding-top: 20px;
		padding-left: 20px;
		padding-right: 20px;
		padding-bottom: 20px;
		font-family: Helvética;

		}	

		.informacoes{
		flex: 1 0 auto;
		}

		#btn-cadastro{
		border-radius:10px 20px 30px 40px;
		font-family: Helvética;
		border-style: ;
		

		}

		#nav-info{
		text-align: center;
		padding-top: 10px;
		font-family: Helvética;
		border-bottom: 1px solid #767A7A;

		}
		
		#linhaNome{
		height: 70px;
		font-style: italic;
		padding-top: 25px;

		}

		#separar{
		padding-top: 0px; 
		padding-bottom: 10px;

		}
		
		#mapa{
		height: 150px;
		
		}

		#nome{
		padding-top: 10px;
		font-family:Helvética;
		font-style: italic;


		}

		.btn-dark {
 	    color: #fff;
    	background-color: #005944;
    	border-color: #005944;
}
	</style>
</head>

<body>
<!--Inicio da div Caminho da Pagina -->

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-xm-12">
			
		</div>
	</div>
	
</div>

<!--Fim da div Caminho da Pagina -->

<!--Inicio da Aba de Informações-->

<div class="container">
	<div class="row ">		
		<div class="col-sm-3 col-xm-12">
			<button id="btn-cadastro" type="button" class="btn btn-dark btn-lg border border-light" href="cadastrarEmpresa.php">Cadastrar Empresa</button>
		</div>

		<div class="col-sm-9 col-xm-12 d-flex w-100" >
			<div class="d-flex flex-row w-100">
				<div class="flex-row w-100" id="nav-info">
					<button type="button" class="btn btn-outline-dark borde border-light">Informações</button>
				</div>
				<div class="flex-row w-100" id="nav-info">
					<button type="button" class="btn btn-outline-dark borde border-light">Comodidade</button>
				</div>
				<div class="flex-row w-100" id="nav-info">
					<button type="button" class="btn btn-outline-dark borde border-light">Bom Saber</button>
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
			<a><img src="cadeira.png" width=25 height=25>Acessibilidade para Todos!</a>
		</div>
		
		<div class="col-sm-9 col-xm-12" id="nome" >
		<h3><p><?php echo "$nome";?></p></h3>
		<a><img src="localizacao.png" width=25 height=25></a><?php echo "$endereco";?>
		
		</div>		
	</div>
</div>

<!--Fim da Div Nome e localização-->

<!--Inicio da div de Navegação e Fotos-->

<div class="container">
	<div class="row">
		<div class="col-sm-3 col-xm-12 flex-column w-100">
			<div id="pesquisa" class="d-flex flex-column w-100">

				<h3>Descubra</h3>
				
				<!--Botão Pesquisar Cidades-->
				<i>Destino</i>
				<div class="btn-group" id="separar">
				  <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cidades</button>
				  <div class="dropdown-menu">
				    <a class="dropdown-item" href="#">Caçapava</a>
				    <a class="dropdown-item" href="#">São José dos Campos</a>
				    <a class="dropdown-item" href="#">Taubaté</a>
				  </div>
				</div>

				<!--Fim Botão Pesquisar Cidades-->

				<!--Botão Pesquisar Categorias-->
				<i>Restaurantes, Lojas, etc... </i>
				<div id="separar" class="btn-group">
					<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</button>
				  <div class="dropdown-menu">
				    <a class="dropdown-item" href="#">Restaurantes/a>
				    <a class="dropdown-item" href="#">Hotéis</a>
				    <a class="dropdown-item" href="#">Lojas</a>
				  </div>
				</div>

				<!--Fim Botão Pesquisar Categorias-->
			
			</div>	

			<div id="mapa" class="d-flex flex-column w-100">
			<a href="https://www.google.com.br/maps/@-23.0937857,-45.6858162,15z"><img src="googlemaps.png" width=230 height=230></a>
			</div>
		</div>
		
		<div class="col-sm-9 col-xm-12">
			
		</div>		
	</div>
</div>

<!-- Fim da div de Navegação e fotos-->

</body>
</html>