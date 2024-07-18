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

<style>
    .file-input-container {
        position: relative;
        width: 150px;
        height: 150px;
    }

    #file-input {
        display: none;
    }

    .file-label {
        display: block;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-color: transparent;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        position: relative;
        transition: background-color 0.3s ease;
    }

    .file-label img {
        width: 100px;
        height: 100px;
        pointer-events: none;
        transition: all 0.3s ease;
    }

    .file-label img.selected {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<style>
    /* Estilos do Modal */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 400px;
        text-align: center;
    }

    .modal-content p {
        font-size: 15px;
        font-weight: 700;
        padding: 15px;
    }

    .align-close {
        display: flex;
        justify-content: flex-end;
        width: 100%;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>


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

            <h4>Itens </h4>
            <ul class="drp-sec">
                <li class="has-drp">
                    <a href="{{ url('dashboard/administrativo/receitas/index') }}" title="Acessar tabela de receita">
                        <span>Receitas</span>
                        <i class="fa fa-info" aria-hidden="true"></i>
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

    <div class="panel-content">
        <div class="widget pad50-65">
            <div class="profile-wrp">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <div class="profile-info-wrp">
                            <div class="insta-wrp">
                                <span>
                                    <img class="brd-rd50" src="{{ asset('assets/img/menina.png') }}"
                                        alt="" />
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
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-lg-8">


                        <div class="usr-actvty-wrp widget pad50-40" style="padding: 0px 40px">



                            <form action="{{ route('cad.notificacao') }}" method="POST" role="form text-left"
                                class="form-wrp" enctype="multipart/form-data">
                                @csrf
                                @method('POST')

                                <div class="perfilNotificacao">
                                    <h4 class="widget-title">Notificações
                                    </h4>

                                    <div class="file-input-container" style="margin-bottom:30px;">
                                        <input type="file" id="file-input" accept="image/*"
                                            onchange="displayImage(event)" name="fotoNotificacao"
                                            value="{{ old('fotoNotificacao') }}">
                                        <label for="file-input" class="file-label">
                                            <img id="icon" src="{{ asset('img/camera.png') }}"
                                                alt="Escolher Imagem">
                                        </label>
                                        @error('fotoNotificacao')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col-md-6 col-sm-12 col-lg-6"
                                    style="margin-top: -45px; margin-bottom: 25px">
                                    <p>Status da Notificação</p>
                                    <select class="brd-rd5" name="statusNotificacao" id="statusNotificacao" required>
                                        <option value="ativo"
                                            {{ old('statusNotificacao') == 'ativo' ? 'selected' : '' }}>
                                            Ativo</option>
                                        <option value="desativo"
                                            {{ old('statusNotificacao') == 'desativo' ? 'selected' : '' }}>
                                            Desativo</option>
                                    </select>
                                    @error('statusNotificacao')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="row mrg20">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input class="brd-rd30" type="text" placeholder="Titulo:"
                                            name="tituloNotificacao" id="tituloNotificacao"
                                            value="{{ old('tituloNotificacao') }}" required />
                                        @error('tituloNotificacao')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input class="brd-rd30" type="text" placeholder="Mensagem"
                                            name="mensagemNotificacao" id="mensagemNotificacao"
                                            value="{{ old('mensagemNotificacao') }}" required />
                                        @error('mensagemNotificacao')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <button class="green-bg brd-rd5" type="submit">
                                        <i class="fa fa-paper-plane"></i> Enviar
                                    </button>
                                </div>
                            </form>

                            @if (session('success'))
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        showModal();
                                    });
                                </script>
                            @endif

                            <!-- Modal de Sucesso -->
                            <div id="successModal" class="modal" style="display: none;">
                                <div class="modal-content">
                                    <div class="align-close">
                                        <span class="close" onclick="closeModal()">&times;</span>
                                    </div>
                                    <img src="{{ asset('assets/img/success.png') }}"
                                        style="width: 120px; height: 120px" alt="confere">
                                    <p>Operação realizado com sucesso!</p>
                                </div>
                            </div>

                            {{-- <div class="col-md-6 grid-item col-sm-12 col-lg-6"> --}}
                            <div class="widget usr-msgs pad50-40">
                                <div class="wdgt-opt">
                                    <span class="wdgt-opt-btn">
                                        <i class="ion-android-more-vertical"></i>
                                    </span>
                                    <div class="wdgt-opt-lst brd-rd5">
                                        <a class="delt-wdgt" href="#" title="">Delete</a>
                                        <a class="expnd-wdgt" href="#" title="">Expand</a>
                                        <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                                    </div>
                                </div>
                                <div class="wdgt-ldr">
                                    <div class="ball-scale-multiple">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                                <h4 class="widget-title">Enviadas</h4>
                                <div class="msgs-lst">

                                    @foreach ($lista as $notificacao)
                                        <div class="msg-itm" style="display: flex">
                                            <span class="brd-rd50"
                                                style="width: 50px; height:50px; border-radius: 50%">
                                                @if (Storage::exists('public/img/notificacao/' . $notificacao->fotoNotificacao))
                                                    <img src="{{ asset('storage/img/notificacao/' . $notificacao->fotoNotificacao) }}"
                                                        alt="lll"
                                                        style="width: 50px; height:50px; border-radius: 50%">
                                                @else
                                                    <span>Imagem não disponível</span>
                                                @endif
                                            </span>
                                            <div class="msg-inf">
                                                <h5>{{ $notificacao->tituloNotificacao }}</h5>
                                                <div class="msg">
                                                <p>{{ $notificacao->mensagemNotificacao }}</p>
                                                    <p class="pst-tm">{{ $notificacao->statusNotificacao }}</p>
                                                </div>
                                            </div>

                                            <div>
                                                <a href="{{ route('edit.notificacao', $notificacao->idNotificacao) }}"
                                                    title="" class="brd-rd30 btn btn-outline-success"
                                                    style="padding: 2px 7px !important;">Editar</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            {{-- </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ----------- --}}
    {{--    MODAL    --}}
    {{-- ----------- --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('success'))
                showModal();
            @endif
        });

        function showModal() {
            var modal = document.getElementById("successModal");
            modal.style.display = "block";

            setTimeout(function() {
                modal.style.display = "none";
            }, 10000);
        }

        function closeModal() {
            var modal = document.getElementById("successModal");
            modal.style.display = "none";
        }
    </script>


    <!-- Panel Content -->
    <script>
        function displayImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('icon');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

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
