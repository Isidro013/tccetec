<?php

include "navbar.php";

include "conexao.php";

?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="uza - Model Agency HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/csspag.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="php.php">

    
        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="./img/core-img/curve-5.png" alt="">
        </div>
    </div>
    <!-- ***** AREA TITULO End ***** -->

    <!-- ***** SOBRE NOS Start ***** -->
    <section class="uza-about-us-area section-padding-80">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="about-us-thumbnail mb-80">
                        <img src="./img/bg-img/2.jpg" alt="">
                        <!-- Video Area -->
                        <!-- REFORMANDO ... -->
                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-lg-6">
                    <div class="section-heading mb-5">
                        <h2>Nossa Missão</h2>
                    </div>

                    <div class="about-us-content mb-80">
                        <div class="about-tab-area">
                            <ul class="nav nav-tabs mb-50" id="mona_modelTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">CRIAÇÃO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">ESTRATÉGIA</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Mona Tab Content -->
                        <div class="about-tab-content">
                            <div class="tab-content" id="mona_modelTabContent">
                                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                        <p>O site foi criado em função de nosso trabalho de conclusão de curso (TCC) com o objetivo de auxiliar e ajudar portadores de deficiência e necessidades especiais.</p>
                                        <p> O principal motivo foi a falta de responsabilidade e consideração de donos de estabelecimentos com essas pessoas que em muitas vezes tem o seu direito de ir e vir violado.</p>
                                        <a href="#footer" class="btn uza-btn mt-30">Entrar Em Contato</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab3">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                        <p>Nosso objetivo é criar uma ferramenta que auxilia portadores de deficiência ter uma maior facilidade em encontrar lugares e estabelecimentos com acesso e comodidade ideal para que possa aproveitar ao máximo. </p>
                                        <p>Sem que seja obstruído o seu direito de ir e vir.</p>
                                        <a href="#footer" class="btn uza-btn mt-30">Entrar Em Contato</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOTO EM BAIXO DE SOBRE -->
        <div class="about-bg-pattern">
            <img src="./img/core-img/curve-2.png" alt="">
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** PORQUE ESCOLHER NÓS Area Start ***** -->
    <section class="uza-why-choose-us-area">
        <div class="container">
            <div class="row align-items-center">
                <!-- Choose Us Content -->
                <div class="col-12 col-lg-6">
                    <div class="choose-us-content mb-80">
                        <div class="section-heading mb-4" id="nos">
                            <h2>Por Quê Nos Escolher ?</h2>
                            <p>Somos seu parceiro no seu sucesso</p>
                        </div>
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Nossa plataforma é simples e objetiva.</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Nos temos suporte total de nossa plataforma.</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Nosso site é 100% acessivel.</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Exibimos informações concretas.</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Estamos sempre atentos com o bem estar de todos.</li>
                        </ul>
                    </div>
                </div>
                <!-- Choose Us Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="choose-us-thumbnail mb-80">
                        <img class="w-100" src="img/bg-img/22.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Why Choose Us Area End ***** -->

    <!-- ***** Team Member Area Start ***** -->
    <section class="uza-portfolio-area section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Equipe</h2>
                        <p>Permanecemos no topo da nossa indústria, sendo especialistas na sua.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- Team Member Slides -->
                <div class="team-sildes owl-carousel" id="equipe">

  <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/19.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Programador</h6>
                            <h4>Gustavo Sales</h4>
                            <p>Aluno 3 módulo Desenvolvimento de Sistemas</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="https://www.instagram.com/gustta.sales/?hl=pt-br" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/19.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Programador</h6>
                            <h4>Isidro Junior</h4>
                            <p>Aluno 3 módulo Desenvolvimento de Sistemas</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/20.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Programador</h6>
                            <h4>João Vitor</h4>
                            <p>Aluno 3 módulo Desenvolvimento de Sistemas</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/21.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Programador</h6>
                            <h4>Daniel Borsoi</h4>
                            <p>Aluno 3 módulo Desenvolvimento de Sistemas</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/18.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Programador</h6>
                            <h4>Edivelton Fernandes</h4>
                            <p>Aluno 3 módulo Desenvolvimento de Sistemas</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Border -->
        <div class="container">
            <div class="border-line mt-80"></div>
        </div>
    </section>
    </section>
    <!-- ***** Team Member Area End ***** -->

    <!-- Footer -->
    <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Links Rápidos</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="sobre.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="#nos"><i class="fa fa-angle-double-right"></i>Porque Nos Escolher</a></li>
                        <li><a href="#equipe"><i class="fa fa-angle-double-right"></i>Equipe</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Sites Externos</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="https://www.handtalk.me/"><i class="fa fa-angle-double-right"></i>Hand Talk</a></li>
                        <li><a href="https://www.governodigital.gov.br/acessibilidade"><i class="fa fa-angle-double-right"></i>Acessibilidade</a></li>
                        <li><a href="http://www.planalto.gov.br/ccivil_03/_ato2015-2018/2015/lei/l13146.htm"><i class="fa fa-angle-double-right"></i>Leis</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5> Paginas Defi </h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="sobre.php"><i class="fa fa-angle-double-right"></i>Sobre</a></li>
                        <li><a href="listahotelcpv.php"><i class="fa fa-angle-double-right"></i>Hotéis</a></li>
                        <li><a href="index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>

                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                </hr>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p><u><a href="https://www.vestibulinhoetec.com.br/home/">Etec Machado de Assis </a></u>Todos os direitos reservados e académico</p>
                    <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.vestibulinhoetec.com.br/home/" target="_blank">ETEC</a></p>
                </div>
                </hr>
            </div>
        </div>
      </section>
    <!-- ./Footer -->
    <!-- ***** Footer Area End ***** -->

    <!-- ******* All JS Files ******* -->
    <!-- jQuery js -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->

    <!-- All js -->
    <script src="js/uza.bundle.js"></script>
    <!-- Active js -->
    <script src="js/default-assets/active.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/js.js"></script>

    


</body>

</html>