@extends('layout.layout')

@section('title', 'Nosso Menu')

@section('conteudo')
    <!--================ Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h1>Menu</h1>
                    <div class="page_link">
                        <a href="{{ url('/') }}">Home</a>
                        <a href="{{ url('/reserva') }}">menu</a>
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

    <!--================ Menu Area =================-->
    <section class="menu_area white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title position-relative">
                        <h1>Our favourite Menu</h1>
                        <hr>
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
                                <h4>Wonton with french fries
                                    <span>$5.00</span>
                                </h4>
                                <p>Wonthon/Potato/Fries/Sauce</p>
                            </li>
                            <li>
                                <h4>Roasted Red Potatoes with Rosemary
                                    <span>$5.00</span>
                                </h4>
                                <p>Wonthon/Potato/Fries/Sauce</p>
                            </li>
                            <li>
                                <h4>Bacon-Wrapped Shrimp with Garlic
                                    <span>$5.00</span>
                                </h4>
                                <p>Wonthon/Potato/Fries/Sauce</p>
                            </li>
                            <li>
                                <h4>Apple Smoked Chicken with White Sauce
                                    <span>$5.00</span>
                                </h4>
                                <p>Wonthon/Potato/Fries/Sauce</p>
                            </li>
                            <li>
                                <h4>Imported Oysters Grill (5 Pieces)
                                    <span>$5.00</span>
                                </h4>
                                <p>Wonthon/Potato/Fries/Sauce</p>
                            </li>
                            <li>
                                <h4>Apple Smoked Chicken with White Sauce
                                    <span>$5.00</span>
                                </h4>
                                <p>Wonthon/Potato/Fries/Sauce</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12 col-lg-10 col-xl-6">
                    <div class="menu_list pr-0">
                        <ul class="list">
                            <li>
                                <h4>Wonton with french fries
                                    <span>$5.00</span>
                                </h4>
                                <p>Wonthon/Potato/Fries/Sauce</p>
                            </li>
                            <li>
                                <h4>Roasted Red Potatoes with Rosemary
                                    <span>$5.00</span>
                                </h4>
                                <p>Wonthon/Potato/Fries/Sauce</p>
                            </li>
                            <li>
                                <h4>Bacon-Wrapped Shrimp with Garlic
                                    <span>$5.00</span>
                                </h4>
                                <p>Wonthon/Potato/Fries/Sauce</p>
                            </li>
                            <li>
                                <h4>Apple Smoked Chicken with White Sauce
                                    <span>$5.00</span>
                                </h4>
                                <p>Wonthon/Potato/Fries/Sauce</p>
                            </li>
                            <li>
                                <h4>Imported Oysters Grill (5 Pieces)
                                    <span>$5.00</span>
                                </h4>
                                <p>Wonthon/Potato/Fries/Sauce</p>
                            </li>
                            <li>
                                <h4>Apple Smoked Chicken with White Sauce
                                    <span>$5.00</span>
                                </h4>
                                <p>Wonthon/Potato/Fries/Sauce</p>
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
