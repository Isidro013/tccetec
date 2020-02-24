<?php 

include "navbar.php";

include "conexao.php";

?>


<!doctype html>
<html lang="pt-br">

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

<style type="text/css">
    
    #hand {
        background-image: url(assets/imagens/hand.png);
        color: white;
    }

    #home {
        background-color: white;
    }

    
        #ebook{

        padding-top: 15px;
        padding-bottom: 15px;
        padding-left: 200px;
        }

</style>

</head>

<body>

    <br><br>
    <!-- CARROSEL -->
    <div id="myCarousel" class="carousel slide fundo-carrosel" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        </ol>
        <div class="carousel-inner" id="home">
            <div class="carousel-item active">
                <!-- Single Welcome Slide -->
                <div class="single-welcome-slide">
                    <!-- Welcome Content -->
                    <div class="welcome-content h-100">
                        <div class="container h-100">
                            <div class="row h-100 align-items-center">
                                <!-- Welcome Text -->
                                <div class="col-12 col-md-6">
                                    <div class="texto-carousel">
                                        <h2 data-animation="fadeInUp" data-delay="100ms"> Bem Vindos! <br> Defi o Portal de <br> <span> Acessibilidade </span></h2>
                                        <h5 data-animation="fadeInUp" data-delay="400ms"> Acessibilidade é um direito de todos! </h5>
                                    </div>
                                </div>
                                <!-- Welcome Thumbnail -->
                                <div class="col-12 col-md-6">
                                    <div class="welcome-thumbnail">
                                        <img src="assets/imagens/logo.png" alt="logo site" data-animation="slideInRight" data-delay="400ms">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="hand">
                <!-- Single Welcome Slide -->
                <div class="single-welcome-slide">
                    <!-- Welcome Content -->
                    <div class="welcome-content h-100">
                        <div class="container h-100">
                            <div class="row h-100 align-items-center">
                                <!-- Welcome Text -->
                                <div class="col-12 col-md-6" id="hand">
                                    <div class="texto-carousel">
                                        <h1 data-animation="fadeInUp" data-delay="100ms"> Hand Talk <br> <span> Acessibilidade </span></h1>
                                        <a href="https://www.handtalk.me/"><h5 data-animation="fadeInUp" data-delay="400ms" id="hand"> TORNE O SITE DA SUA EMPRESA ACESSÍVEL COM O NOSSO PLUGIN DE TRADUÇÃO PARA LIBRAS </h5></a>

                                    </div>
                                </div>
                                <!-- Welcome Thumbnail -->
                                <div class="col-12 col-md-6">
                                    <div class="welcome-thumbnail">
                                        <img src="assets/imagens/ht.png" alt="selo cadeira" data-animation="slideInRight" data-delay="400ms">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIM CARROSEL -->

    <!-- BOTÃO CARROSEL -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    <!-- FIM BOTÃO CARROSEL -->
    <br>
    <!-- arigos -->
    <section class="bg-light page-section" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" id="artigo">
                    <h2 class="section-heading text-uppercase"> Artigos </h2>
                    <h3 class="section-subheading text-muted"> Aqui você fica por dentro dos assuntos! </h3><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" target="_blank" href="https://blog.handtalk.me/momento-libras/">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="assets/imagens/portfolio/hotel.png" alt="imagem hotel">
                    </a>
                    <div class="portfolio-caption">
                        <h4> Momento da Libras </h4>
                        <p class="text-muted"> A empatia deve ser praticada todos os dias. </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" target="_blank" href="https://blog.handtalk.me/libras-educacao-infantil/">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="assets/imagens/portfolio/restaurante.jpg" alt="imagem restaurante">
                    </a>
                    <div class="portfolio-caption">
                        <h4>A importância do ensino da Libras </h4>
                        <p class="text-muted"> Direito a todos! </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" target="_blank" href="https://blog.handtalk.me/surdo-e-autista/">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="assets/imagens/portfolio/saude.jpg" alt="imagem saude">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Meu filho é surdo e autista. E agora? </h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" target="_blank" href="https://blog.handtalk.me/web-sem-barreiras/">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="assets/imagens/portfolio/01-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Projeto promove a inclusão de surdos</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" target="_blank" href="https://blog.handtalk.me/setembro-azul-amarelo/">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="assets/imagens/portfolio/02-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Conscientização</h4>
                        <p class="text-muted">Melhor Prevenir Do Que Remediar</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" target="_blank" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="assets/imagens/portfolio/04-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Como fazer uma palestra acessível</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FIM PORTIFOLIO -->

    <!-- DIREITOS -->
    <section class="page-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" id="direito">
                    <h2 class="section-heading text-uppercase mt-3">Direitos</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <br>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-secondary"></i>
                <i class="fas fa-line-chart fa-stack-1x fa-inverse"></i><br>
              </span><br>
                 <br>   <h4 class="service-heading">Trabalho</h4><br>
                    <p class="text-muted">O Estatuto prevê a reserva de vagas para pessoas com deficiência no mercado de trabalho, obedecendo a seguinte regra:</p><p>

                        até 200 empregados: 2%;</p><p>
                        de 201 a 500 empregados: 3%;</p><p>
                        de 501 a 1000 empregados: 4%;</p><p>
                        mais de 1000 empregados: 5%.</p><p class="text-muted">
                     
