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
    <link rel="icon" href="{{ asset('img/logo.jpg') }}" type="image/png" />

    <!-- Our Web CSS Styles -->
    <link rel="icon" href="{{ asset('../../img/logo.jpg') }}" type="image/png" />
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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>

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

    .modal-backdrop {
        z-index: -1 !important;
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
        width: 100%;
        max-width: 120em !important;
        text-align: center;
    }

    .modal-content p {
        font-size: 15px;
        font-weight: 700;
        padding: 5px;
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
                <img class="brd-rd50" style="width: 50px" src="{{ asset('assets/img/gabriela.png') }}">
                <span>Olá, seja bem vindo! {{ $administrador->nomeAdmin }} </span>
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
                        <i class="fa fa-book" aria-hidden="true"></i>
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
            <h4>Bem - Vindo a Area dos cursos!
                <span></span> Panel
            </h4>
            <span>Nossa interface de atualizações, Realize seu cadastro em poucos passos!</span>
        </div>
    </div>
    <!-- Page Top -->

    <div class="panel-content">
        <div class="filter-items">
            <div class="row grid-wrap mrg20">
                <div class="col-md-4 grid-item col-sm-6 col-lg-3">
                    <div class="stat-box widget bg-clr1">
                        <div class="wdgt-opt">
                            <span class="wdgt-opt-btn">
                                <i class="ion-android-more-vertical"></i>
                            </span>

                        </div>

                        <i class="ion-arrow-graph-up-right"></i>
                        <div class="stat-box-innr">
                            <span>
                                <i class="counter"> -> {{ $num_cursos_ativos }}</i>
                            </span>
                            <h5>Cursos Cadastrados !</h5>
                        </div>
                        <span>
                            <i class="ion-ios-stopwatch"></i>Crie novo curso através da tabela</span>
                    </div>
                </div>
                <div class="col-md-4 grid-item col-sm-6 col-lg-3">
                    <div class="stat-box widget bg-clr2">
                        <div class="wdgt-opt">
                            <span class="wdgt-opt-btn">
                                <i class="ion-android-more-vertical"></i>
                            </span>

                        </div>

                        <i class="ion-android-desktop"></i>
                        <div class="stat-box-innr">
                            <span>
                                <i class="counter"> -> {{ $num_aulas_ativas }}</i></span>
                            <h5>Aulas Inseridas !</h5>
                        </div>
                        <span>
                            <i class="ion-ios-stopwatch"></i>Saiba mais e acesse a tabela aulas !</span>
                    </div>
                </div>

                <div class="col-md-4 grid-item col-sm-6 col-lg-3">
                    <div class="stat-box widget bg-clr3">
                        <div class="wdgt-opt">
                            <span class="wdgt-opt-btn">
                                <i class="ion-android-more-vertical"></i>
                            </span>

                        </div>


                        <i class="ion-cube"></i>
                        <div class="stat-box-innr">
                            <span>
                                <i class="counter"> -> {{ $num_alunos_ativos }}</i>
                            </span>
                            <h5>Total de Alunos</h5>
                        </div>
                        <span>
                            <i class="ion-ios-stopwatch"></i>Confira mais em sua tabela alunos !</span>
                    </div>
                </div>

                <div class="col-md-4 grid-item col-sm-6 col-lg-3">
                    <div class="stat-box widget bg-clr4">
                        <div class="wdgt-opt">
                            <span class="wdgt-opt-btn">
                                <i class="ion-android-more-vertical"></i>
                            </span>

                        </div>

                        <i class="ion-android-desktop"></i>
                        <div class="stat-box-innr ">
                            <span>
                                <i class="counter"> -> {{ $totalReceitasAtivas }}</i></span>
                            <h5>Receitas Inseridas !</h5>
                        </div>
                        <span>
                            <i class="ion-ios-stopwatch"></i>Cadastre novas Receita!</span>
                    </div>
                </div>

                <div class="col-md-4 grid-item col-sm-6 col-lg-3">
                </div>
                <div class="wdgt-ldr">
                    <div class="ball-scale-multiple">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <i class="ion-android-upload"></i>
                <div class="stat-box-innr">
                    <span>.
                        <i class="counter">.</i>
                    </span>
                    <h5>.</h5>
                </div>
                <span>
                    <i class="ion-ios-stopwatch" style="color: #fff"></i>.</span>
            </div>



        </div>

        <div class="col-md-12 grid-item col-sm-12 col-lg-12">
            <div class="widget proj-order pad50-40">
                <h4 class="widget-title">Confira as informações dos cursos!</h4>
                <a class="add-proj brd-rd5" href="{{ url('/dashboard/administrativo/cursos/create') }}"
                    data-toggle="tooltip" title="Adicionar novo curso">+</a>


                <div class="table-wrap">
                    <table class="table table-bordered style2">

                        <thead class="thead-inverse" style="background-color: #c1959d; color: #fff">
                            <tr>
                                <th>Visualizar</th>
                                <th>ID</th>
                                <th>Foto</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Duração</th>
                                <th>Preço</th>
                                <th>Vagas Disponíveis </th>
                                <th>Oque se Aprende no Curso?</th>
                                <th>Titulo Um Curso</th>
                                <th>Descrisção um Curso</th>
                                <th>Titulo Dois Curso</th>
                                <th>Descrisção Dois Curso</th>
                                <th>Titulo Tres</th>
                                <th>Descrisção Três</th>
                                <th>Data de inicio</th>
                                <th>Data final</th>
                                <th>Status do Curso</th>
                                <th>Edição</th>
                                <th>Deletar</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($lista as $curso)
                                <tr>

                                    <td>
                                        <button type="button" class="btn btn-primary"
                                            style="background-color:#AD868D; border: none"
                                            onclick="fetchCursoData({{ $curso->idCurso }})">
                                            Abrir
                                        </button>
                                    </td>

                                    <td>
                                        <span class="blue-bg indx" style="background-color:#C1959D;" name=""
                                            title="Numero do Curso"> {{ $curso->idCurso }}</span>
                                    </td>

                                    {{-- ------FOTO------ --}}
                                    <td>
                                        @if (Storage::exists('public/img/cursos/' . $curso->fotoCurso))
                                            <img src="{{ asset('storage/img/cursos/' . $curso->fotoCurso) }}"
                                                alt="lll" style="width: 100px; height: 100px;border-radius: 15%">
                                        @else
                                            <span>Imagem não disponível</span>
                                        @endif
                                    </td>
                                    {{-- ---------------- --}}


                                    <td>
                                        <span class="date">{{ $curso->nomeCurso }}</span>
                                    </td>

                                    <td>
                                        <h4 class="name">{{ $curso->descricaoCurso }}</h4>
                                    </td>

                                    <td>
                                        <span class="ph#">{{ $curso->duracaoCurso }}
                                            Dias</span>
                                    </td>

                                    <td>
                                        <span class="ph#">R$
                                            {{ $curso->precoCurso }}</span>
                                    </td>

                                    <td>
                                        <span class="ph#">{{ $curso->vagasDisponiveisCurso }}
                                            vagas!</span>
                                    </td>

                                    <td>
                                        <span
                                            class="ph#">{{ Str::limit($curso->aprendeDescriCursos, 25, '...') }}</span>
                                    </td>

                                    <td>
                                        <span class="ph#">{{ Str::limit($curso->tituloUmCurso, 25, '...') }}</span>
                                    </td>

                                    <td>
                                        <span class="ph#">{{ Str::limit($curso->descriumCurso, 25, '...') }}</span>
                                    </td>
                                    <td>
                                        <span
                                            class="ph#">{{ Str::limit($curso->tituloDoisCurso, 25, '...') }}</span>
                                    </td>

                                    <td>
                                        <span
                                            class="ph#">{{ Str::limit($curso->descriDoisCurso, 25, '...') }}</span>
                                    </td>
                                    <td>
                                        <span
                                            class="ph#">{{ Str::limit($curso->tituloTresCurso, 25, '...') }}</span>
                                    </td>

                                    <td>
                                        <span
                                            class="ph#">{{ Str::limit($curso->descriTresCurso, 25, '...') }}</span>
                                    </td>


                                    <td>
                                        <span class="addr">{{ $curso->data_inicio }}</span>
                                    </td>

                                    <td>
                                        <span class="addr">{{ $curso->data_fim }}</span>
                                    </td>

                                    <td>
                                        <span class="addr">{{ $curso->statusCurso }}</span>
                                    </td>

                                    <td>
                                        <div>
                                            <a href="{{ route('edit.curso', $curso->idCurso) }}" title=""
                                                class="brd-rd30 btn btn-outline-success">Editar</a>
                                        </div>
                                    </td>

                                    <td>
                                        <form action="{{ route('delete.curso', $curso->idCurso) }}" method="POST"
                                            role="form text-left" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit"
                                                class="brd-rd30 btn btn-outline-danger">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                    @if (session('success'))
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                showModal();
                            });
                        </script>
                    @endif

                    <!-- Listagem dos cursos -->
                    <div class="container mt-3">
                        @foreach ($lista as $curso)
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <img id="fotoCurso" src="" alt="Imagem do curso"
                                            style="width: 100px; height: 100px; border-radius: 50%; display: none;">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="nomeCurso"></h4>
                                            <button type="button" class="close"
                                                data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Informação do conteúdo</p>
                                            <div class="row mrg20">
                                                <div class="col-md-6 col-sm-12 col-lg-6 limited-width">
                                                    <p class="tittle-modalCurso">Descrição!</p>
                                                    <p id="descricaoCurso"></p>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6 limited-width">
                                                    <p class="tittle-modalCurso">O que se aprende?</p>
                                                    <p id="aprendeDescriCursos"></p>
                                                </div>
                                            </div>
                                            <div class="row mrg20">
                                                <div class="col-md-6 col-sm-12 col-lg-6 limited-width">
                                                    <p class="tittle-modalCurso">Primeiro Título</p>
                                                    <p id="tituloUmCurso"></p>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6 limited-width">
                                                    <p class="tittle-modalCurso">Primeira descrição</p>
                                                    <p id="descriumCurso"></p>
                                                </div>
                                            </div>
                                            <div class="row mrg20">
                                                <div class="col-md-6 col-sm-12 col-lg-6 limited-width">
                                                    <p class="tittle-modalCurso">Segundo Título</p>
                                                    <p id="tituloDoisCurso"></p>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6 limited-width">
                                                    <p class="tittle-modalCurso">Segunda descrição</p>
                                                    <p id="descriDoisCurso"></p>
                                                </div>
                                            </div>
                                            <div class="row mrg20">
                                                <div class="col-md-6 col-sm-12 col-lg-6 limited-width">
                                                    <p class="tittle-modalCurso">Terceiro Título</p>
                                                    <p id="tituloTresCurso"></p>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6 limited-width">
                                                    <p class="tittle-modalCurso">Terceira descrição</p>
                                                    <p id="descriTresCurso"></p>
                                                </div>
                                            </div>
                                            <div class="row mrg20">
                                                <div class="col-md-6 col-sm-12 col-lg-6 limited-width">
                                                    <p class="tittle-modalCurso">Duração</p>
                                                    <p id="duracaoCurso"> dias</p>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6 limited-width">
                                                    <p class="tittle-modalCurso">Preço</p>
                                                    <p id="precoCurso"></p>
                                                </div>
                                            </div>
                                            <div class="row mrg20">
                                                <div class="col-md-6 col-sm-12 col-lg-6 limited-width">
                                                    <p class="tittle-modalCurso">Data de início</p>
                                                    <p id="data_inicio"></p>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6 limited-width">
                                                    <p class="tittle-modalCurso">Data de Término</p>
                                                    <p id="data_fim"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Modal de Sucesso -->
                    <div id="successModal" class="modal" style="display: none;">
                        <div class="modal-content">
                            <div class="align-close">
                                <span class="close" onclick="closeModal()">&times;</span>
                            </div>
                            <img src="{{ asset('assets/img/success.png') }}" style="width: 120px; height: 120px"
                                alt="confere">
                            <p>Operação realizada com sucesso!</p>
                        </div>
                    </div>

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
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
            }, 3500);
        }

        function closeModal() {
            var modal = document.getElementById("successModal");
            modal.style.display = "none";
        }
    </script>


                    {{-- Requisição do modal de visualização dos cursos --}}
                    <script>
                        function fetchCursoData(id) {
                            fetch(`/dashboard/administrativo/cursos/${id}`)
                                .then(response => response.json())
                                .then(data => {
                                    if (data.error) {
                                        console.error('Error fetching curso data:', data.error);
                                        alert(data.error);
                                    } else {
                                        document.getElementById('nomeCurso').innerText = data.nomeCurso;
                                        document.getElementById('descricaoCurso').innerText = data.descricaoCurso;
                                        document.getElementById('duracaoCurso').innerText = data.duracaoCurso;
                                        document.getElementById('precoCurso').innerText = data.precoCurso;
                                        document.getElementById('data_inicio').innerText = data.data_inicio;
                                        document.getElementById('data_fim').innerText = data.data_fim;
                                        document.getElementById('aprendeDescriCursos').innerText = data.aprendeDescriCursos;
                                        document.getElementById('tituloUmCurso').innerText = data.tituloUmCurso;
                                        document.getElementById('descriumCurso').innerText = data.descriumCurso;
                                        document.getElementById('tituloDoisCurso').innerText = data.tituloDoisCurso;
                                        document.getElementById('descriDoisCurso').innerText = data.descriDoisCurso;
                                        document.getElementById('tituloTresCurso').innerText = data.tituloTresCurso;
                                        document.getElementById('descriTresCurso').innerText = data.descriTresCurso;

                                        if (data.fotoCurso) {
                                            document.getElementById('fotoCurso').src = `/storage/img/cursos/${data.fotoCurso}`;
                                            document.getElementById('fotoCurso').style.display = 'block';
                                        } else {
                                            document.getElementById('fotoCurso').style.display = 'none';
                                        }

                                        $('#myModal').modal('show');
                                    }
                                })
                                .catch(error => {
                                    console.error('Error fetching curso data:', error);
                                    alert('Erro ao buscar dados do curso');
                                });
                        }

                        $(document).ready(function() {
                            $('#myModal').on('hidden.bs.modal', function() {
                                $('body').removeClass('modal-open');
                                $('.modal-backdrop').remove();
                            });
                        });
                    </script>

</body>

</html>
