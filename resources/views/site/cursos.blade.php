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

		
			<div class="section-top-border">
				<h3 class="mb-30 title_color">Definition</h3>
				<div class="row">
                      <img src="{{ asset('img/blog/cat-post/cat-post-3.jpg') }}" alt="post">
					<div class="col-md-4">
						<div class="single-defination">
							<h4 class="mb-20">Definition 01</h4>
							<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer
								money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-defination">
							<h4 class="mb-20">Definition 02</h4>
							<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer
								money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-defination">
							<h4 class="mb-20">Definition 03</h4>
							<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer
								money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
						</div>
					</div>
				</div>
			</div>
			<div class="section-top-border">
				<h3 class="mb-30 title_color">Definition</h3>
				<div class="row">
                      <img src="{{ asset('img/blog/cat-post/cat-post-2.png') }}" alt="post">
					<div class="col-md-4">
						<div class="single-defination">
							<h4 class="mb-20">Definition 01</h4>
							<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer
								money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-defination">
							<h4 class="mb-20">Definition 02</h4>
							<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer
								money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-defination">
							<h4 class="mb-20">Definition 03</h4>
							<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer
								money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
						</div>
					</div>
				</div>
			</div>

            {{-- <div class="row">
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
            </div> --}}
            
        </div>
    </section>
    <!--================Blog Categorie Area =================-->


@endsection
