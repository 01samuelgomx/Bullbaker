<!DOCTYPE html>
<html>

<head>
    <!-- Meta-Information -->
    <title>Dashboard Bullbaker</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Vendor: Bootstrap 4 Stylesheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="icon" href="{{ asset('../../img/logo.jpg') }}" type="image/png" />


    <!-- Our Web CSS Styles -->
    <link rel="stylesheet" href="{{ asset('css/icons.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css">

    <!-- Color Scheme -->
    <link rel="stylesheet" href="{{ asset('assets/css/color-schemes/color.css') }}" type="text/css" title="color3">
    <link rel="alternate stylesheet" href="{{ asset('assets/css/color-schemes/color1.css') }}" title="color1">
    <link rel="alternate stylesheet" href="{{ asset('assets/css/color-schemes/color2.css') }}" title="color2">
    <link rel="alternate stylesheet" href="{{ asset('assets/css/color-schemes/color4.css') }}" title="color4">
    <link rel="alternate stylesheet" href="{{ asset('assets/css/color-schemes/color5.css') }}" title="color5">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="expand-data panel-data">
    <div class="topbar">
        <div class="logo">
            <h1>
                <a href="#" title="">
                    <img src="{{ asset('assets/img/logoBull.png') }}"
                        style=" width: 110px;
                     margin-top: -28px; height: 100px; " alt="" />
                </a>
            </h1>
        </div>
        <div class="topbar-data">

            <div class="usr-act">
                <span>Olá, seja bem vindo! {{ $administrador->nomeAdmin }}</span>
            </div>

        </div>

        <div class="topbar-bottom-colors">
            <i style="background-color: #361F08;"></i>
            <i style="background-color: #C1959D;"></i>
            <i style="background-color: #90A293;"></i>
            <i style="background-color: #361F08;"></i>
            <i style="background-color: #C1959D;"></i>
            <i style="background-color: #90A293;"></i>
            <i style="background-color: #361F08;"></i>
        </div>

    </div>
    <!-- Topbar -->
    <header class="side-header expand-header">
        <div class="nav-head">Navegação Principal !
            <span class="menu-trigger">
                <i class="ion-android-menu"></i>
            </span>
        </div>
        <nav class="custom-scrollbar">

            <h4>Tabelas</h4>
            <ul class="drp-sec">

                <li class="has-drp">
                    <a href="{{ url('dashboard/administrativo/aluno/index') }}" title=" acessar tabela alunos">
                        <span>Alunos</span>
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    </a>
                </li>

                <li class="has-drp">
                    <a href="{{ url('dashboard/administrativo/cursos/index') }}" title="Acessar tabela cursos">
                        <span>Cursos</span>
                        <i class="fa fa-university" aria-hidden="true"></i>
                    </a>
                </li>

                <li class="has-drp">
                    <a href="{{ url('dashboard/administrativo/aulas/index') }}" title="Acessar tabela aulas">
                        <span>Aulas</span>
                        <i class="fa fa-play-circle" aria-hidden="true"></i>
                    </a>
                </li>

            </ul>

            <h4>Manual </h4>
            <ul class="drp-sec">
                <li class="has-drp">
                    <a href="{{ url('dashboard/administrativo/info') }}" title="Acessar informações de suporte">
                        <span>Ajuda?</span>
                        <i class="fa fa-info" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>

        </nav>
    </header>

    <!-- Side Header -->
    <div class="option-panel">
        <span class="panel-btn">
            <a href="{{ url('dashboard/administrativo/perfil/index') }}" title=" Acesso a pagina de perfil">
                <img src="{{ asset('assets/img/settings.png') }}" alt="icone de configuração" />
            </a>
        </span>
    </div>
    <!-- Options Panel -->
    {{-- <div class="pg-tp">
        <i class="ion-cube"></i>
        <div class="pr-tp-inr">
            <h4>Bem - Vindo ao seu perfil
            </h4>
            <span>Nossa interface de atualizações, Realize seu cadastro em poucos passos!</span>
        </div>
    </div> --}}
    <!-- Page Top -->

    <div class="panel-content">
        <div class="widget pad50-65">
            <div class="profile-wrp">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <div class="profile-info-wrp">
                            <div class="insta-wrp">
                                <span>
                                    <img class="brd-rd50" src="{{ asset('assets/img/menina.png') }}" alt="" />
                                    <span class="sts online"></span>
                                </span>
                                <div class="insta-inf">
                                    <h2>
                                        <a href="#" title="">{{ $administrador->nomeAdmin }}</a>
                                        <i class="fa fa-pencil edit-btn"></i>
                                    </h2>
                                    <span class="desg">Admnistradora e fundadora da empresa <br>
                                        Bullbaker
                                    </span>

                                </div>
                            </div>
                            <div class="usr-abut">
                                <h5 class="prf-edit-tl">Sobre mim
                                    <i class="fa fa-pencil edit-btn"></i>
                                </h5>
                                <p>{{ $administrador->descricaoAdmin }}</p>
                            </div>
                            <div class="usr-gnrl-inf">
                                <h5 class="prf-edit-tl">Informações gerais
                                    <i class="fa fa-pencil edit-btn"></i>
                                </h5>
                                <div class="grn-inf-lst">
                                    <i class="fa fa-home"></i> Data de Nascimento
                                    <span>{{ $administrador->dataNascimentoAdmin }}</span>
                                </div>
                                <div class="grn-inf-lst">
                                    <i class="fa fa-map"></i> Estado
                                    <span>{{ $administrador->estadoAdmin }}</span>
                                </div>
                                <div class="grn-inf-lst">
                                    <i class="fa fa-graduation-cap"></i> Cargo:
                                    <span class="green-clr">{{ $administrador->tipoAdministrador }}</span>
                                </div>
                                <div class="grn-inf-lst">
                                    <i class="fa fa-calendar"></i> Data de Cadastro:
                                    <span>{{ $administrador->dataCadAdmin }}</span>
                                </div>
                            </div>

                            <div class="usr-cnt-inf">
                                <h5 class="prf-edit-tl">Informações basicas
                                    <i class="fa fa-pencil edit-btn"></i>
                                </h5>
                                <ul class="usr-cnt-inf-lst">
                                    <li>
                                        <i class="fa fa-home"></i>
                                        <strong>Endereço:</strong>
                                        <p>{{ $administrador->enderecoAdmin }}</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <strong>Telefone:</strong>
                                        <p>{{ $administrador->telefoneAdmin }}</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-gavel"></i>
                                        <strong>Estado civil:</strong>
                                        <p>{{ $administrador->estadoCivilAdmin }}</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <strong>Email ID:</strong>
                                        <p>{{ $administrador->emailAdmin }}</p>
                                    </li>
                                </ul>
                            </div>
                            {{-- <div class="usr-prf">
                                <a class="brd-rd5 btn scl-btn2 facebook" href="#" title="">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>

                                </a>
                                <a class="brd-rd5 btn scl-btn2 twitter" href="#" title="">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a class="brd-rd5 btn scl-btn2 google" href="#" title="">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-lg-8">
                        <div class="usr-actvty-wrp widget pad50-40">
                            <h4 class="widget-title">Notificações
                            </h4>



                            <form class="form-wrp">
                                <div class="row mrg20">

                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input class="brd-rd30" type="text" placeholder="Titulo:" />
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input class="brd-rd30" type="text" placeholder="Mensagem" />
                                    </div>

                                </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <button class="green-bg brd-rd5" type="submit">
                                            <i class="fa fa-paper-plane"></i> Enviar</button>
                                    </div>
                            </form>
                                    <!-- Accordions  -->
            <div id="acordn2" class="acordn-styl2 mt80">
                <div class="acordn-itm brd-rd5">

                    <h4 style="background-color: #90A293; color: #fff ">
                        <i style="color:#fff" class="fa fa-chevron-up blue"></i>Instruções Tabela de alunos
                    </h4>

                    <div class="acrdn-cnt">
                        <h3 style="font-weight: 600; font-size: 18px">Regras de Validação</h3>
                        <p style="margin-bottom: 25px">Para garantir que os dados sejam inseridos corretamente na
                            tabela de alunos, siga as instruções abaixo para cada campo. As regras de validação são
                            obrigatórias e devem ser respeitadas para um cadastro bem-sucedido.</p>
                    </div>

                </div>
                <div class="acordn-itm brd-rd5">
                    <h4 style="background-color: #C1959D; color: #fff ">
                        <i style="color:#fff" class="fa fa-chevron-up"></i> Instruções Tabela de Cursos
                    </h4>

                    <div class="acrdn-cnt">
                        <h3 style="font-weight: 600; font-size: 18px">Regras de Validação</h3>
                        <p style="margin-bottom: 25px">Para garantir que os dados sejam inseridos corretamente na
                            tabela de cursos, siga as instruções abaixo para cada campo. As regras de validação são
                            obrigatórias e devem ser respeitadas para um cadastro bem-sucedido.</p>
                  
                    </div>

                </div>


                <div class="acordn-itm brd-rd5">
                    <h4 style="background-color: #361F08; color: #fff ">
                        <i style="color:#fff" class="fa fa-chevron-up"></i> Instruções Tabela de Aulas
                    </h4>
                    <div class="acrdn-cnt">
                        <h3 style="font-weight: 600; font-size: 18px">Regras de Validação</h3>
                        <p style="margin-bottom: 25px">Para garantir que os dados sejam inseridos corretamente na
                            tabela de cursos, siga as instruções abaixo para cada campo. As regras de validação são
                            obrigatórias e devem ser respeitadas para um cadastro bem-sucedido.</p>
                 
                    </div>

                </div>
            </div>
            <!-- Accordions  -->
                    </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Panel Content -->
    <footer>
        <p>Copyright
            <a href="#" title="">Example Company</a> &amp; 2017 - 2018
        </p>
        <span>10GB of 250GB Free.</span>
    </footer>

    <!-- Vendor: Javascripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
    <!-- Vendor: Followed by our custom Javascripts -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}" type="text/javascript"></script>

    <!-- Our Web Javascripts -->
    <script src="{{ asset('assets/js/isotope.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/isotope-int.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.counterup.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/highcharts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/exporting.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/highcharts-more.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.circliful.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/fullcalendar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.downCount.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.formtowizard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/form-validator.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/form-validator-lang-en.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/cropbox-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/ion.rangeSlider.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.poptrox.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/styleswitcher.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/main.js') }}" type="text/javascript"></script>

   <script>
        $(document).ready(function() {
            'use strict';

            //===== Accordion =====//
            $('#acordn .acrdn-cnt').hide();
            $('#acordn h4:first').addClass('active').next().slideDown(500).parent().addClass("activate");
            $('#acordn h4').on("click", function() {
                if ($(this).next().is(':hidden')) {
                    $('#acordn h4').removeClass('active').next().slideUp(500).parent().removeClass(
                        "activate");
                    $(this).toggleClass('active').next().slideDown(500).parent().toggleClass("activate");
                }
            });

            $('#acordn2 .acrdn-cnt').hide();
            $('#acordn2 h4:first').addClass('active').next().slideDown(500).parent().addClass("activate");
            $('#acordn2 h4').on("click", function() {
                if ($(this).next().is(':hidden')) {
                    $('#acordn2 h4').removeClass('active').next().slideUp(500).parent().removeClass(
                        "activate");
                    $(this).toggleClass('active').next().slideDown(500).parent().toggleClass("activate");
                }
            });
        });
    </script>

</body>

</html>
