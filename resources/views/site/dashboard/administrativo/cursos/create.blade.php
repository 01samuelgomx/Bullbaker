<!DOCTYPE html>
<html>

<head>
    <!-- Meta-Information -->
    <title>Tabela Cursos</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Vendor: Bootstrap 4 Stylesheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="{{ asset('css/icons.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css">

    <!-- Color Scheme -->
    <link rel="stylesheet" href="{{ asset('css/color-schemes/color.css') }}" type="text/css" title="color3">
    <link rel="alternate stylesheet" href="{{ asset('assets/css/color-schemes/color1.css') }}" title="color1">
    <link rel="alternate stylesheet" href="{{ asset('assets/css/color-schemes/color2.css') }}" title="color2">
    <link rel="alternate stylesheet" href="{{ asset('assets/css/color-schemes/color4.css') }}" title="color4">
    <link rel="alternate stylesheet" href="{{ asset('assets/css/color-schemes/color5.css') }}" title="color5">
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
        <div class="nav-head">Main Navigation
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
                    <a href="{{ url('dashboard/administrativo/cursos/index') }}" title="acessar tabela cursos">
                        <span>Cursos</span>
                        <i class="fa fa-university" aria-hidden="true"></i>
                    </a>
                </li>

                <li class="has-drp">
                    <a href="{{ url('dashboard/administrativo/aulas/index') }}" title="acessar tabela aulas">
                        <span>Aulas</span>
                        <i class="fa fa-play-circle" aria-hidden="true"></i>
                    </a>
                </li>

            </ul>
        </nav>
    </header>
    <!-- Side Header -->

    <div class="option-panel">
        <span class="panel-btn">
            <i class="fa ion-android-settings fa-spin"></i>
        </span>
        <div class="color-panel">
            <h4>Text Color</h4>
            <span class="color1" onclick="setActiveStyleSheet('color1'); return false;">
                <i></i>
            </span>
            <span class="color2" onclick="setActiveStyleSheet('color2'); return false;">
                <i></i>
            </span>
            <span class="color3" onclick="setActiveStyleSheet('color'); return false;">
                <i></i>
            </span>
            <span class="color4" onclick="setActiveStyleSheet('color4'); return false;">
                <i></i>
            </span>
            <span class="color5" onclick="setActiveStyleSheet('color5'); return false;">
                <i></i>
            </span>
        </div>
    </div>
    <!-- Options Panel -->
    <div class="pg-tp">
        <i class="ion-cube"></i>
        <div class="pr-tp-inr">
            <h4>Bem - Vindo a Area dos Cursos!
            </h4>
            <span>Nossa interface de atualizações, Realize seu cadastro em poucos passos!</span>
        </div>
    </div>
    <!-- Page Top -->

    <div class="panel-content">
        <div class="widget pad50-65">

            <form action="{{ route('cad.curso') }}" method="POST" role="form text-left" class="contact-form"
                enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="d-flex justify-content-between">
                    <div class="widget-title2">
                        <div style="flex-direction: column;">
                            <h4>Preencha com os dados dos Cursos</h4>
                            <span>Por favor certifique-se das informações antes de realizar o cadastro!</span>
                        </div>
                    </div>
                    {{-- ------FOTO------ --}}

                    <div class="file-input-container" style="margin-bottom:30px;">
                        <input type="file" id="file-input" accept="image/*" onchange="displayImage(event)"
                            name="fotoCurso" value="{{ old('fotoCurso') }}">
                        <label for="file-input" class="file-label">
                            <img id="icon" src="{{ asset('img/camera.png') }}" alt="Escolher Imagem">
                        </label>
                    </div>
                </div>
                {{-- ---------------- --}}


                <div class="column mrg20">
                    <div class="row mrg20">
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <input class="brd-rd5" type="text" placeholder="Nome:" name="nomeCurso"
                                id="nomeCurso" value="{{ old('nomeCurso') }}" />
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <input class="brd-rd5" type="text" placeholder="Descrição:" name="descricaoCurso"
                                id="descricaoCurso" value="{{ old('descricaoCurso') }}" />
                        </div>
                        <div class="row mrg20">
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <input class="brd-rd5" type="number" placeholder="Vagas:"
                                    name="vagasDisponiveisCurso" id="vagasDisponiveisCurso"
                                    value="{{ old('vagasDisponiveisCurso') }}" />
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <input class="brd-rd5" type="number" placeholder="Preço:" name="precoCurso"
                                    id="precoCurso" value="{{ old('precoCurso') }}" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column mrg20">
                    <div class="row mrg20">
                        
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <select class="brd-rd5" name="statusCurso" id="statusCurso" required>
                                <option value="ativo" class="brd-rd5"
                                    {{ old('statusCurso') == 'ativo' ? 'selected' : '' }}>Ativo</option>
                                <option value="desativado" class="brd-rd5"
                                    {{ old('statusCurso') == 'desativado' ? 'selected' : '' }}>Desativado</option>
                            </select>
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <input class="brd-rd5" type="number" placeholder="Duração:" name="duracaoCurso"
                                id="duracaoCurso" value="{{ old('duracaoCurso') }}" />
                        </div>
                        <div class="row mrg20">
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <input class="brd-rd5" type="datetime-local" placeholder="Data Início:"
                                    name="data_inicio" id="data_inicio" value="{{ old('data_inicio') }}" />
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <input class="brd-rd5" type="datetime-local" placeholder="Data Fim:" name="data_fim"
                                    id="data_fim" value="{{ old('data_fim') }}" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-lg-12">
                    <button class="green-bg brd-rd5" type="submit">Enviar</button>
                </div>
            </form>

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

        </div>
    </div>


    <!-- Vendor: Javascripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
    <!-- Vendor: Followed by our custom Javascripts -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}" type="text/javascript"></script>

    <!-- Our Website Javascripts -->
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

</body>

</html>
