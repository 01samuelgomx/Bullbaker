@extends('layout.layout')

@section('title', 'Conheça nossos cursos !')

@section('conteudo')
    <!--================ Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h1>Cursos</h1>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="book-table.html">cursos</a>
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
                                    <h5>Online</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Cada um dos nossos cursos online apresenta conteúdos informativos e didáticos, projetados para instruir os alunos a adquirirem novas habilidades e alcançarem seu potencial.</p>
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
                                    <h5>Suporte</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Cuidamos do desevolvimento de nossos alunos de forma única, com apoio e suporte fornecido sempre que pudermos.</p>
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
                                    <h5>Qualidade</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Oportunidade única: cada conteúdo é meticulosamente desenvolvido com dedicação, visando oferecer sempre o melhor aos nossos alunos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        <article class="row blog_item">
                            <div class="col-md-3">

                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <p>Informação Sobre as Aulas</p>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">20 Vagas<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">30 Horas de Duração<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">+12 aulas<i class="lnr lnr-eye"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="{{ asset('img/blog/main-blog/blog-1.jpg') }}" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>Curso 1</h2>
                                        </a>
                                        <p>Lorem ipsum dolor sit amet. Et culpa blanditiis id tempora consequatur et placeat animi qui quaerat reprehenderit in enim inventore aut debitis labore est earum voluptatem? Nam omnis labore ut possimus magnam et dolores adipisci aut provident dolorem et Quis labore ut odio minus.</p>
                                        <a href="single-blog.html" class="blog_btn">Saiba mais</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                              <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <p>Informação Sobre as Aulas</p>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">20 Vagas<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">30 Horas de Duração<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">+12 aulas<i class="lnr lnr-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="{{ asset('img/blog/main-blog/blog-2.jpg') }}" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>Curso 2</h2>
                                        </a>
                                         <p>Lorem ipsum dolor sit amet. Et culpa blanditiis id tempora consequatur et placeat animi qui quaerat reprehenderit in enim inventore aut debitis labore est earum voluptatem? Nam omnis labore ut possimus magnam et dolores adipisci aut provident dolorem et Quis labore ut odio minus.</p>
                                        <a href="single-blog.html" class="blog_btn">Saiba mais</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                             <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <p>Informação Sobre as Aulas</p>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">20 Vagas<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">30 Horas de Duração<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">+12 aulas<i class="lnr lnr-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="{{ asset('img/blog/main-blog/blog-3.jpg') }}" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>Curso 3</h2>
                                        </a>
                                         <p>Lorem ipsum dolor sit amet. Et culpa blanditiis id tempora consequatur et placeat animi qui quaerat reprehenderit in enim inventore aut debitis labore est earum voluptatem? Nam omnis labore ut possimus magnam et dolores adipisci aut provident dolorem et Quis labore ut odio minus.</p>
                                        <a href="single-blog.html" class="blog_btn">Saiba mais</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                               <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <p>Informação Sobre as Aulas</p>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">20 Vagas<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">30 Horas de Duração<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">+12 aulas<i class="lnr lnr-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="{{ asset('img/blog/main-blog/blog-4.jpg') }}" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>Curso 4</h2>
                                        </a>
                                         <p>Lorem ipsum dolor sit amet. Et culpa blanditiis id tempora consequatur et placeat animi qui quaerat reprehenderit in enim inventore aut debitis labore est earum voluptatem? Nam omnis labore ut possimus magnam et dolores adipisci aut provident dolorem et Quis labore ut odio minus.</p>
                                        <a href="single-blog.html" class="blog_btn">Saiba mais</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                            
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <p>Informação Sobre as Aulas</p>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">20 Vagas<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">30 Horas de Duração<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">+12 aulas<i class="lnr lnr-eye"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="{{ asset('img/blog/main-blog/blog-5.jpg') }}" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>Curso 5</h2>
                                        </a>
                                          <p>Lorem ipsum dolor sit amet. Et culpa blanditiis id tempora consequatur et placeat animi qui quaerat reprehenderit in enim inventore aut debitis labore est earum voluptatem? Nam omnis labore ut possimus magnam et dolores adipisci aut provident dolorem et Quis labore ut odio minus.</p>
                                        <a href="single-blog.html" class="blog_btn">Saiba mais</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        {{-- <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-left"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item"><a href="#" class="page-link">01</a></li>
                                <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                                <li class="page-item"><a href="#" class="page-link">04</a></li>
                                <li class="page-item"><a href="#" class="page-link">09</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-right"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav> --}}
                    </div>
                </div>
           
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

@endsection