A Superintendência Regional do Ministério do Trabalho e Emprego fiscaliza as empresas e, quando há um descumprimento da lei, elas são autuadas. Isso porque a pessoa com deficiência precisa ter seus meios de subsistência garantidos para que possa ter uma participação realmente ativa na sociedade.

Em algumas categorias, o Estatuto da Pessoa com Deficiência estabeleceu uma cota. 
                    
</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-graduation-cap fa-stack-1x fa-inverse"></i><br>
              </span><br>
                   <br> <h4 class="service-heading">Educação</h4><br>
                    <p class="text-muted">Pode parecer absurdo, mas há pouco tempo, universidades e instituições de ensino podiam cobrar uma taxa extra em matrículas e mensalidades pagas por alunos com deficiência.

Além do fim da taxa, o Estatuto estabeleceu pena de dois a cinco anos de prisão e multa para quem impedir ou dificultar o ingresso de uma pessoa com deficiência em qualquer escola regular.

Para o ingresso em cursos de ensino superior, técnico ou tecnológico, ficou determinada uma cota de 10% de vagas para pessoas com deficiência.

Já o poder público, segundo o Estatuto, tem que garantir o pleno acesso ao currículo escolar em condições de igualdade, em um sistema educacional realmente inclusivo e com total acessibilidade, oferecendo apoio especializado sempre que necessário.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-danger"></i>
                <i class="fas fa-heartbeat fa-stack-1x fa-inverse"></i><br>
              </span><br>
                   <br> <h4 class="service-heading">Saúde</h4><br>
                    <p class="text-muted">O poder público tem o dever de oferecer à pessoa com deficiência uma rede de serviços especializados em habilitação e reabilitação, além de garantir o acesso a hospitais e outros estabelecimentos, sejam eles públicos ou privados.

A lei ainda garante o tratamento domiciliar na impossibilidade de locomoção a um hospital ou clínica, com medicamentos gratuitos, assim como órteses e próteses, quando necessárias.

Além disso, não pode haver nenhum tipo de impedimento de participação de pessoas com deficiência nos seguros ou planos privados de saúde. Quem impedir ou dificultar o ingresso está sujeito a detenção de 2 a 5 anos e multa.</p>
                </div>
            </div>
        </div>
        <th>

          <div class="container">
            <div class="row">
        
        
        <a href="http://acessibilidade.handtalk.me/acessibilidade-instituicoes-ensino-universidades?utm_source=Blog&utm_medium=Universidades_MEC_Banner_01"><img src="fotos\ebook.png" id="ebook">
        
        </div>
    </div>
    </section>
    <!-- FIM SERVIÇOS -->

    <?php 
    include "footer.php";
     ?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/js.js"></script>

    <a onclick="topFunction()" id="myBtn" title="Voltar ao Topo"></a>
</body>



</html>