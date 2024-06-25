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
                <i class="fa fa-reorder" aria-hidden="true"></i>
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
                        <i class="ion-cube"></i>
                        <div class="stat-box-innr">
                            <span>
                                <i class="counter"> -> {{ $num_alunos_ativos }}</i>
                            </span>
                            <h5>Total de Aluno</h5>
                        </div>
                        <span>
                            <i class="ion-ios-stopwatch"></i>Confira mais em sua tabela Alunos !</span>
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
                    <span>$
                        <i class="counter"></i>
                    </span>

                </div>
                <span>

                </span>
            </div>
        </div>




        <div class="col-md-12 grid-item col-sm-12 col-lg-12">
            <div class="widget proj-order pad50-40">
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
                <h4 class="widget-title">Confira as informações dos cursos!</h4>
                <a class="add-proj brd-rd5" href="{{ url('/dashboard/administrativo/cursos/create') }}"
                    data-toggle="tooltip" title="Adicionar novo curso">+</a>

                <div class="table-wrap">
                    <table class="table table-bordered style2">

                        <thead class="thead-inverse" style="background-color: #c1959d; color: #fff">
                            <tr>
                                <th>ID</th>
                                <th>Foto</th>
                                <th>Nome</th>
                                <th>Descricao</th>
                                <th>Duracao</th>
                                <th>Preco</th>
                                <th>vagasDisponiveisCurso</th>
                                <th>data_inicio</th>
                                <th>data_fim</th>
                                <th>statusCurso</th>
                                <th style="backgroud-color:#4c7f4c">Edição</th>
                                <th style="backgroud-color:##b2354c">Deletar</th>
                            </tr>
                        </thead>

                        <tbody>


                            @foreach ($lista as $curso)
                                <tr>
                                    <td>
                                        <span class="blue-bg indx" style="background-color:#785e63;"
                                            name="">{{ $curso->idCurso }}</span>
                                    </td>

                                    {{-- ------FOTO------ --}}
                                    <td>
                                        @if (Storage::exists('public/img/cursos/' . $curso->fotoCurso))
                                            <img src="{{ asset('storage/img/cursos/' . $curso->fotoCurso) }}"
                                                alt="lll" style="width: 100px; height: 100px;border-radius: 50%">
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
                                        <span class="ph#">{{ $curso->duracaoCurso }} Dias</span>
                                    </td>

                                    <td>
                                        <span class="ph#">R$ {{ $curso->precoCurso }}</span>
                                    </td>

                                    <td>
                                        <span class="ph#">{{ $curso->vagasDisponiveisCurso }} vagas!</span>
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
                                            enctype="multipart/form-data">
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
                </div>
            </div>
        </div>


    </div>
    <!-- Filter Items -->
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

</body>

</html>
