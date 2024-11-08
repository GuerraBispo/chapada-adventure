@include('header');

@include('loading.loading')
 
@include('subMenu.subMenu');

@include('menu.menu');

<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Sobre Nós</h1>
            <ul class="breadcumb-menu">
                <li><a href="#">Home</a></li>
                <li>Nossa História</li>
            </ul>
        </div>
    </div>
</div>

<div class="about-area position-relative overflow-hidden overflow-hidden space" id="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="img-box3">
                    <div class="img1"><img src="assets/img/normal/about_3_1.jpg" alt="About"></div>
                    <div class="img2"><img src="assets/img/normal/about_3_2.jpg" alt="About"></div>
                   
                </div>
            </div>
            <div class="col-xl-5">
                <div class="ps-xl-4">
                    <div class="title-area mb-20"><span class="sub-title style1">Seja Bem Vindo</span>
                        <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading" style="font-size: 30px">E aí vamos desbravar a Chapada das Mesas
                        </h2>
                    </div>
                    <p class="pe-xl-5" style="align-content: justify">Somos uma empresa situada na cidade de Carolina - Maranhão especializada em Ecoturismo, tem como propósito a transparência e realização de sonhos dos nossos turistas em  conhecer esse paraíso com  lugares de aguas cristalinas incomparáveis, com lugares e energias que irão te encantar. <br> Vem com a gente conhecer esse cenário de Serras com formatos de Mesetas que irão deixar você conectado com a natureza.<br>

                        A nossa empresa atua como uma infraestrutura de excelência com uma equipe de profissionais experientes e com os melhores roteiros.</p>
                   
              
                    <div class="mt-35"><a href="#" class="th-btn style3 th-icon">Fale Conosco</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</div>

<section class="position-relative overflow-hidden space-bottom" id="destination-sec">
    <div class="container">
        <div class="title-area text-center"><span class="sub-title">Serviços que oferecemos</span>
            <h2 class="sec-title">Venha conferir</h2>
        </div>
        <div class="row gy-4 gx-4">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="destination-item th-ani">
                    <div class="destination-item_img global-img"><img
                            src="assets/img/destination/destination_4_1.jpg" alt="image"></div>
                    <div class="destination-content">
                        <h3 class="box-title"><a href="service-details.html">Segurança</a></h3>
                        <p class="destination-text">Add texto</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="destination-item th-ani">
                    <div class="destination-item_img global-img"><img
                            src="assets/img/destination/destination_4_2.jpg" alt="image"></div>
                    <div class="destination-content">
                        <h3 class="box-title"><a href="service-details.html">Conforto</a></h3>
                        <p class="destination-text">Add texto</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="destination-item th-ani">
                    <div class="destination-item_img global-img"><img
                            src="assets/img/destination/destination_4_3.jpg" alt="image"></div>
                    <div class="destination-content">
                        <h3 class="box-title"><a href="service-details.html">Qualidade</a></h3>
                        <p class="destination-text">Add texto</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="destination-item th-ani">
                    <div class="destination-item_img global-img"><img
                            src="assets/img/destination/destination_4_4.jpg" alt="image"></div>
                    <div class="destination-content">
                        <h3 class="box-title"><a href="service-details.html">Guia Credênciado</a></h3>
                        <p class="destination-text">Add texto</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="destination-item th-ani">
                    <div class="destination-item_img global-img"><img
                            src="assets/img/destination/destination_4_5.jpg" alt="image"></div>
                    <div class="destination-content">
                        <h3 class="box-title"><a href="service-details.html">Roteiro Personalizado</a></h3>
                        <p class="destination-text">Add texto</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="destination-item th-ani">
                    <div class="destination-item_img global-img"><img
                            src="assets/img/destination/destination_4_6.jpg" alt="image"></div>
                    <div class="destination-content">
                        <h3 class="box-title"><a href="service-details.html">Transfer</a></h3>
                        <p class="destination-text">Add texto</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="destination-item th-ani">
                    <div class="destination-item_img global-img"><img
                            src="assets/img/destination/destination_4_7.jpg" alt="image"></div>
                    <div class="destination-content">
                        <h3 class="box-title"><a href="service-details.html">Dicas</a></h3>
                        <p class="destination-text">Add texto</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="destination-item th-ani">
                    <div class="destination-item_img global-img"><img
                            src="assets/img/destination/destination_4_8.jpg" alt="image"></div>
                    <div class="destination-content">
                        <h3 class="box-title"><a href="service-details.html">Passeio Noturno</a></h3>
                        <p class="destination-text">Add texto</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('footer');