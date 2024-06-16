@extends('layout.layout')

@section('title', 'Sobre nós')

@section('conteudo')
    <!--================ Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h1>Sobre</h1>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="book-table.html">Menu</a>
                    </div>
                </div>
            </div>
            <div class="shape shape1"></div>
            <div class="shape shape2"></div>
            <div class="shape shape3"></div>
            <div class="shape shape4"></div>
            <div class="shape shape5"></div>
            <div class="shape shape6"></div>
            <div class="shape shape7"></div>
        </div>
    </section>
    <!--================End Banner Area =================-->


    <!--================Story Area =================-->
    <section class="about_story_area section_gap">
        <div class="container">
            <div class="row story_inner">
                <div class="col-lg-6">
                    <div class="story_text">
                        <h2>Sobre nós</h2>
                        <hr>
                        <p>E assim, a confeitaria de bolos se torna mais do que apenas uma habilidade culinária; é uma forma
                            de arte que une pessoas, celebrações
                            e culturas em todo o mundo. Por trás de cada fatia de bolo há uma história a ser contada, um
                            momento a ser lembrado e um sorriso a ser compartilhado. </p>
                        <p>Mas a verdadeira magia da confeitaria de bolos está além do sabor e da estética. É sobre criar
                            memórias duradouras, celebrar momentos especiais e compartilhar alegria com aqueles que amamos.
                        </p>
                        <a class="main_btn" href="{{ url('/menu') }}">Veja nosso menu</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="story_img">
                        <img class="img-fluid" src="{{ asset('img/banner/boloSobre.jfif') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Story Area =================-->
    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="{{ asset('img/blog/cat-post/cat-post-1.png') }}" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="single-blog.html">
                                    <h5>Missão</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Encantar nossos clientes com criações deliciosas, feitas com ingredientes de alta
                                    qualidade e paixão pela arte da confeitaria, proporcionando momentos de doçura e
                                    felicidade em cada mordida.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="{{ asset('img/blog/cat-post/cat-post-2.png') }}" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="single-blog.html">
                                    <h5>Visão</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Ser reconhecida como a confeitaria preferida de nossa comunidade, conhecida por nossa
                                    criatividade, excelência e compromisso com a satisfação do cliente.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="{{ asset('img/blog/cat-post/cat-post-3.jpg') }}" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="single-blog.html">
                                    <h5>Valores</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Paixão: Demonstrar amor e dedicação em tudo o que fazemos, desde a preparação até a
                                    apresentação de nossos produtos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->
      <!--================ Start banner section =================-->
    <section class="home_banner relative">
        <div class="container-fluid pl-0 ">
            <div class="row justify-content-center align-items-center full_height" >
                <div class="col-lg-6 p-0">
                    <div class="banner_left d-flex justify-content-center flex-column">
                        <h1>Conheça nossos Cursos</h1>
                        <p>
                            Descubra o segredo por trás dessas criações e aprenda a dominar as técnicas que tornam os doces
                            tão irresistíveis. Nosso curso de confeitaria oferece a oportunidade de explorar esse mundo
                            fascinante, Venha fazer parte dessa jornada e transforme sua paixão em habilidade, criando
                            confeitos que encantam e inspiram.
                        </p>
                        <a class="main_btn" href="{{ url('/cursos') }}">Quero saber mais</a>
                    </div>
                </div>
                {{-- <div class="col-lg-6">
                    <div class="banner_right d-flex justify-content-center align-items-center">
                        <div class="round-planet planet">
                            <div class="round-planet planet2">
                                <div class="round-planet planet3">
                                    <div class="shape shape1"></div>
                                    <div class="shape shape2"></div>
                                    <div class="shape shape3"></div>
                                    <div class="shape shape4"></div>
                                    <div class="shape shape5"></div>
                                    <div class="shape shape6"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        {{-- <img class="face-img img-fluid" src="img/banner/home-banner.png" alt="" /> --}}
    </section>
    <!--================ End banner section =================-->
    <!--================Member Area =================-->
    <section class="testimonials_area section_gap">
        <div class="container">
            <div class="testi_slider owl-carousel">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{ asset('img/sobre4.jfif') }}" alt="">
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>Sobre o confeiteiro</h4>
                                <h5>Confeiteiro</h5>
                                <p>“O confeiteiro não apenas domina técnicas culinárias, mas também possui um olhar
                                    artístico aguçado, combinando sabores e cores de maneira harmoniosa. ”</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{ asset('img/sobre2.jfif') }}" alt="">
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>Sobre o confeiteiro</h4>
                                <h5>Confeiteiro</h5>
                                <p>“O confeiteiro não apenas domina técnicas culinárias, mas também possui um olhar
                                    artístico aguçado, combinando sabores e cores de maneira harmoniosa. ”</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{ asset('img/sobre5.jfif') }}" alt="">
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>Confeiteiro</h4>
                                <h5>Web Developer, Google</h5>
                                <p>“O confeiteiro não apenas domina técnicas culinárias, mas também possui um olhar
                                    artístico aguçado, combinando sabores e cores de maneira harmoniosa. ”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Member Area =================-->

@endsection
