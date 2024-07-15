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
    <link rel="icon" href="{{ asset('../../img/logo.jpg') }}" type="image/png" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">

    <!-- Our Website CSS Styles -->
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
    <div class="pg-tp">
        <i class="ion-cube"></i>
        <div class="pr-tp-inr">
            <h4>Bem - Vindo a Area dos Cursos!
                <span></span> Panel
            </h4>
            <span>Nossa interface de atualizações, Realize seu cadastro em poucos passos!</span>
        </div>
    </div>
    <!-- Page Top -->

    <div class="panel-content">
        <div class="widget pad50-65 styleTableCurso">

            <form action="{{ route('update.curso', $editCurso->idCurso) }}" method="POST" role="form text-left"
                enctype="multipart/form-data" class="contact-form">

                @csrf
                @method('PUT')

                <div class="d-flex justify-content-between">

                    <div class="widget-title2">

                        <div class="pr-tp-inr">
                            <h4>Preencha com os dados dos Cursos </h4>
                            <span>Por favor certifique-se das informções antes de realizar o cadastro!</span>
                        </div>

                    </div>

                    {{-- ------FOTO------ --}}
                    <div class="file-input-container" style="margin-bottom:30px;">
                        <input type="file" id="file-input" accept="image/*" onchange="displayImage(event)"
                            name="fotoCurso">
                        <label for="file-input" class="file-label">
                            <img id="icon"
                                src="{{ isset($editCurso->fotoCurso) && $editCurso->fotoCurso ? asset('storage/img/cursos/' . $editCurso->fotoCurso) : asset('public/img/camera.png') }}"
                                alt="Escolher Imagem" style="width: 100px; height: 100px; border-radius: 50%">
                        </label>
                        @error('fotoCurso')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- ---------------- --}}


                </div>

                <div class="column mrg20">

                    <div class="row mrg20">

                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <p>Nome do Curso</p>
                            <input class="brd-rd5" type="text" placeholder="Nome:" name="nomeCurso"
                                id="nomeCurso" value="{{ old('nomeCurso', $editCurso->nomeCurso) }}" />
                            @error('nomeCurso')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <p>Descrisção do curso</p>
                            <input class="brd-rd5" type="text" placeholder="Descrisção:" name="descricaoCurso"
                                id="descricaoCurso"
                                value="{{ old('descricaoCurso', $editCurso->descricaoCurso) }}" />
                            @error('descricaoCurso')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>



                        <div class="row mrg20">

                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <p>Vagas Disponíveis</p>
                                <input class="brd-rd5" type="number" placeholder="Vagas:"
                                    name="vagasDisponiveisCurso" id="vagasDisponiveisCurso"
                                    value="{{ old('vagasDisponiveisCurso', $editCurso->vagasDisponiveisCurso) }}" />
                                @error('vagasDisponiveisCurso')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <p>Preço do curso</p>
                                <input class="brd-rd5" type="number" placeholder="Preço:" name="precoCurso"
                                    id="precoCurso" value="{{ old('precoCurso', $editCurso->precoCurso) }}" />
                                @error('precoCurso')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <p>Primeiro titulo</p>
                                <input class="brd-rd5" type="text" placeholder="Titulo Um:" name="tituloUmCurso"
                                    id="tituloUmCurso"
                                    value="{{ old('tituloUmCurso', $editCurso->tituloUmCurso) }}" />
                                @error('tituloUmCurso')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <p>Primeira Descrisção</p>
                                <input class="brd-rd5" type="text" placeholder="Primeira Descrisção"
                                    name="descriumCurso" id="descriumCurso"
                                    value="{{ old('descriumCurso', $editCurso->descriumCurso) }}" />
                                @error('descriumCurso')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <p>Segundo titulo</p>
                                <input class="brd-rd5" type="text" placeholder="Segundo titulo:"
                                    name="tituloDoisCurso" id="tituloDoisCurso"
                                    value="{{ old('tituloDoisCurso', $editCurso->tituloDoisCurso) }}" />
                                @error('tituloDoisCurso')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <p>Terceiro Titulo</p>
                                <input class="brd-rd5" type="text" placeholder="Terceiro Titulo:"
                                    name="tituloTresCurso" id="tituloTresCurso"
                                    value="{{ old('tituloTresCurso', $editCurso->tituloTresCurso) }}" />
                                @error('tituloTresCurso')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <p>Segunda descrisção</p>
                                <input class="brd-rd5" type="text" placeholder="Segunda descrisção"
                                    name="descriDoisCurso" id="descriDoisCurso"
                                    value="{{ old('descriDoisCurso', $editCurso->descriDoisCurso) }}" />
                                @error('descriDoisCurso')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <p>Terceira descrisção</p>
                                <input class="brd-rd5" type="text" placeholder="Terceira Descrisção"
                                    name="descriTresCurso" id="descriTresCurso"
                                    value="{{ old('descriTresCurso', $editCurso->descriTresCurso) }}" />
                                @error('descriTresCurso')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row mrg20">

                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <p>Oque se Aprende neste curso?</p>
                                    <input class="brd-rd5" type="text" placeholder="Aprendizado:"
                                        name="aprendeDescriCursos" id="aprendeDescriCursos"
                                        value="{{ old('aprendeDescriCursos', $editCurso->aprendeDescriCursos) }}" />
                                    @error('aprendeDescriCursos')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <p>Duração do Curso (em minutos)</p>
                                    <input class="brd-rd5" type="number" placeholder="Duração:" name="duracaoCurso"
                                        id="duracaoCurso" value="{{ old('duracaoCurso', $editCurso->duracaoCurso) }}" />
                                    @error('duracaoCurso')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>


                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <p>Data de Inicio</p>
                                <input class="brd-rd5" type="date" placeholder="Data Inicio:" name="data_inicio"
                                    id="data_inicio" value="{{ old('data_inicio', $editCurso->data_inicio) }}" />
                                @error('data_inicio')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <p>Data Fim</p>
                                <input class="brd-rd5" type="date" placeholder="Data Fim:" name="data_fim"
                                    id="data_fim" value="{{ old('data_fim', $editCurso->data_fim) }}" />
                                @error('data_fim')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <p>Status do curso</p>
                                <select class="brd-rd5" name="statusCurso" id="statusCurso" required>
                                    <option value="ativo" class="brd-rd5"
                                        {{ old('statusCurso', $editCurso->statusCurso) == 'ativo' ? 'selected' : '' }}>
                                        Ativo</option>
                                    <option value="desativado" class="brd-rd5"
                                        {{ old('statusCurso', $editCurso->statusCurso) == 'desativado' ? 'selected' : '' }}>
                                        Desativo</option>
                                </select>
                                @error('statusCurso')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

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
            const fileInput = event.target;
            const file = fileInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imgElement = document.getElementById('icon');
                    imgElement.classList.remove('selected');

                    // Timeout to allow the removal of the class to take effect before adding it again
                    setTimeout(() => {
                        imgElement.src = e.target.result;
                        imgElement.classList.add('selected');
                    }, 100);
                }
                reader.readAsDataURL(file);
            }
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
