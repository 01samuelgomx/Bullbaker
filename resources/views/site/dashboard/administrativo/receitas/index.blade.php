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

    {{-- .modal-body {
        position: relative;
        -ms-flex: 1 1 auto;
        width: 190% !import;
        flex: 1 1 auto;
        padding: 1rem;
    } --}}

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
            <i style="background-color: #4d636f;"></i>
            <i style="background-color:#2c3e47;"></i>
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
            <h4>Bem - Vindo a Area das Receitas</h4>
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
                <h4 class="widget-title">Confira todas as receitas!</h4>
                <a class="add-proj brd-rd5" href="{{ url('/dashboard/administrativo/receitas/create') }}"
                    data-toggle="tooltip" title="Adicionar Nova Receita">+</a>

                <div class="table-wrap">
                    <table class="table table-bordered style2">

                        <thead class="thead-inverse" style="background-color:#4d636f; color: #fff">
                            <tr>
                                <th>Visualizar</th>
                                <th>ID</th>
                                <th>Foto</th>
                                <th>Nome</th>
                                <th>Ingrediente</th>
                                <th>Modo de Preparo</th>
                                <th>Status</th>
                                <th>Edição</th>
                                <th>Deletar</th>
                            </tr>
                        </thead>

                        <tbody>


                            @foreach ($lista as $receita)
                                <tr>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#myModal" style="background-color: #4d636f; border: none"
                                            onclick="fetchReceitaData({{ $receita->idReceita }})">
                                            Abrir
                                        </button>
                                    </td>

                                    <td>
                                        <span class="blue-bg indx" style="background-color:#2c3e47;" name=""
                                            title="Numero da Receita">{{ $receita->idReceita }}</span>
                                    </td>

                                    {{-- ------FOTO------ --}}
                                    <td>
                                        @if (Storage::exists('public/img/receitas/' . $receita->fotoReceita))
                                            <img src="{{ asset('storage/img/receitas/' . $receita->fotoReceita) }}"
                                                alt="lll" style="width: 100px; height: 100px;border-radius: 50%">
                                        @else
                                            <span>Imagem não disponível</span>
                                        @endif
                                    </td>
                                    {{-- ---------------- --}}

                                    <td>
                                        <span class="date">{{ $receita->nomeReceita }}</span>
                                    </td>

                                    <td>

                                        <h4 class="name">{{ Str::limit($receita->ingredienteReceita, 50, '...') }}
                                        </h4>
                                    </td>

                                    <td>
                                        <h4 class="name">{{ Str::limit($receita->modoPreparoReceita, 50, '...') }}
                                        </h4>
                                    </td>

                                    <td>
                                        <span class="ph#">{{ $receita->statusReceita }}</span>
                                    </td>

                                    <td>
                                        <div>
                                            <a href="{{ route('edit.receita', $receita->idReceita) }}" title=""
                                                class="brd-rd30 btn btn-outline-success">Editar</a>
                                        </div>
                                    </td>

                                    <td>
                                        <form action="{{ route('delete.receita', $receita->idReceita) }}"
                                            method="POST" role="form text-left" enctype="multipart/form-data">
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




                    <div class="container mt-3">
                        @foreach ($lista as $receita)
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <img id="modalImagem" src="" alt="Imagem da Receita"
                                            style="width: 100px; height: 100px;border-radius: 50%; display: none;">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="modalTitle"></h4>
                                            <button type="button" class="close"
                                                data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Informação do conteúdo</p>
                                            <div class="row mrg20">
                                                <div class="col-md-6 col-sm-12 col-lg-6 limited-width">
                                                    <p class="tittle-modalReceita">Ingredientes!</p>
                                                    <p id="modalIngredientes"></p>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6 limited-width">
                                                    <p  class="tittle-modalReceita">Modo de preparo</p>
                                                    <p id="modalModoPreparo"></p>
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

                </div>
            </div>
        </div>
    </div>
    <!-- Filter Items -->
    </div>
    </div>
    <!-- Panel Content -->

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


    {{-- Requisição do modal de visualização das receitas --}}
    <script>
        function fetchReceitaData(id) {
            fetch(`/dashboard/administrativo/receitas/${id}`)
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        alert(data.error);
                    } else {
                        document.getElementById('modalTitle').innerText = data.nomeReceita;
                        document.getElementById('modalIngredientes').innerText = data.ingredienteReceita;
                        document.getElementById('modalModoPreparo').innerText = data.modoPreparoReceita;

                        if (data.fotoReceita) {
                            document.getElementById('modalImagem').src = `/storage/img/receitas/${data.fotoReceita}`;
                            document.getElementById('modalImagem').style.display = 'block';
                        } else {
                            document.getElementById('modalImagem').style.display = 'none';
                        }

                        $('#myModal').modal('show');
                    }
                })
                .catch(error => {
                    console.error('Error fetching receita data:', error);
                    alert('Erro ao buscar dados da receita');
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
