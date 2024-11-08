@include('header')

@include('cores.cores')

@include('loading.loading')

@include('subMenu.subMenu');

@include('menu.menu');

<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Fale Conosco</h1>
            <ul class="breadcumb-menu">
                <li><a href="#">Home</a></li>
                <li>Contato</li>
            </ul>
        </div>
    </div>
</div>

<div class="space">
    <div class="container">
        <div class="title-area text-center"><span class="sub-title">Alguma dúvida?</span>
            <h2 class="sec-title">Entre em contato</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-xl-4 col-lg-6">
                <div class="about-contact-grid style2">
                    <div class="about-contact-icon"><img src="assets/img/icon/location-dot2.svg" alt=""></div>
                    <div class="about-contact-details">
                        <h6 class="box-title">Endereço</h6>
                        <p class="about-contact-details-text" style="font-size: 14px">Av. Frederico Martins - 1080</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="about-contact-grid">
                    <div class="about-contact-icon"><img src="assets/img/icon/call.svg" alt=""></div>
                    <div class="about-contact-details">
                        <h6 class="box-title">WhatsApp</h6>
                        <p class="about-contact-details-text" style="font-size: 14px"><a href="tel:01234567890">(99) 8452-0009</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="about-contact-grid">
                    <div class="about-contact-icon"><img src="assets/img/icon/mail.svg" alt=""></div>
                    <div class="about-contact-details">
                        <h6 class="box-title">Email</h6>
                        <p class="about-contact-details-text" style="font-size: 14px">chapadadasmesasadventure@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div>
        <form action="mail.php" method="POST" class="contact-form style2 ajax-contact">
            <h3 class="sec-title mb-30 text-capitalize">Reserve um pacote</h3>
            <div class="row">
                <div class="col-12 form-group"><input type="text" class="form-control" name="name"
                        id="name3" placeholder="Nome completo"> <img src="assets/img/icon/user.svg" alt="" required>
                </div>
                <div class="col-12 form-group"><input type="text" class="form-control" name="email3"
                    id="email3" placeholder="WhatsApp"> <img src="assets/img/icon/phone.svg" alt="" required>
                </div>
                <div class="col-12 form-group"><input type="email" class="form-control" name="email3"
                        id="email3" placeholder="Email"> <img src="assets/img/icon/mail.svg" alt="" required>
                </div>
                <div class="form-group col-12"><select name="subject" id="subject"
                        class="form-select nice-select">
                        <option value="Select Tour Type" selected="selected" disabled="disabled" required>Escolha seu roteiro</option>
                        <option value="Africa Adventure">Roteiro de 3 dias.</option>
                        <option value="Africa Wild">Roteiro de 4 dias.</option>
                        <option value="Asia">Roteiro de 6 dias.</option>
                    </select></div>
                <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3"
                        class="form-control" placeholder="Informe a sua mensagem"></textarea> <img
                        src="assets/img/icon/chat.svg" alt=""></div>
                <div class="form-btn col-12 mt-24"><button type="submit" class="th-btn style3">Enviar<img src="assets/img/icon/plane.svg" alt=""></button></div>
            </div>
            <p class="form-messages mb-0 mt-3"></p>
        </form>
    </div>
</div>

<div class="">
    <div class="container-fluid">
        <div class="contact-map style2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1394.2264743880683!2d-47.46631125362039!3d-7.3360408240457815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92d82ab5cc4ee9f3%3A0x6078273090d76671!2sInterativa%20Informatica!5e0!3m2!1spt-BR!2sbr!4v1731067404570!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="contact-icon"><img src="assets/img/icon/location-dot3.svg" alt=""></div>
        </div>
    </div>
</div>

@include('footer')