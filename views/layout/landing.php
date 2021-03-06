 
    <!--====== PRELOADER PART START ======-->
    <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->
    <header class="header-area">
      <div class="navbar-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html">
                  <img src="<?=base_url;?>assets/img/loginbar.png" class="logonav" alt="Undertake" />
                </a>
                <style>
                  @media(max-width:600px){
                    .logonav{
                      max-width:3em;
                    }
                  }
                  @media(min-width:601px){
                    .logonav{
                      max-width:6em;
                    }
                  }
                </style>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="toggler-icon"> </span>
                  <span class="toggler-icon"> </span>
                  <span class="toggler-icon"> </span>
                </button>

                <div
                  class="collapse navbar-collapse sub-menu-bar"
                  id="navbarSupportedContent"
                >
                  <ul id="nav" class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="page-scroll active"  href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#beneficios">Beneficios</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll"  href="#sobrenosotros">Sobre Nosotros</a>
                    </li>
                     <li class="nav-item">
                      <a class="page-scroll" href="#inicio">Contacto</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll"  href="#sobrenosotros">Sobre Nosotros</a>
                    </li>
                        <div class=" d-block"  >
                        <a
                    class="main-btn"
                    data-scroll-nav="0"
                    href="<?=base_url?>bar/login"
                    rel="nofollow" style="margin-left:4px !important;margin-top:2px !important;"
                  >
                    Iniciar sesi??n
                  </a>
                </div>
                <div class="ml-2 d-block"  >
                  <a
                    class="main-btn"
                    data-scroll-nav="0"
                    href="<?=base_url?>bar/nuevo"
                    rel="nofollow" style="margin-left:4px !important;margin-top:2px !important;"
                  >
                    Crear cuenta
                  </a>
                </div>
                  </ul>
                </div>
                <!-- navbar collapse -->

        
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->

      <div
        id="home"
        class="header-hero bg_cover"
      >
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="header-hero-content text-center">
                <h3
                  class="header-sub-title wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.2s"
                >
                Llevemos Tu Negocio Gastron??mico
                </h3>
                <h2
                  class="header-title wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.5s"
                >
                A Otro Nivel
                </h2>
                <p
                  class="text wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s"
                >
                Aprovech?? las nuevas tecnolog??as y logr?? un negocio m??s eficiente e inclusivo.
                </p>
                <a
                  href="#contacto"
                  class="main-btn wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="1.1s" 
                  data-toggle="modal" data-target="#conocermas"
                >
                  Conoc?? m??s
                </a>
              </div>


           
              <!-- header hero content -->
            </div>
          </div>
        
          <!-- row -->
        </div>
        <!-- container -->
        <div id="particles-1" class="particles"></div>
      </div>
      <!-- header hero -->
    </header>
    <!--====== HEADER PART ENDS ======-->


    <!--====== SERVICES PART START ======-->
    <section id="features" class="services-area pt-120" style="border-radius: 6px 0px 0px 6px;">
      <div class="container">
        <div class="row">
            <div class="col-12  py-4" >
                <div class="row bg-white text-dark">
                        <div class="col-10 offset-1 mt-2 " style="border: 2px dashed black;padding: 25px;margin-bottom: 2em;" >
                            <div class="row">
                                <div class="col-md-4 col-12" >
                                    <img src="<?=base_url?>assets/img/fede.png" >
                              </div>
                              <div class="col-md-8 col-12 css-typing">
                                  <p  style="margin-top:5%;">Hola. Soy fede, 
                                  </p>
                                  <p  style="margin-top:5%;">trabajo de ??mozo virtual! 
                                  </p>
                                  <p> 
 me encanta interactuar con la 
 </p>
                                  <p> gente, darles la bienvenida y ayudarlos 
     </p>
                                  <p>
                                      a tener la mejor experiencia 
                                      </p>
                                  <p> gastron??mica posible!.
