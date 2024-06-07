<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png" />
    <title> @yield('title') - Confeitaria</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/css/lightgallery.min.css" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/linericon/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/swiper/css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/scroll/jquery.mCustomScrollbar.css') }}" />
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('Dashboard/css/style.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
</head>

<body>
    <!--================Offcanvus Menu Area =================-->
    <div class="side_menu">
        <a class="logo" href="#">
            <img src="{{ asset('img/logo.png') }}" alt="" />
        </a>
        <ul class="list menu_right">
            <li>
                <a href="{{ url('/') }}">Home</a>
            </li>
            <li>
                <a href="{{ url('/sobre') }}">Sobre</a>
            </li>
            <li>
                <a href="{{ url('/cursos') }}">Cursos</a>
            </li>
            <li>
                <a href="{{ url('/menu') }}">Menu</a>
            </li>
            <li>
                <a href="{{ url('/contato') }}">Contato</a>
            </li>
        </ul>
        <ul class="list social">
            <li>
                <a href="#">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-dribbble"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-behance"></i>
                </a>
            </li>
        </ul>
    </div>
    <!--================End Offcanvus Menu Area =================-->

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{ url('/') }}">
                        <img class="logo-1" src="img/logo.png" alt="">
                        <img class="logo-2" src="img/logo-2.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('sobre') }}">Sobre</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('cursos') }}">Cursos</a></li>
                            {{-- <li class="nav-item"><a class="nav-link" href="{{ url('blog') }}">Blog</a></li> --}}
                            <li class="nav-item active"><a class="nav-link" style="  color: #F2B2BD !important;" href="{{ url('menu') }}">Menu</a></li>
                            {{-- <li class="nav-item active"><a class="nav-link" href="{{ url('contato') }}">Contato</a> --}}
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <div class="popup">
        <a href="https://wa.me/5511986033373?text=Ol%C3%A1%21+%F0%9F%91%8B++Meu+nome+%C3%A9+%5BSeu+Nome%5D%2Ce+estou+Interessado+em+adotar+um+pet+que+vi+em+seu+Site%F0%9F%90%BE"
            target="_blank" class="whatsappLink" rel="noreferrer">
            <img src="{{ asset('img/whats-modal.svg') }}" class="icon">
        </a>
    </div>

    <div class="botao-voltar-ao-topo"><img src="{{ asset('img/voltar-topo.svg') }}" alt="Clique para voltar ao topo">
    </div>

    <main>
        @yield('conteudo')
    </main>
    <!--================Contact Area =================-->
    <section class="contact_area p_120">

        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Balneário Camboriú | SC</h6>
                            <p>Brasil | BR</p>

                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">+55 (11)12345-5678</a></h6>
                            <p>Seg a sex 13h ás 18h</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">shedevs@gmail.com</a></h6>

                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" action="contact_process.php" method="post" id="contactForm"
                        novalidate="novalidate">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Selecione seu nome">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Endereço de E-mail">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject"
                                    placeholder=" Assunto">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Escreva sua mensagem"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn submit_btn">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->

    <!--================ Inicio Footer =================-->
    <footer class="footer-area p_120">
        <div class="container">
            <div class="row">


                <div class="col-lg-2  col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h6 class="footer_title">Menu</h6>
                        <ul class="list">
                            <li><a href="#">Cardápio</a></li>
                            <li><a href="#">Contato</a></li>
                            <li><a href="#">Home</a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <aside class="f_widget news_widget">
                        <div class="f_title">
                            <h3 class="footer_title">Sobre Nós</h3>
                        </div>
                        <p>A verdadeira magia da confeitaria de bolos está além do sabor e da estética. É sobre criar
                            memórias duradouras, celebrar momentos especiais e compartilhar alegria com aqueles que
                            amamos.</p>


                    </aside>
                </div>
                <img src="{{ asset('img/logo-2.png') }}" alt="" style="width:17%;">

            </div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-md-8 footer-text m-0">
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved by -> <a href="https://shedevs.com.br/"
                        target="_blank">SHEDEVS</a>
                </p>
                <div class="col-lg-4 col-md-4 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/bullbaker_doceria/"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--================ FIM Footer  =================-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/stellar.js') }}"></script>
    <script src="{{ asset('js/jquery.lightbox.js') }}"></script>
    <script src="{{ asset('vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/isotope/isotope-min.js') }}"></script>
    <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('vendors/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendors/counter-up/jquery.counterup.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('vendors/popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('vendors/swiper/js/swiper.min.js') }}"></script>
    <script src="{{ asset('vendors/scroll/jquery.mCustomScrollbar.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
</body>

</html>
