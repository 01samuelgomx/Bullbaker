@extends('layout.layout')

@section('title', 'Home')

@section('conteudo')
    <!--================Home Banner Area =================-->
    <section class="home_slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('img/slider/slider-1.png') }}" alt="">
                    <div class="slider_text">
                        <h1>Bull Baker</h1>

                        <p> A verdadeira magia da confeitaria de bolos está além do sabor e da estética. É sobre criar
                            memórias duradouras, celebrar momentos especiais e compartilhar alegria com aqueles que amamos.
                        </p>
                        <a href="gallery.html" class="main_btn">Explorar Curso</a>
                    </div>
                </div>
                <div class="swiper-slide"><img src="{{ asset('img/slider/slider-2.jpg') }}">
                    <div class="slider_text">
                        <h1>Bull Baker</h1>
                        <p> A verdadeira magia da confeitaria de bolos está além do sabor e da estética. É sobre criar
                            memórias duradouras, celebrar momentos especiais e compartilhar alegria com aqueles que amamos.
                        </p>
                        <a href="gallery.html" class="main_btn">Explorar Curso</a>
                    </div>
                </div>
                <div class="swiper-slide"><img src="{{ asset('img/slider/slider-3.jpg') }}">
                    <div class="slider_text">
                        <h1>Bull Baker</h1>
                        <p> A verdadeira magia da confeitaria de bolos está além do sabor e da estética. É sobre criar
                            memórias duradouras, celebrar momentos especiais e compartilhar alegria com aqueles que amamos.
                        </p>
                        <a href="gallery.html" class="main_btn">Explorar Curso</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--================End Home Banner Area =================-->
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
                        <img class="img-fluid" src="{{ asset('img/banner/bolosobre.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Story Area =================-->

    <!--================ Gallery Area =================-->
    <section class="gallery_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title position-relative">
                        <h1>Nossa Galeria</h1>
                        <hr />
                        <div class="round-planet planet">
                            <div class="round-planet planet2">
                                <div class="shape shape1"></div>
                                <div class="shape shape2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="lightgallery">

                <div class="col-lg-4 all-image" data-src="{{ asset('img/gallery/g1.png') }}">
                    <div class="single-gallery">
                        <div class="overlay"></div>
                        <img class="img-fluid w-100" src="{{ asset('img/gallery/g1.png') }}" alt="" />
                        <div class="content">
                            <i class="lnr lnr-picture"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 all-image" data-src="{{ asset('img/gallery/g2.png') }}">
                    <div class="single-gallery">
                        <div class="overlay"></div>
                        <img class="img-fluid w-100" src="{{ asset('img/gallery/g2.png') }}" alt="" />
                        <div class="content">
                            <i class="lnr lnr-picture"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 all-image" data-src="{{ asset('img/gallery/g5.png') }}">
                    <div class="single-gallery">
                        <div class="overlay"></div>
                        <img class="img-fluid w-100" src="{{ asset('img/gallery/g5.png') }}" alt="" />
                        <div class="content">
                            <i class="lnr lnr-picture"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 all-image" data-src="{{ asset('img/gallery/g3.png') }}">
                    <div class="single-gallery">
                        <div class="overlay"></div>
                        <img class="img-fluid w-100" src="{{ asset('img/gallery/g3.png') }}" alt="" />
                        <div class="content">
                            <i class="lnr lnr-picture"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 all-image" data-src="{{ asset('img/gallery/g4.png') }}">
                    <div class="single-gallery">
                        <div class="overlay"></div>
                        <img class="img-fluid w-100" src="{{ asset('img/gallery/g4.png') }}" alt="" />
                        <div class="content">
                            <i class="lnr lnr-picture"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 all-image" data-src="{{ asset('img/gallery/g7.png') }}">
                    <div class="single-gallery">
                        <div class="overlay"></div>
                        <img class="img-fluid w-100" src="{{ asset('img/gallery/g7.png') }}" alt="" />
                        <div class="content">
                            <i class="lnr lnr-picture"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 all-image" data-src="{{ asset('img/gallery/g6.png') }}">
                    <div class="single-gallery">
                        <div class="overlay"></div>
                        <img class="img-fluid w-100" src="{{ asset('img/gallery/g6.png') }}" alt="" />
                        <div class="content">
                            <i class="lnr lnr-picture"></i>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 all-image" data-src="{{ asset('img/gallery/g8.png') }}">
                    <div class="single-gallery">
                        <div class="overlay"></div>
                        <img class="img-fluid w-100" src="{{ asset('img/gallery/g8.png') }}" alt="" />
                        <div class="content">
                            <i class="lnr lnr-picture"></i>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 all-image" data-src="{{ asset('img/gallery/g9.jpeg') }}">
                    <div class="single-gallery">
                        <div class="overlay"></div>
                        <img class="img-fluid w-100" src="{{ asset('img/gallery/g9.jpeg') }}" alt="" />
                        <div class="content">
                            <i class="lnr lnr-picture"></i>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>
    <!--================ End Gallery Area =================-->

    <hr>
    <!--================Story Area =================-->
    <section class="about_story_area section_gap">
        <div class="container">
            <div class="row story_inner">
                <div class="col-lg-6">
                    <div class="story_text">
                        <h2>Conheça nosso app!</h2>
                        <hr>
                        <p>A Bullbaker oferece uma interface completa para os seus cursos. No nosso app, você terá a melhor
                            experiência! Foi desenvolvido para atender às necessidades dos alunos, com conteúdos completos
                            em um design simples e intuitivo, proporcionando uma experiência ainda melhor.</p>
                        <p>Adquira o acesso ao app exclusivo entrando em contato por whatsapp!</p>
                        <a class="main_btn"
                            href="https://wa.me/5511986033373?text=Ol%C3%A1%21+%F0%9F%91%8B++Meu+nome+%C3%A9+%5BSeu+Nome%5D%2Ce+estou+Interessado+em+adotar+um+pet+que+vi+em+seu+Site%F0%9F%90%BE">Confira!</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="story_img">
                        <img class="img-fluid" src="img/story/phone.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Story Area =================-->
    <hr>
    <section class="blog_categorie_area">
        <div class="container">
                <h3 class="mb-30 title_color">Informações dos cursos</h3>
                <div class="row">
                    <img src="{{ asset('img/blog/cat-post/cat-post-1.png') }}" alt="Cursos de Confeitaria">
                    <div class="col-md-4">
                        <div class="single-defination">
                            <h4 class="mb-20">Totalmente Online</h4>
                            <p>Todos os cursos são oferecidos online, permitindo que você estude no seu próprio ritmo e no
                                conforto
                                da sua casa.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-defination">
                            <h4 class="mb-20">Acesso Exclusivo para Alunos</h4>
                            <p>Apenas alunos inscritos têm acesso aos conteúdos dos cursos, garantindo um ambiente de
                                aprendizado
                                dedicado e seguro.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-defination">
                            <h4 class="mb-20">Conteúdos Abrangentes</h4>
                            <p>Nossos cursos cobrem uma ampla variedade de técnicas e receitas de confeitaria, desde o
                                básico até o
                                avançado, para que você possa aprimorar suas habilidades.</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <hr>
    <!--================ Start banner section =================-->
    <section class="home_banner relative">
        <div class="container-fluid pl-0 ">
            <div class="row justify-content-center align-items-center full_height">
                <div class="col-lg-6 p-0">
                    <div class="banner_left d-flex justify-content-center flex-column">
                        <h1>Conheça nossos Cursos</h1>
                        <p>
                            Descubra o segredo por trás dessas criações e aprenda a dominar as técnicas que tornam os
                            doces
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
                                <h5>Confeiteiro</h5>
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


    <!--================ Top Dish Area =================-->
    <section class="top_dish_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title position-relative">
                        <h1>Nossos Bolos Mais Bem Avaliados</h1>
                        <hr />
                        <div class="round-planet planet">
                            <div class="round-planet planet2">
                                <div class="shape shape1"></div>
                                <div class="shape shape2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="single_dish col-lg-4 col-md-6 text-center">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('img/dish/d1.jfif ') }}" alt="" />
                    </div>
                    <h4>Bolo de frutas vermelhas</h4>
                    <p>Morango/Mirtilo/Framboesa</p>
                    <h5 class="price">$54.99</h5>
                </div>
                <div class="single_dish col-lg-4 col-md-6 text-center">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('img/dish/d2.jfif ') }}" alt="" />
                    </div>
                    <h4>Bolo decoração verão</h4>
                    <p>Coco/Abacaxi</p>
                    <h5 class="price">$45.59</h5>
                </div>
                <div class="single_dish col-lg-4 col-md-6 text-center">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('img/dish/d3.jfif') }}" alt="" />
                    </div>
                    <h4>Bolo Deitado</h4>
                    <p>Abacaxi/Coco</p>
                    <h5 class="price">$32.49</h5>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Top Dish Area =================-->

@endsection