</p>
<style>
    .css-typing p {
  
  
  font-size: 1rem;
  white-space: nowrap;
  overflow: hidden;
}
.css-typing p:nth-child(1) {
  width: 100%;
  -webkit-animation: type 4s steps(90, end);
  animation: type 4s steps(90, end);
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing p:nth-child(2) {
  width: 100%;
  opacity: 0;
  -webkit-animation: type2 4s steps(90, end);
  animation: type2 4s steps(90, end);
  -webkit-animation-delay: 4s;
  animation-delay: 4s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing p:nth-child(3) {
  width: 100%;
  opacity: 0;
  -webkit-animation: type3 10s steps(90, end), blink .5s step-end infinite alternate;
  animation: type3 5s steps(90, end), blink .5s step-end infinite alternate;
  -webkit-animation-delay: 8s;
  animation-delay: 9s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing p:nth-child(4) {
  width: 100%;
  opacity: 0;
  -webkit-animation: type3 12s steps(90, end), blink .5s step-end infinite alternate;
  animation: type3 5s steps(90, end), blink .5s step-end infinite alternate;
  -webkit-animation-delay: 12s;
  animation-delay: 12s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing p:nth-child(5) {
  width: 100%;
  opacity: 0;
  -webkit-animation: type3 14s steps(90, end), blink .5s step-end infinite alternate;
  animation: type3 5s steps(90, end), blink .5s step-end infinite alternate;
  -webkit-animation-delay: 14s;
  animation-delay: 14s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing p:nth-child(5) {
  width: 100%;
  opacity: 0;
  -webkit-animation: type3 17s steps(90, end), blink .5s step-end infinite alternate;
  animation: type3 5s steps(90, end), blink .5s step-end infinite alternate;
  -webkit-animation-delay: 17s;
  animation-delay: 17s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
@keyframes type {
  0% {
    width: 0;
  }
  99.9% {
  }
  100% {
    border: none;
  }
}
@-webkit-keyframes type {
  0% {
    width: 0;
  }
  99.9% {
  }
  100% {
    border: none;
  }
}
@keyframes type2 {
  0% {
    width: 0;
  }
  1% {
    opacity: 1;
  }
  99.9% {
  }
  100% {
    opacity: 1;
    border: none;
  }
}
@-webkit-keyframes type2 {
  0% {
    width: 0;
  }
  1% {
    opacity: 1;
  }
  99.9% {
  }
  100% {
    opacity: 1;
    border: none;
  }
}
@keyframes type3 {
  0% {
    width: 0;
  }
  1% {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}
@-webkit-keyframes type3 {
  0% {
    width: 0;
  }
  1% {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}
@keyframes blink {
  50% {
    border-color: transparent;
  }
}
@-webkit-keyframes blink {
  50% {
    border-color: transparent;
  }
}

</style>

                              </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-5 py-4" style="background: linear-gradient(257.36deg, #6159E6 24.95%, #544FA7 69.27%);">
            <h3   class="header-sub-title wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.2s" style="font-family: 'Inter';font-style: normal;font-weight: 700;font-size: 33px;color: #FFFFFF;">Sin gastos de instalaci??n</h3>
            <p    class="header-sub-title wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.2s"style="font-family: 'Inter';font-style: normal;font-weight: 500;font-size: 13px;color: #EAEAEA;margin-top:3px;">para el negocio gastron??mico </p>
          </div>
          <div class="col-md-7 col-12 py-4" style="background: linear-gradient(101.33deg, #3164E1 31.55%, #4F86EB 77.54%);">
          <h3    class="header-sub-title wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.2s" style="text-align:end;font-family: 'Inter';font-style: normal;font-weight: 700;font-size: 33px;color: #FFFFFF;">Sin la necesidad de <br> descargar apps</h3>
            <a   class="header-sub-title wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.2s" style="float:right;font-family: 'Inter';font-style: normal;font-weight: 500;font-size: 13px;color: #EAEAEA;margin-top:10px;" href="#sinnecesidaddedescarga">M??s informaci??n </a>
         
          </div>
        </div>
        <div class="row">
            <div class="col-12  py-4" >
                <div class="row bg-white text-dark  wow fadeInUp"
                  data-wow-duration="1.3s">
                        <div class="col-10 offset-1 mt-2 " style="border: 2px dashed black;padding: 25px;margin-bottom: 2em;" >
                            <div class="row">
                                <div class="col-md-4 col-12" >
                                    <img src="<?=base_url?>assets/img/fede.png" >
                              </div>
                              <div class="col-md-8 col-12 css-typing1 " >
                                  <p  >Si trabajamos juntos, voy a </p>
                                  <p> ayudarte a ganar tiempo</p>
                                  <p> y eficiencia. Me gusta trabajar </p>
                                  <p>en conjunto con las personas </p>
                                  <p>f??sicas y hacerle m??s f??cil</p>
                                  <p>y menos estresante </p>
                                  <p> su trabajo diario.</p>
<style>
    .css-typing1 p {
  
  
  font-size: 1rem;
  white-space: nowrap;
  overflow: hidden;
}
.css-typing1 p:nth-child(1) {
  width: 100%;
  -webkit-animation: type 4s steps(90, end);
  animation: type 4s steps(90, end);
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing1 p:nth-child(2) {
  width: 100%;
  opacity: 0;
  -webkit-animation: type2 4s steps(90, end);
  animation: type2 4s steps(90, end);
  -webkit-animation-delay: 2s;
  animation-delay: 2s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing1 p:nth-child(3) {
  width: 100%;
  opacity: 0;
  -webkit-animation: type3 4s steps(90, end), blink .5s step-end infinite alternate;
  animation: type3 4s steps(90, end), blink .5s step-end infinite alternate;
  -webkit-animation-delay: 4s;
  animation-delay: 4s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing1 p:nth-child(4) {
  width: 100%;
  opacity: 0;
  -webkit-animation: type3 4s steps(90, end), blink .5s step-end infinite alternate;
  animation: type3 4s steps(90, end), blink .5s step-end infinite alternate;
  -webkit-animation-delay: 6s;
  animation-delay: 6s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing1 p:nth-child(5) {
  width: 100%;
  opacity: 0;
  -webkit-animation: type3 4s steps(90, end), blink .5s step-end infinite alternate;
  animation: type3 4s steps(90, end), blink .5s step-end infinite alternate;
  -webkit-animation-delay: 8s;
  animation-delay: 8s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing1 p:nth-child(6) {
  width: 100%;
  opacity: 0;
  -webkit-animation: type3 4s steps(90, end), blink .5s step-end infinite alternate;
  animation: type3 4s steps(90, end), blink .5s step-end infinite alternate;
  -webkit-animation-delay: 10s;
  animation-delay: 10s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing1 p:nth-child(7) {
  width: 100%;
  opacity: 0;
  -webkit-animation: type3 4s steps(90, end), blink .5s step-end infinite alternate;
  animation: type3 4s steps(90, end), blink .5s step-end infinite alternate;
  -webkit-animation-delay: 11s;
  animation-delay: 11s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
@keyframes type {
  0% {
    width: 0;
  }
  99.9% {
  }
  100% {
    border: none;
  }
}
@-webkit-keyframes type {
  0% {
    width: 0;
  }
  99.9% {
  }
  100% {
    border: none;
  }
}
@keyframes type2 {
  0% {
    width: 0;
  }
  1% {
    opacity: 1;
  }
  99.9% {
  }
  100% {
    opacity: 1;
    border: none;
  }
}
@-webkit-keyframes type2 {
  0% {
    width: 0;
  }
  1% {
    opacity: 1;
  }
  99.9% {
  }
  100% {
    opacity: 1;
    border: none;
  }
}
@keyframes type3 {
  0% {
    width: 0;
  }
  1% {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}
@-webkit-keyframes type3 {
  0% {
    width: 0;
  }
  1% {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}
@keyframes blink {
  50% {
    border-color: transparent;
  }
}
@-webkit-keyframes blink {
  50% {
    border-color: transparent;
  }
}

</style>

                              </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-2">
          <div class="col-lg-10">
            <div class="section-title text-center pb-40">
              <div class="line m-auto"></div>
              <h2 class="title text-white">
                <span> ??En qu?? cambiar??a tu negocio si trabajamos juntos?</span>
              </h2>
            </div>
            <!-- section title -->
          </div>
        </div>
        
        <div class="row">
            <div class="col-12  py-4" >
                <div class="row bg-white text-dark  wow fadeInUp"
                  data-wow-duration="1.3s">
                        <div class="col-10 offset-1 mt-2 " style="border: 2px dashed black;padding: 25px;margin-bottom: 2em;" >
                            <div class="row">
                                <div class="col-md-4 col-12" >
                                    <img src="<?=base_url?>assets/img/fede.png" >
                              </div>
                              <div class="col-md-8 col-12 css-typing2 " >
                               

                                  <p  >Tambi??n me van las matem??ticas. </p>
                                  <p>Por este motivo, con gusto te har??</p>
                                  <p>los balances de todo lo que vendiste. </p>
                                  <p>Adem??s, si me pones al tanto </p>
                                  <p>de tus egresos,te entregar?? un </p>
                                  <p>informe final de la salud </p>
                                  <p> financiera de tu negocio..</p>
<style>
    .css-typing2 p {
  
  
  font-size: 1rem;
  white-space: nowrap;
  overflow: hidden;
}
.css-typing2 p:nth-child(1) {
  width: 100%;
  -webkit-animation: type 4s steps(90, end);
  animation: type 4s steps(90, end);
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing2 p:nth-child(2) {
  width: 100%;
  opacity: 0;
  -webkit-animation: type2 4s steps(90, end);
  animation: type2 4s steps(90, end);
  -webkit-animation-delay: 2s;
  animation-delay: 2s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing2 p:nth-child(3) {
  width: 100%;
  opacity: 0;
  -webkit-animation: type3 4s steps(90, end), blink .5s step-end infinite alternate;
  animation: type3 4s steps(90, end), blink .5s step-end infinite alternate;
  -webkit-animation-delay: 4s;
  animation-delay: 4s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing2 p:nth-child(4) {
  width: 100%;
  opacity: 0;
  -webkit-animation: type3 4s steps(90, end), blink .5s step-end infinite alternate;
  animation: type3 4s steps(90, end), blink .5s step-end infinite alternate;
  -webkit-animation-delay: 6s;
  animation-delay: 6s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing2 p:nth-child(5) {
  width: 100%;
  opacity: 0;
  -webkit-animation: type3 4s steps(90, end), blink .5s step-end infinite alternate;
  animation: type3 4s steps(90, end), blink .5s step-end infinite alternate;
  -webkit-animation-delay: 8s;
  animation-delay: 8s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing2 p:nth-child(6) {
  width: 100%;
  opacity: 0;
  -webkit-animation: type3 4s steps(90, end), blink .5s step-end infinite alternate;
  animation: type3 4s steps(90, end), blink .5s step-end infinite alternate;
  -webkit-animation-delay: 10s;
  animation-delay: 10s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
.css-typing2 p:nth-child(7) {
  width: 100%;
  opacity: 0;
  -webkit-animation: type3 4s steps(90, end), blink .5s step-end infinite alternate;
  animation: type3 4s steps(90, end), blink .5s step-end infinite alternate;
  -webkit-animation-delay: 11s;
  animation-delay: 11s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
@keyframes type {
  0% {
    width: 0;
  }
  99.9% {
  }
  100% {
    border: none;
  }
}
@-webkit-keyframes type {
  0% {
    width: 0;
  }
  99.9% {
  }
  100% {
    border: none;
  }
}
@keyframes type2 {
  0% {
    width: 0;
  }
  1% {
    opacity: 1;
  }
  99.9% {
  }
  100% {
    opacity: 1;
    border: none;
  }
}
@-webkit-keyframes type2 {
  0% {
    width: 0;
  }
  1% {
    opacity: 1;
  }
  99.9% {
  }
  100% {
    opacity: 1;
    border: none;
  }
}
@keyframes type3 {
  0% {
    width: 0;
  }
  1% {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}
@-webkit-keyframes type3 {
  0% {
    width: 0;
  }
  1% {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}
@keyframes blink {
  50% {
    border-color: transparent;
  }
}
@-webkit-keyframes blink {
  50% {
    border-color: transparent;
  }
}

</style>

                              </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mt-2 mt-2">
                 <a
                    class="main-btn"
                    data-scroll-nav="0"
                    href="<?=base_url?>bar/nuevo"
                    rel="nofollow"
                  >
                    Contratar a Fede
                  </a>
            </div>
        </div>
        <div class="container-fluid   mt-4 " style="border-radius: 7px;padding:2em;background: #16184B !important;" id="inicio" >
        <div class="row my-3 ">
          <div  class="col-12 ">
        <h6 style="font-family: 'Inter';font-style: normal;font-weight: 500;font-size: 24px;align-items: center;
color: white;"  class="text wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s"
                >  Podes contactarte por WhatsApp.</h6>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <a  
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s"
                href="https://wa.link" target="_blank"  class="btn btn-success wow fadeInUp">Enviar Whatsapp</a>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12">
            <p  class="text wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s"
                style="font-family: 'Inter';font-style: normal;font-weight: 500;font-size: 24px;align-items: center;
color: white;">?? podes completar este formulario para que nos pongamos en contacto:</p> 
          </div>
        </div>
     
        <div class="row  mt-4" id="contacto">
          <form class="col-11 form-group" method="POST" action="<?=base_url?>usuario/contacto">
              <div class="row mt-2">
                <div class="col-11 col-md-6">
                  <label  class="text wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s"
                 style="font-family: 'Inter';font-style: normal;font-weight: 500;font-size: 14px;color: white;" >Nombre completo</label>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-11 col-md-6">
                  <input  
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s"
                 required name="nombre" type="text" class="form-control wow fadeInUp">
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-11 col-md-6">
                  <label  class="text wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s"
                 style="font-family: 'Inter';font-style: normal;font-weight: 500;font-size: 14px;color: white;">N??mero de tel??fono</label>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-11 col-md-6">
                  <input  
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s"
                 required type="text"  name="telefono" class="form-control wow fadeInUp">
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-11 col-md-6">
                  <label class="text wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s"
                 style="font-family: 'Inter';font-style: normal;font-weight: 500;font-size: 14px;color: white;">Localidad(Ciudad,provincia y pa??s)</label>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-11 col-md-6">
                  <input 
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s"
                 required type="text" name="localidad" class="form-control wow fadeInUp">
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-4 col-sm-2 ">
                  <input 
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s"
                 type="submit"  style="background: #0957CB;border-color:#0957CB;margin-bottom:1em;margin-top:1em; border-radius: 10px;" class="btn btn-secondary w-100 wow fadeInUp" value="Listo">
                </div>
              </div> 
              <?php if(isset($mensajecontacto)):?>
                <div class="row mt-2">
                <div class="col-12">
                  <h4 class="text-dark p-2"><?=$mensajecontacto;?></h4>
                </div>
              </div> 
              <?php endif;?>         
          </form>
        </div>
  </div>
  

  <div class="container-fluid bg-white mt-4 " id="ganatiempo" style="border-radius: 7px;padding:2em;" >
        <div class="row my-3">
          <div class="col-12 col-md-7">
          <div class="row mt-3">
           <div class="col-12 ">
          <h6 style="font-family: 'Inter';font-style: normal;font-weight: 700;font-size: 31px;
color: #2D4245;" class=" wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s" >Gan?? tiempo y mayor <br> rotaci??n de clientes.</h6>
          </div>
          </div>
          <div class="row mt-2">
           <div class="col-12 ">
          <p class=" wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s" style="font-family: 'Inter';font-style: normal;font-weight: 500;font-size: 17px;color: #3E5257;">Tus clientes podr??n escanearan un c??digo QR que se encontrar?? en la mesa. Una vez hecho esto, Fede, nuestro mozo virtual lo recibir?? y le entregar?? la carta digital de tu negocio. Con ella podr??n realizar el pedido que quieran desde el minuto uno, sin necesidad de esperar a que los atiendan. Adem??s de esto, podr??n realizar otras acciones desde sus celulares como pedir la cuenta y llamar al servicio, ??todas ellas sin esperar! Todo lo que tus consumidores hagan, lo podr??s ver en tu panel de administraci??n de tu bar virtual.</p>
          </div>
          </div>
        </div>
          <div class="col-12 col-md-5" style="background: linear-gradient(148.4deg, #30C4C2 19.04%, #17A3CF 85.77%);">
            <div class="row mt-5">
                <div class="col-4 offset-4">
                  <img class=" wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s" src="<?=base_url?>assets/img/reloj.svg" alt="">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-7 col-md-3 offset-3 ">
                    <h6 class="text-dark bg-white" style="border-radius: 7px;padding:5px;">Hola, yo soy Fede!</h6>
              </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12 offset-md-3">
                  <img src="<?=base_url?>assets/img/fede.png" alt="">
                </div>
            </div>
          </div>
        </div>
      
                  
      </div>


      <div class="container-fluid bg-white mt-2" id="teneelcontrol" style="border-radius: 7px;padding:2em;" >
        <div class="row ">
          <div class="col-12 col-md-7 ">
          <div class="row ">
           <div class="col-12 ">
          <h6 style="font-family: 'Inter';font-style: normal;font-weight: 700;font-size: 31px;
color: #2D4245;" class=" wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s">Ten?? el control</h6>
          </div>
          </div>
          <div class="row">
           <div class="col-12 mt-2 ">
          <p class=" wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s" style="font-family: 'Inter';font-style: normal;font-weight: 500;font-size: 17px;color: #3E5257;">Podr??s ver todas las ventas diarias, semanales, mensuales y anuales de tu negocio en un documento descargable; tambi??n ver??s cuanto vendiste, cu??les fueron tus productos m??s pedidos y asimismo los que menos, toda la informaci??n es recopilada autom??ticamente por nuestro sistema una vez que fueron abonados por tus clientes. Estas estad??sticas te permitir??n tomar mejores decisiones basadas en datos reales.
Otra funcionalidad es la de "Caja", donde cargar??s tus gastos manualmente (como por ejemplo: Sueldos, materia prima, impuestos, alquiler, entre otros) y el sistema te entregar?? un balance de la econom??a de tu negocio. De este modo ver??s tu ganancia -antes de impuestos- y mantendr??s un registro la salud financiera de tu negocio.
Por ??ltimo, y no menos importante, teniendo el control exacto de tus ventas podr??s verificar, controlar y disminuir las consumiciones que no fueron abonadas.</p>
          </div>
          </div>
        </div>
          <div class="col-12 col-md-5" style="background: linear-gradient(148.4deg, #7663AA 19.04%, #7729A8 85.77%);">
            <div class="row">
                <div class="col-4 offset-4">
                  <img  style="margin-top:50%;" src="<?=base_url?>assets/img/control.svg" alt="">
                </div>
            </div>
           
          </div>
        </div>
      
                  
      </div>
      <div class="container-fluid bg-white mt-4 " id="ahorrarecursos" style="border-radius: 7px;padding:2em;" >
        <div class="row ">
          <div class="col-12 col-md-7">
          <div class="row ">
           <div class="col-12 ">
          <h6 style="font-family: 'Inter';font-style: normal;font-weight: 700;font-size: 31px;
color: #2D4245;" class=" wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s">Ahorr?? recursos</h6>
          </div>
          </div>
          <div class="row">
           <div class="col-12 mt-2 ">
          <p class=" wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s" style="font-family: 'Inter';font-style: normal;font-weight: 500;font-size: 17px;color: #3E5257;"> En los establecimientos gastron??micos son recurrentes los malos entendidos entre el mozo y el comensal cuando el mismo ordena su comida. Para solucionar esto, ??Qu?? mejor que pidan directamente tus clientes a la cocina/barra? Desde una aplicaci??n web intuitiva y simple, crear??n su pedido seleccionando los platos y/o bebidas que deseen, y el personal ser?? solo necesario para actividades con menor margen de error (como servir el plato/bebida o llevar la cuenta a la mesa). En caso de que desees continuar atendi??ndose forma tradicional, el mismo podr??a atender a las mesas y realizar el pedido de forma digital y comunicar las comandas desde cada mesa, ganando as?? tiempo. Ahorr?? tiempo y dinero en la impresi??n de men??s que deben ser actualizados constantemente, digitaliz?? tu men?? con nosotros y despreocupate. Convertimos tu negocio en uno m??s amigable con el ambiente, reduciendo el residuo de las cartas desactualizadas.</p>
          </div>
          </div>
        </div>
          <div class="col-12 col-md-5" style="background: linear-gradient(148.4deg, #FE816C 19.04%, #FE738C 85.77%);">
            <div class="row">
                <div class="col-4 offset-4">
                  <img class=" wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s"  style="margin-top:50%;" src="<?=base_url?>assets/img/ahorrarecursos.svg" alt="">
                </div>
            </div>
           
          </div>
        </div>
      
                  
      </div>
      <div class="container-fluid bg-white mt-4 " id="mejoralaexperiencia" style="border-radius: 7px;padding:2em;" >
        <div class="row ">
          <div class="col-12 col-md-7 ">
          <div class="row ">
           <div class="col-12 ">
          <h6 style="font-family: 'Inter';font-style: normal;font-weight: 700;font-size: 31px;
color: #2D4245;" class=" wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s">Mejor?? la experiencia <br> de tus clientes</h6>
          </div>
          </div>
          <div class="row">
           <div class="col-12 mt-2 ">
          <p class=" wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s" style="font-family: 'Inter';font-style: normal;font-weight: 500;font-size: 17px;color: #3E5257;">Desde este sistema buscamos mejorar la experiencia de todos los clientes posibles. De ahora en m??s, las personas no hispanoparlantes podr??n adaptar los men??s (la carta) a sus idiomas, sea cual sea, ya que est??n disponibles en 109 lenguas. Argentina recibe m??s de 7.000.000 de turistas extranjeros al a??o, hac?? que se sientan como en su casa a la hora de pedir. Por otro lado, Argentina tiene 524.000 personas con alguna discapacidad en la escucha o habla, las cuales suelen tener dificultades para pedir. Con este sistema estar??s convirtiendo a tu negocio gastron??mico en uno m??s inclusivo, permiti??ndole a todos ellos pedir desde su tel??fono celular sin problemas. Darle la oportunidad a todo tipo de cliente que concurra a tu negocio de que pidan lo que necesiten desde el minuto uno, sin necesidad de esperar al servicio, brinda agilidad y dinamismo. Marquemos la diferencia juntos.</p>
          </div>
          </div>
        </div>
          <div class="col-12 col-md-5" style="background: linear-gradient(148.4deg, #3437CD 19.04%, #2F75E9 85.77%);">
            <div class="row">
                <div class="col-4 offset-4">
                  <img class=" wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s"  style="margin-top:50%;" src="<?=base_url?>assets/img/control.svg" alt="">
                </div>
            </div>
           
          </div>
        </div>
      
                  
      </div>

      <div class="container-fluid bg-white mt-4 " id="sinnecesidaddedescarga" style="border-radius: 7px;padding:2em;" >
        <div class="row ">
          <div class="col-12 ">
          <div class="row ">
           <div class="col-12 ">
          <h6 style="font-family: 'Inter';font-style: normal;font-weight: 700;font-size: 31px;
color: #1F2425;" class=" wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s" >Sin necesidad de descargar  nada para utilizarlo.</h6>
          </div>
          </div>
          <div class="row mt-1 ">
           <div class="col-12">
          <h6 style="font-family: 'Inter';font-style: normal;font-weight: 500;font-size: 21px;
color: #2D4245;" class=" wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s" >Esto aplica tanto para el negocio  gastron??mico como para sus clientes.</h6>
          </div>
          </div>
          <div class="row">
           <div class="col-12 mt-2 ">
          <p class=" wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s" style="font-family: 'Inter';font-style: normal;font-weight: 500;font-size: 17px;color: #4B5152;">Esta ventaja la logramos dado que todo nuestro sistema est?? alojado en la web (online). En los celulares y smartphones actuales, la memoria suele ser muy limitada; por este motivo, decidimos que nuestro sistema ser?? en formato web-app, esto quiere decir que ni el negocio ni sus clientes necesitar??n descargarse ning??n tipo de aplicaci??n o archivo para utilizar Undertake.</p>
          </div>
          </div>
        </div>
          
           
        </div>
      
                  
      </div>
    </div>
  </div>



        <!-- row -->
      </div>
      <!-- container -->
    </section>
    <!--====== SERVICES PART ENDS ======-->

    <section class=" mt-5" id="about">
      <!--====== ABOUT PART START ======-->
      <div class="about-area pt-70 mt-3">
        <div class="container">
             <div class="row">
            <div class="col-12 ">
                <h3 class=" text-white" >
COMO FUNCIONA EL SISTEMA EN 4 PASOS?
                  </h3>
            </div>
        </div>
          <div class="row">
            <div class="col-lg-6">
              <div
                class="about-content mt-50 wow fadeInLeftBig"
                data-wow-duration="1s"
                data-wow-delay="0.5s"
              >
                <div class="section-title wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s">
                  <div class="line"></div>
                  <h3 class=" text-white" >
                    Atenci??n instant??nea <span>para tus clientes</span>
                  </h3>
                </div>
                <!-- section title -->
                <p class="text text-white">
               Tus clientes podr??n escanear el QR en cada mesa y ser??n recibidos por Fede, nuestro mozo virtual. ??l les dar?? la bienvenida y les entregar?? tu men??.
                </p>
              </div>
              <!-- about content -->
            </div>
            <div class="col-lg-6">
              <div
                class="about-image text-center mt-50 wow fadeInRightBig"
                data-wow-duration="1s"
                data-wow-delay="0.5s"
              >
                <img src="<?=base_url;?>assets/img/mesaqr.png" alt="about" />
              </div>
              <!-- about image -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
        <div class="about-shape-1">
          <img src="<?=base_url;?>assets/about/about-shape-1.svg" alt="shape" />
        </div>
      </div>
      <!--====== ABOUT PART ENDS ======-->

      <!--====== ABOUT PART START ======-->
      <div class="about-area pt-70">
        <div class="about-shape-2">
          <img src="<?=base_url;?>assets/about/about-shape-2.svg" alt="shape" />
        </div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 order-lg-last">
              <div
                class="about-content ms-lg-auto mt-50 wow fadeInLeftBig"
                data-wow-duration="1s"
                data-wow-delay="0.5s"
              >
                <div class="section-title">
                  <div class="line"></div>
                  <h3 class="title text-white">
                    Un mundo de comodidades <span> para tus consumidores</span>
                  </h3>
                </div>
                <!-- section title -->
                <p class="text text-white">
              Luego de que Fede les entregue el men?? a tus clientes, podr??n realizar las siguientes acciones desde sus celulares: seleccionar todo lo que deseen consumir, cambiarle el idioma al men?? (m??s de 100 idiomas disponibles), llamar a un mozo f??sico por alguna consulta y pedir la cuenta.</p>
              </div>
              <!-- about content -->
            </div>
            <div class="col-lg-6 order-lg-first">
              <div
                class="about-image text-center mt-50 wow fadeInRightBig" style="border: 3px black outset;
    padding: 8px;"
                data-wow-duration="1s"
                data-wow-delay="0.5s"
              >
                <img class="w-100" src="<?=base_url;?>assets/img/menucarta.png" alt="about" />
              </div>
              <!-- about image -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!--====== ABOUT PART ENDS ======-->

      <!--====== ABOUT PART START ======-->
      <div class="about-area pt-70">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div
                class="about-content mt-50 wow fadeInLeftBig"
                data-wow-duration="1s"
                data-wow-delay="0.5s"
              >
                <div class="section-title">
                  <div class="line"></div>
                  <h3 class="title text-white">
                    Ent??rate de todo al instante

                  </h3>
                </div>
                <!-- section title -->
                <p class="text text-white">
             TU BAR VIRTUAL: luego de crear tu bar virtual con nosotros, Fede te avisar?? en tiempo real cu??l es la necesidad de cada cliente, cu??l es su pedido, si necesitan la cuenta o solicitan servicio fisico. Todo esto lo podr??s ver en tu bar virtual para satisfacer al instante la necesidad de cada cliente
                </p>
              </div>
              <!-- about content -->
            </div>
            <div class="col-lg-6">
              <div
                class="about-image text-center mt-50 wow fadeInRightBig" style="border: 3px black outset;
    padding: 8px;"
                data-wow-duration="1s"
                data-wow-delay="0.5s"
              >
                <img src="<?=base_url;?>assets/img/panel.png" alt="about" />
              </div>
              <!-- about image -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
        <div class="about-shape-1">
          <img src="<?=base_url;?>assets/about/about-shape-1.svg" alt="shape" />
        </div>
      </div>
      <div class="about-area pt-70">
        <div class="container">
          <div class="row">
            
            <div class="col-lg-6">
              <div
                class="about-image text-center mt-50 wow fadeInRightBig" style="border: 3px black outset;
    padding: 8px;"
                data-wow-duration="1s"
                data-wow-delay="0.5s"
              >
                <img src="<?=base_url;?>assets/img/panel.png" alt="about" />
              </div>
              <!-- about image -->
            </div>
            <div class="col-lg-6">
              <div
                class="about-content mt-50 wow fadeInLeftBig"
                data-wow-duration="1s"
                data-wow-delay="0.5s"
              >
                <div class="section-title">
                  <div class="line"></div>
                  <h3 class="title text-white">
Ten?? el control

                  </h3>
                </div>
                <!-- section title -->
                <p class="text text-white">
            Fede te har?? un informe de todas tus ventas diarias, semanales, mensuales y anuales para que tengas el control de todo lo vendido. Adem??s, te avisar?? cu??les fueron tus productos m??s consumidos y los menos solicitados. Podr??s tambi??n incluir tus egresos (pago de impuestos, empleados, proveedores, etc.) y con esto, Fede te har?? un balance final de tu ganancia antes de los impuestos. <br><br> 
??Esto es solo un ejemplo de todo lo que Fede puede hacer por tu negocio! Bienvenido/a al futuro.
   </p>
              </div>
              <!-- about content -->
            </div>
          </div>
               <div class="row mt-2">
            <div class="col-4 offset-4 text-center ">
               <a href="#inicio" class="main-btn">Quiero saber mas</a>
            </div>
        </div>
          <!-- row -->
        </div>
        <!-- container -->
        <div class="about-shape-1">
          <img src="<?=base_url;?>assets/about/about-shape-1.svg" alt="shape" />
        </div>
      </div>
      <!--====== ABOUT PART ENDS ======-->
    </section>

   
    <!--====== FOOTER PART START ======-->
    <footer id="footer" class="footer-area pt-120">
      <div class="container">
        
        <!-- subscribe area -->
        <div class="footer-widget pb-100">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8">
              <div
                class="footer-about mt-50 wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.2s"
              >
                <a class="logo" href="javascript:void(0)">
                  <img src="<?=base_url;?>assets/img/Undertake.png" alt="logo" />
                </a>
                <p class="text">
                  Somos undertake, una empresa de desarrollo de software de La Plata, cuyo objetivo es crear tecnolog??a para hacer m??s inclusivo y eficiente los negocios gastron??micos.
                </p>
                <ul class="social">
               
                  <li>
                    <a href="https://www.instagram.com/undertakeoficial/" target="_blank">
                      <i class="lni lni-instagram-filled"> </i>
                    </a>
                  </li>
                 
                </ul>
              </div>
              <!-- footer about -->
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12">
              <div class="footer-link d-flex mt-50 justify-content-sm-between">
                <div
                  class="link-wrapper wow fadeIn"
                  data-wow-duration="1s"
                  data-wow-delay="0.4s"
                >
                  <div class="footer-title">
                    <h4 class="title">Contacto</h4>
                  </div>
                  <ul class="link">
                    <li><a href="https:undertake@gmail.com">undertake@gmail.com</a></li>
                    <li>    <a  data-wow-duration="1.3s"  data-wow-delay="0.8s" href="https://wa.link" target="_blank"  class="btn btn-success wow fadeInUp">Enviar Whatsapp</a></li>
                    <li><a href="https://www.instagram.com/undertakeoficial/" >Instagram</a></li>
                    <li><a href="javascript:void(0)">La plata (direccion)</a></li>
                  </ul>
                </div>
                <!-- footer wrapper -->
                <div
                  class="link-wrapper wow fadeIn"
                  data-wow-duration="1s"
                  data-wow-delay="0.6s"
                >
                  <div class="footer-title">
                    <h4 class="title">Menu</h4>
                  </div>
                  <ul class="link">
                  <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#beneficios">Beneficios</a></li>
                    <li><a href="#sobrenosotros">Sobre nosotros</a></li>
                    <li><a href="<?=base_url?>bar/login">Iniciar sesion</a></li>
                    <li><a href="<?=base_url?>bar/nuevo" >Crear cuenta</a></li>
                  </ul>
                </div>
                <!-- footer wrapper -->
              </div>
              <!-- footer link -->
            </div>
          
          </div>
          <!-- row -->
        </div>
        <!-- footer widget -->
        <div class="footer-copyright">
          <div class="row">
            <div class="col-lg-12">
              <div class="copyright d-sm-flex justify-content-between">
                <div class="copyright-content">
                  <p class="text">
                    Desarrollado por 
                    <a href="https://www.instagram.com/undertakeoficial/"  rel="nofollow">Undertake</a>
                  </p>
                </div>
                <!-- copyright content -->
              </div>
              <!-- copyright -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- footer copyright -->
      </div>
      <!-- container -->
      <div id="particles-2"></div>
    </footer>
    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->
    <a href="#" class="back-to-top"> <i class="lni lni-chevron-up"> </i> </a>
    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== Javascript Files ======-->
    <script src="<?=base_url;?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url;?>assets/js/wow.min.js"></script>
    <script src="<?=base_url;?>assets/js/glightbox.min.js"></script>
    <script src="<?=base_url;?>assets/js/count-up.min.js"></script>
    <script src="<?=base_url;?>assets/js/particles.min.js"></script>
    <script src="<?=base_url;?>assets/js/main.js"></script>
  
<div id="scrollwsp" class="w-25"> <a href="https://wa.link/g45cf4" target="blank" class="text-center"><img width="100"  class=" mb-md-2  mb-2" style="float:right;" src="<?=base_url?>assets/img/whatsapp.png"></a></div>
<style>
	@media (max-width: 300px) {
  #scrollwsp {
	  padding: 1.5em;opacity:0.8;position: fixed;
right: -6%;
border-radius: 100%;
z-index: 2;
top: 80%;
width: 110px !important;
  }
}

@media (min-width: 600px) {
  #scrollwsp {padding: 1.5em;opacity:0.8; position: fixed;right: 1.5%;border-radius: 100%;z-index:2;
   top: 75%;
width: 200px !important;
  }
}
	@media (max-width:600px) and (min-width:300px) {
  #scrollwsp {
	    padding: 1.5em;
    opacity: 0.8;
    position: fixed;
    right: 1.5%;
    border-radius: 100%;
    z-index: 2;
    top: 80%;
    width: 120px !important;
  }
}
</style>

  <script>
    $(".page-header ul a").on("click", function (e) {
    e.preventDefault();
    const href = $(this).attr("href");
    $("html, body").animate({ scrollTop: $(href).offset().top }, 300);
  });
  </script>