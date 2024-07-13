<!DOCTYPE html>
<html>

<head>
    <!-- Meta-Information -->
    <title>Tabela Alunos</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Vendor: Bootstrap 4 Stylesheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">

    <!-- Our Website CSS Styles -->
    <link rel="icon" href="{{ asset('../../img/logo.jpg') }}" type="image/png" />
    <link rel="stylesheet" href="css/icons.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css">

    <!-- Color Scheme -->
    <link rel="stylesheet" href="css/color-schemes/color.css" type="text/css" title="color3">
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
    <div class="pg-tp">
        <i class="ion-cube"></i>
        <div class="pr-tp-inr">
            <h4>Bem - Vindo a Area dos Alunos!
                <span></span> Panel
            </h4>
            <span>Nossa interface de atualizações, Realize seu cadastro em poucos passos!</span>
        </div>
    </div>
    <!-- Page Top -->
    <div class="panel-content">
        <div class="widget pad50-65">

            <form action="{{ route('cad.aluno') }}" method="POST" role="form text-left" class="contact-form"
                enctype="multipart/form-data">

                @csrf
                @method('POST')

                <div class="d-flex justify-content-between">
                    <div class="widget-title2">
                        <div class="pr-tp-inr">
                            <h4>Preencha com os dados do Aluno </h4>
                            <span>Por favor certifique-se das informções antes de realizar o cadastro!</span>
                        </div>
                    </div>

                    <div class="file-input-container" style="margin-bottom:30px;">
                        <input type="file" id="file-input" accept="image/*" onchange="displayImage(event)"
                            name="fotoAluno" value="{{ old('fotoAluno') }}">
                        <label for="file-input" class="file-label">
                            <img id="icon" src="{{ asset('img/camera.png') }}" alt="Escolher Imagem">
                        </label>
                        @error('fotoAluno')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="column mrg20">

                    <div class="row mrg20">
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <p>Nome do Aluno</p>
                            <input class="brd-rd5" type="text" placeholder="Nome:" name="nomeAluno"
                                id="nomeAluno" value="{{ old('nomeAluno') }}" required />
                            @error('nomeAluno')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <p>Data nascimento</p>
                            <input class="brd-rd5" type="date" placeholder="Nome:" name="dataDeNascimento"
                                id="dataDeNascimento" value="{{ old('dataDeNascimento') }}" required />
                            @error('dataDeNascimento')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="row mrg20">

                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <p>Email</p>
                            <input class="brd-rd5" type="email" placeholder="Email:" name="emailAluno"
                                id="emailAluno" value="{{ old('emailAluno') }}" required />
                            @error('emailAluno')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <p>Telefone</p>
                            <input class="brd-rd5" type="tel" placeholder="Telefone:" name="telefoneAluno"
                                value="{{ old('telefoneAluno') }}" id="telefoneAluno" required />
                            @error('telefoneAluno')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="row mrg20">

                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <p>Senha</p>
                            <input class="brd-rd5" type="number" placeholder="Senha:" name="senhaAluno"
                                id="senhaAluno" value="{{ old('senhaAluno') }}" required />
                            @error('senhaAluno')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <p>Data de Cadastro</p>
                            <input class="brd-rd5" type="datetime-local" placeholder="Data de cadastro:"
                                name="dataCadAluno" id="dataCadAluno" value="{{ old('dataCadAluno') }}" required />
                            @error('dataCadAluno')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>



                    </div>


                    <div class="row mrg20">

                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <p>Objetivo do Aluno</p>
                            <input class="brd-rd5" type="text" placeholder="Objetivo:" name="objetivo"
                                id="objetivo" value="{{ old('objetivo') }}" required />
                            @error('objetivo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <p>Estado do Aluno</p>
                            <input class="brd-rd5" type="text" placeholder="Estado do Aluno:" name="estadoAluno"
                                id="estadoAluno" value="{{ old('estadoAluno') }}" required />
                            @error('estadoAluno')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="row mrg20">

                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <p>Nome do Curso</p>
                            <input class="brd-rd5" type="text" placeholder="Nome Curso:" name="nomeCurso"
                                id="nomeCurso" value="{{ old('nomeCurso') }}" required />
                            @error('nomeCurso')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <p>Identificador Curso</p>
                            <input class="brd-rd5" type="text" placeholder="Curso matriculado:" name="idCurso"
                                id="idCurso" value="{{ old('idCurso') }}" required />
                            @error('idCurso')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="row mrg20">


                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <p>Status do Aluno</p>
                            <select class="brd-rd5" name="statusAluno" id="statusAluno" required>
                                <option value="ativo" {{ old('statusAluno') == 'ativo' ? 'selected' : '' }}>
                                    Ativo</option>
                                <option value="desativo" {{ old('statusAluno') == 'desativo' ? 'selected' : '' }}>
                                    Desativo</option>
                            </select>
                            @error('statusAluno')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <p>Nivel De Habilidade</p>
                            <select class="brd-rd5" name="nivelHabilidade" id="nivelHabilidade" required>
                                <option value="Iniciante"
                                    {{ old('nivelHabilidade') == 'Iniciante' ? 'selected' : '' }}>
                                    Iniciante</option>
                                <option value="Intermediário"
                                    {{ old('nivelHabilidade') == 'Intermediário' ? 'selected' : '' }}>
                                    Intermediário</option>
                                <option value="Avançado" {{ old('nivelHabilidade') == 'Avançado' ? 'selected' : '' }}>
                                    Avançado</option>
                            </select>
                            @error('nivelHabilidade')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="col-md-12 col-sm-12 col-lg-12">
                    <button class="green-bg brd-rd5" type="submit">Enviar</button>
                </div>

        </div>
        </form>

    </div>
    </div>
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
