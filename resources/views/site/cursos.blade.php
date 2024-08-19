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


	<!--================Story Area =================-->
	<section class="about_story_area section_gap">
		<div class="container">
			<div class="row story_inner">
				<div class="col-lg-6">
					<div class="story_text">
						<h2>Conheça nosso app!</h2>
						<hr>
						<p>A Bullbaker oferece uma interface completa para os seus cursos. No nosso app, você terá a melhor experiência! Foi desenvolvido para atender às necessidades dos alunos, com conteúdos completos em um design simples e intuitivo, proporcionando uma experiência ainda melhor.</p>
						<p>Adquira o acesso ao app exclusivo entrando em contato por whatsapp!</p>
						<a class="main_btn" href="https://wa.me/5511986033373?text=Ol%C3%A1%21+%F0%9F%91%8B++Meu+nome+%C3%A9+%5BSeu+Nome%5D%2Ce+estou+Interessado+em+adotar+um+pet+que+vi+em+seu+Site%F0%9F%90%BE">Confira!</a>
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

		
		<div class="section-top-border">
    <h3 class="mb-30 title_color">Informações dos cursos</h3>
    <div class="row">
        <img src="{{ asset('img/blog/cat-post/cat-post-1.png') }}" alt="Cursos de Confeitaria">
        <div class="col-md-4">
            <div class="single-defination">
                <h4 class="mb-20">Totalmente Online</h4>
                <p>Todos os cursos são oferecidos online, permitindo que você estude no seu próprio ritmo e no conforto da sua casa.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-defination">
                <h4 class="mb-20">Acesso Exclusivo para Alunos</h4>
                <p>Apenas alunos inscritos têm acesso aos conteúdos dos cursos, garantindo um ambiente de aprendizado dedicado e seguro.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-defination">
                <h4 class="mb-20">Conteúdos Abrangentes</h4>
                <p>Nossos cursos cobrem uma ampla variedade de técnicas e receitas de confeitaria, desde o básico até o avançado, para que você possa aprimorar suas habilidades.</p>
            </div>
        </div>
    </div>
</div>

	

       
        </div>
    </section>
    <!--================Blog Categorie Area =================-->


@endsection
