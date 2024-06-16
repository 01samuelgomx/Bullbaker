@extends('layout.layout')

@section('title', 'Home')

@section('conteudo')
    <!--================Home Banner Area =================-->
    <section class="home_slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('img/slider/slider-1.jpg') }}" alt="">
                    <div class="slider_text">
                        <h1>Bull Baker</h1>

                        <p>  A verdadeira magia da confeitaria de bolos está além do sabor e da estética. É sobre criar
                            memórias duradouras, celebrar momentos especiais e compartilhar alegria com aqueles que amamos.</p>
                        <a href="gallery.html" class="main_btn">explore gallery</a>
                    </div>
                </div>
                <div class="swiper-slide"><img src="{{ asset('img/slider/slider-2.jpg') }}" alt="">
                    <div class="slider_text">
                        <h1>Bull Baker</h1>
                        <p>  A verdadeira magia da confeitaria de bolos está além do sabor e da estética. É sobre criar
                            memórias duradouras, celebrar momentos especiais e compartilhar alegria com aqueles que amamos.</p>
                        <a href="gallery.html" class="main_btn">explore gallery</a>
                    </div>
                </div>
                <div class="swiper-slide"><img src="{{ asset('img/slider/slider-3.jpg') }}" alt="">
                    <div class="slider_text">
                        <h1>Bull Baker</h1>
                        <p>  A verdadeira magia da confeitaria de bolos está além do sabor e da estética. É sobre criar
                            memórias duradouras, celebrar momentos especiais e compartilhar alegria com aqueles que amamos.</p>
                        <a href="gallery.html" class="main_btn">explore gallery</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--================End Home Banner Area =================-->

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

    <!--================ Menu Area =================-->
    <section class="menu_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title position-relative">
                        <h1>Nosso Menu de Bolos</h1>
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
            <div class="row menu_inner">
                <div class="col-md-12 col-lg-10 col-xl-6">
                    <div class="menu_list">
                        <ul class="list">
                            <li>
                                <h4>
                                    Bolo de Chocolate
                                    <span>$5.00</span>
                                </h4>
                                <p>Bolo de chocolate com cobertura</p>
                            </li>
                            <li>
                                <h4>
                                    Bolo de Morango
                                    <span>$5.00</span>
                                </h4>
                                <p>Bolo de morango com chantilly</p>
                            </li>
                            <li>
                                <h4>
                                    Bolo de Limão
                                    <span>$5.00</span>
                                </h4>
                                <p>Bolo de limão com glacê</p>
                            </li>
                            <li>
                                <h4>
                                    Bolo Red Velvet
                                    <span>$5.00</span>
                                </h4>
                                <p>Bolo red velvet com cream cheese frosting</p>
                            </li>
                            <li>
                                <h4>
                                    Bolo de Cenoura
                                    <span>$5.00</span>
                                </h4>
                                <p>Bolo de cenoura com cobertura de chocolate</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-10 col-xl-6">
                    <div class="menu_list pr-0">
                        <ul class="list">
                            <li>
                                <h4>
                                    Bolo de Chocolate
                                    <span>$5.00</span>
                                </h4>
                                <p>Bolo de chocolate com cobertura</p>
                            </li>
                            <li>
                                <h4>
                                    Bolo de Morango
                                    <span>$5.00</span>
                                </h4>
                                <p>Bolo de morango com chantilly</p>
                            </li>
                            <li>
                                <h4>
                                    Bolo de Limão
                                    <span>$5.00</span>
                                </h4>
                                <p>Bolo de limão com glacê</p>
                            </li>
                            <li>
                                <h4>
                                    Bolo Red Velvet
                                    <span>$5.00</span>
                                </h4>
                                <p>Bolo red velvet com cream cheese frosting</p>
                            </li>
                            <li>
                                <h4>
                                    Bolo de Cenoura
                                    <span>$5.00</span>
                                </h4>
                                <p>Bolo de cenoura com cobertura de chocolate</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================End Menu Area =================-->

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


    <!--================Área de Reserva de Mesas=================-->
    {{-- <section class="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title position-relative">
                        <h1>Faça uma Reserva</h1>
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

            <div class="book_table_inner row align-items-center">
                <div class="offset-lg-2 offset-md-1 col-lg-8 col-md-10">
                    <div class="table_form">
                        <form class="book_table_form row" action="#">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Digite seu nome" />
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Digite o endereço de e-mail" />
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="subject" name="subject"
                                    placeholder="Número de telefone" />
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="subject" name="subject"
                                    placeholder="Selecione a data e a hora" />
                            </div>
                            <div class="form-group col-md-12">
                                <div class="form-select">
                                    <select>
                                        <option value="1">Selecione o evento</option>
                                        <option value="1">Selecione o evento Dhaka</option>
                                        <option value="1">Selecione o evento Dilli</option>
                                        <option value="1">Selecione o evento Nova Iorque</option>
                                        <option value="1">Selecione o evento Islamabad</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" value="submit" class="btn submit_btn form-control">
                                    Fazer Reserva
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--================Fim da Área de Reserva de Mesas=================-->

@endsection
