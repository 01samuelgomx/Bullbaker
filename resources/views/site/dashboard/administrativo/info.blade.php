<!DOCTYPE html>
<html>

<head>
    <!-- Meta-Information -->
    <title>Dashboard Bullbaker</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

            <h4>Manual</h4>
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
            <h4>Como utilizar o dashboard</h4>
            <span>Nossa ferramenta de atualizações e cadastro</span>
        </div>
    </div>
    <!-- Page Top -->

    <div class="panel-content">
        <div class="widget pad50-65">
            <div class="widget-title2" style="flex-direction: column;margin-bottom: 0">
                <h4 style=" font-weight: 600; font-size: 22px">Cadastro nas tabelas</h4>
                <span>Descubra como realizar o cadastro de forma certa!</span>
            </div>

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

                        <ol>
                            <h3 style="margin-top: 45px; font-weight: 600; font-size: 15px">Campos Obrigatórios</h3>
                            <li>
                                <strong>Nome do Aluno </strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Nome completo do aluno.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ser único na tabela de aluno.</li>
                                            <li>Deve ter no mínimo 3 caracteres.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> Samuel Pereira.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Email do Aluno </strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Email do aluno.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ser único na tabela de aluno.</li>
                                            <li>Deve ser um email válido.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> samuel.pereira@example.com.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Senha do Aluno </strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Senha para acesso do aluno.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ser única na tabela de aluno.</li>
                                            <li>Máximo de 10 caracteres.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> senha1234.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Telefone do Aluno </strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Número de telefone do aluno.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ser único na tabela de aluno.</li>
                                            <li>Deve ter no mínimo 11 caracteres.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> 11987654321.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Data de Cadastro </strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Data em que o aluno foi cadastrado.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ser uma data válida.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> 2024-07-10.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Nível de Habilidade </strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Nível de habilidade do aluno.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ser uma string.</li>
                                            <li>Máximo de 255 caracteres.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> Intermediário.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Estado do Aluno </strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Estado de residência do aluno.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ser uma string.</li>
                                            <li>Máximo de 255 caracteres.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> SP.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Nome do Curso </strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Nome do curso em que o aluno está matriculado.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ser uma string.</li>
                                            <li>Máximo de 255 caracteres.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> Confeitaria.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Data de Nascimento </strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Data de nascimento do aluno.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ser uma data válida.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> 2000-01-01.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Status do Aluno </strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Status do aluno.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ser um dos seguintes valores: ativo, desativo.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> ativo.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>ID do Curso </strong>
                                <ul>
                                    <li><strong>Descrição:</strong> ID do curso em que o aluno está matriculado.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve existir na tabela `tblcurso`.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> 1.</li>
                                </ul>
                            </li>
                        </ol>


                        <ol>
                            <h3 style="margin-top: 45px; font-weight: 600; font-size: 15px">Campos Opcionais</h3>
                            <li>
                                <strong>Objetivo </strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Objetivo do aluno.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Opcional.</li>
                                            <li>Deve ser uma string.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> Aprender confeitaria.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Foto do Aluno </strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Foto do aluno.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Opcional.</li>
                                            <li>Deve ser uma imagem (jpeg, png, jpg, gif, svg).</li>
                                            <li>Máximo de 2048 KB.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> path/to/foto.jpg.</li>
                                </ul>
                            </li>
                        </ol>
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
                        <ol>
                            <h3 style="margin-top: 45px; font-weight: 600; font-size: 15px">Campos Obrigatórios
                            </h3>
                            <li>
                                <strong>Nome do Curso</strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Nome completo do curso.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ser único na tabela `tblcurso`.</li>
                                            <li>Deve ter no mínimo 3 caracteres.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> Confeitaria Básica.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Descrição do Curso</strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Descrição detalhada do curso.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ter no mínimo 10 caracteres.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> Curso voltado para iniciantes na área de
                                        confeitaria.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Duração do Curso</strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Duração total do curso em horas.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ser um número inteiro.</li>
                                            <li>Deve ter no mínimo 1 hora.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> 40 horas.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Preço do Curso </strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Preço do curso.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ser um valor numérico.</li>
                                            <li>Deve ser igual ou superior a 0.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> 499.99.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Vagas Disponíveis </strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Número de vagas disponíveis no curso.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ser um número inteiro.</li>
                                            <li>Deve ser no mínimo 1.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> 25.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Foto do Curso</strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Foto representativa do curso.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ser uma imagem (jpeg, png, jpg, gif, svg).</li>
                                            <li>Máximo de 2048 KB.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> path/to/curso.jpg.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Data de Início </strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Data de início do curso.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ser uma data válida.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> 2024-08-01.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Data de Fim</strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Data de término do curso.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ser uma data válida.</li>
                                            <li>Deve ser igual ou posterior à data de início.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> 2024-12-01.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Status do Curso</strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Status atual do curso.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ser um dos seguintes valores: ativo, desativado.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> ativo.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Descrição do Conteúdo do Curso</strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Breve descrição do que será aprendido no curso.
                                    </li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Máximo de 150 caracteres.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> Aprenda as técnicas básicas de confeitaria.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Título da Primeira Aula</strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Título da primeira aula do curso.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ter no mínimo 10 caracteres.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> Introdução à Confeitaria.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Descrição da Primeira Aula</strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Descrição da primeira aula do curso.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ter no mínimo 10 caracteres.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> Nesta aula, você aprenderá os fundamentos básicos
                                        da confeitaria.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Título da Segunda Aula</strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Título da segunda aula do curso.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ter no mínimo 10 caracteres.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> Técnicas de Preparação.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Descrição da Segunda Aula</strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Descrição da segunda aula do curso.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ter no mínimo 10 caracteres.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> Nesta aula, você aprenderá técnicas avançadas de
                                        preparação de doces.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Título da Terceira Aula</strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Título da terceira aula do curso.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ter no mínimo 10 caracteres.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> Decoração de Bolos.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Descrição da Terceira Aula</strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Descrição da terceira aula do curso.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ter no mínimo 10 caracteres.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> Nesta aula, você aprenderá técnicas de decoração
                                        de bolos.</li>
                                </ul>
                            </li>
                        </ol>
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
                        <ol>
                            <h3 style="margin-top: 45px; font-weight: 600; font-size: 15px">Campos Obrigatórios</h3>
                            <li>
                                <strong>Nome da Aula</strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Nome completo da aula.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ser único na tabela `tblaulas`.</li>
                                            <li>Deve ter no mínimo 3 caracteres.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> Introdução ao JavaScript.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>ID do Curso</strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Identificador do curso ao qual a aula pertence.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve existir na tabela `tblcurso`.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> 101.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Descrição da Aula</strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Descrição detalhada da aula.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ter no mínimo 10 caracteres.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> Aula introdutória sobre os conceitos básicos de
                                        JavaScript.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Duração da Aula</strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Duração total da aula em minutos.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ser um número inteiro.</li>
                                            <li>Deve ter no mínimo 1 minuto.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> 60 minutos.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Vídeo da Aula</strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Iframe de um vídeo do YouTube para a aula.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Opcional.</li>
                                            <li>Deve ser uma string.</li>
                                            <li>Deve corresponder ao formato de iframe do YouTube.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> &lt;iframe
                                        src="https://www.youtube.com/embed/VIDEO_ID"&gt;&lt;/iframe&gt;.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Foto da Aula</strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Foto representativa da aula.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Opcional.</li>
                                            <li>Deve ser uma imagem (jpeg, png, jpg, gif, svg).</li>
                                            <li>Máximo de 2048 KB.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> path/to/aula.jpg.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Status da Aula</strong>
                                <ul>
                                    <li><strong>Descrição:</strong> Status atual da aula.</li>
                                    <li><strong>Validações:</strong>
                                        <ul>
                                            <li>Obrigatório.</li>
                                            <li>Deve ser um dos seguintes valores: ativo, desativo.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Exemplo:</strong> ativo.</li>
                                </ul>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <!-- Accordions  -->

        </div>



        <div class="widget pad50-65">
            <div class="widget-title2" style="flex-direction: column;margin-bottom: 0">
                <h4 style=" font-weight: 600; font-size: 22px">Informações adicionais</h4>
                <span>Saiba o jeito certo de utiilizar a tabela.</span>
            </div>

            <div id="acordn" class="acordn-styl1" style="margin-top: 70px">
                <div class="acordn-itm brd-rd5">
                    <h4>
                        <span>Q1.</span> Como cadastrar datas?
                    </h4>
                    <div class="acrdn-cnt">
                        <p>Para cadastrar datas, utilize a função do campo de entrada de datas. Ao selecionar o ícone de
                            calendário, escolha a data correta e utilize apenas esta seleção para orientação. Este
                            método garante a exatidão e precisão no cadastro das datas.</p>
                    </div>
                </div>

                <div class="acordn-itm brd-rd5">
                    <h4>
                        <span>Q2.</span> Preciso desativar ou deletar um cadastro.
                    </h4>
                    <div class="acrdn-cnt">
                        <p>Existem duas maneiras de realizar essa ação. A primeira é utilizar o botão de deletar; ao
                            selecioná-lo, acredito que seu cadastro será excluído. A segunda forma é entrar na página de
                            edição, selecionar o botão de editar do cadastro desejado, alterar o status para "desativo"
                            e clicar em enviar.</p>
                    </div>
                </div>
                <div class="acordn-itm brd-rd5">
                    <h4>
                        <span>Q3.</span> Cadastro de números
                    </h4>
                    <div class="acrdn-cnt">
                        <p>Para cadastrar números, não é necessário inserir caracteres especiais, apenas os dígitos.
                            Certifique-se de informar os dois dígitos do DDD primeiro, seguidos pelos nove dígitos do
                            telefone completo.</p>
                    </div>
                </div>

                <div class="acordn-itm brd-rd5">
                    <h4>
                        <span>Q4.</span> Como cadastrar videos
                    </h4>
                    <div class="acrdn-cnt">
                        <p>Para cadastrar vídeos, faça login na sua conta do YouTube e selecione o vídeo desejado.
                            Clique em "Compartilhar" e, em seguida, selecione a opção "Incorporar". Quando a página com
                            o link do iframe aparecer à direita, selecione e copie todo o código do iframe. Cole esse
                            código no campo de entrada de vídeo no cadastro de aulas.</p>
                    </div>
                </div>

                <div class="acordn-itm brd-rd5">
                    <h4>
                        <span>Q5.</span> Upload de fotos e imagens
                    </h4>
                    <div class="acrdn-cnt">
                        <p>Para cadastrar ou editar imagens, siga as instruções abaixo:

                            Cadastro de Imagens:

                            Selecione o campo de entrada de foto, representado por um ícone de câmera no formulário.
                            Navegue até seu explorador de arquivos e selecione a imagem desejada.
                            Clique em "Abrir". A imagem selecionada será exibida.
                            Edição de Imagens:

                            Selecione o cadastro desejado.
                            Clique na imagem exibida no cadastro e substitua-a pela nova imagem desejada.
                            Após a nova imagem ser exibida, clique em "Enviar" para atualizar a imagem.
                        </p>
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
