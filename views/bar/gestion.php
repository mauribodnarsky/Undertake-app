<nav class="navbar navbar-light  fixed-top mt-1" style="color: #1A0556;background:#16184B !important;">
  <div class="container-fluid ">
    <div class="row">
      <div class="col-4">
      <img src="<?=base_url?>/assets/img/Undertake.png" class="w-25" alt="">
      </div>
    <div class="col-8 d-flex justify-content-end">
      <button class="navbar-toggler" style="background:whitesmoke;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
      </button>
      </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header" style="background: #1A0556 !important;color: white !important;">
        <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Administrador de <?= 	$_SESSION['identity']->bar ;?></h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body" style="background: #109CF1;color:white;">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?=base_url;?>bar/tablero">Panel de administración</a>
          </li>
          <li class="nav-item">
            <a style="cursor:pointer;" class="nav-link" href="<?=base_url;?>bar/editarcarta">Editar menú(la carta)</a>
          </li>
          <li class="nav-item">
            <a style="cursor:pointer;" class="nav-link" href="<?=base_url;?>bar/configurarmesas">Configurar mesas y mozos </a>
          </li>
          <li class="nav-item">
            <a style="cursor:pointer;" class="nav-link" href="<?=base_url;?>bar/ventas">Ventas</a>
          </li>
          <li class="nav-item">
            <a style="cursor:pointer;" class="nav-link" href="<?=base_url;?>bar/caja">Caja</a>
          </li>
          <li class="nav-item">
            <a style="cursor:pointer;" class="nav-link" href="<?=base_url;?>bar/valoraciones">Reseñas</a>
          </li>
          <li class="nav-item">
            <a style="cursor:pointer;" class="nav-link" data-toggle="modal" data-target="#impresora">Impresora</a>
          </li>
          <li class="nav-item">
            <a style="cursor:pointer;" class="nav-link" href="<?=base_url;?>bar/ayuda">Ayuda y soporte</a>
          </li>
          <li class="nav-item">
          <img  data-toggle="modal" data-target="#traducir" src="<?=base_url?>assets/img/traductor.png" alt="traducir">
          </li>
          <li class="nav-item">
          <img src="<?= $_SESSION['identity']->qr ;?>" class="w-25 text-center"  >

            <a href="<?= $_SESSION['identity']->qr ;?>" download="<?= $_SESSION['identity']->bar ;?>" target="_blank" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg> DESCARGAR MI QR</a>
          </li>
</form>
          <li class="nav-item">
            <a style="cursor:pointer;" class="nav-link" href="<?= base_url."bar/logout";?>">Cerrar sesión</a>
          </li>


          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
-->
        </ul>
       
      </div>
    </div>
  </div>
</nav>

<!-- Modal  traductor-->
<div class="modal fade" id="traducir" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="descripcionLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Traductor</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div id="google_translate_element"></div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

     <!--
         
     
     traducir script
    
    
    
    -->
     <script type="text/javascript">
    
         function traducir(){
             document.getElementById("google_translate_element").click()
         }
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'es'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">

</script>



<style>
  body{
    background:white !important;
  }
</style>