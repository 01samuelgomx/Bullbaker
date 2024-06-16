@extends('layout.layout')

@section('title', 'Contato')

@section('conteudo')
  <!--================ Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h1>Contato</h1>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="contact.html">Contato</a>
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

    <!--================Contact Area =================-->
    <section class="contact_area p_120">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.025328309543!2d-46.434437024671894!3d-23.49559717884505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1710647092688!5m2!1spt-BR!2sbr" width="1200" height="550" style="padding-bottom:5em;margin-left:18%;border: 0px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Balneário Camboriú | SC</h6>
                            <p>Brasil | BR</p>
                            
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">5547996081496</a></h6>
                            <p>Seg a sex 13h ás 18h</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">support@colorlib.com</a></h6>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Selecione seu nome">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Endereço de E-mail">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder=" Assunto">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Escreva sua mensagem"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn submit_btn">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->
@endsection