<nav class="navbar navbar-light  fixed-top mt-1" style="color: #1A0556;background:#16184B !important;">
  <div class="container-fluid ">
    <div class="row">
      <div class="col-3 col-sm-4">
      <img src="<?=base_url?>/assets/img/Undertake.png" class="w-100" alt="">
      </div>
    <div class="col-9 col-sm-8  d-flex justify-content-end">
      <button class="navbar-toggler" style="background:whitesmoke;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
      </button>
      </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header d-flex justify-content-end" style="background: white !important;color: white !important;">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body" style="background: #16184B;color:white;">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
         
<li class=" nav-link btn btn-light  d-flex align-items-center justify-content-center" style="border: 1px solid;margin-left: 5px;margin-top:5px;border-radius: 37px;">
    <img  data-toggle="modal" data-target="#traducir" src="<?=base_url?>assets/img/traductor.png" alt="traducir">
    <a  data-toggle="modal" data-target="#traducir" style="text-decoration: none;font-weight: 600;color:black;font-size:1em;" >Change languaje</a>

     </li>

     <!--
         
     
     traducir script
    
    
    
    -->
  
   <!--
         
     
     traducir script
    
    
    
    -->
  
    <li class=" nav-link btn btn-light  d-flex align-items-center justify-content-center" style="border: 1px solid;margin-left: 5px;margin-top:5px;border-radius: 37px;">
    <h4 style="font-weight: 600;color:black;font-size:1.5em;" data-toggle="modal" data-target="#pedirmozo">Llamar <br> mozo</h4>
    </li>
    <li class=" nav-link btn btn-light  d-flex align-items-center justify-content-center" style="border: 1px solid;margin-left: 5px;margin-top:5px;border-radius: 37px;">
    <h4 style="font-weight: 600;color:black;font-size:1.5em;"  data-toggle="modal" data-target="#pedirlacuenta" onclick="pedirlacuenta(`<?=$_SESSION['comanda_cabecera']['mesa_id']?>`)" >Pedir la <br> cuenta</h4>  
    </li>
    <?php if(isset($_SESSION['carrito'])):?>

    <li class=" nav-link btn btn-light  d-flex align-items-center justify-content-center" data-toggle="modal" data-target="#pedido" style="border: 1px solid;margin-left: 5px;margin-top:5px;border-radius: 37px;">
<h4 style="font-weight: 600;color:black;font-size:1.5em;" data-toggle="modal" data-target="#pedido">Confirmar <br> pedido</h4>
    
    </li>
    <li class=" nav-link btn btn-light  d-flex align-items-center justify-content-center" data-toggle="modal" data-target="#pedido" style="border: 1px solid;margin-left: 5px;margin-top:5px;border-radius: 37px;">
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="text-dark bi bi-cart4" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg><a style="font-weight:bold;text-decoration:none;color:black;margin-left:8px;"> <?= sizeof($_SESSION['carrito']);?></a>
    </li>   
        <?php endif;?>


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




























<div class="row" style="background-color: #7749F8;">   
    <div data-toggle="modal" data-target="#abandonarmesa" class="text-white col-5 offset-7 py-2 bg-danger text-center align-items-center" style="border-right:2px solid black;">
    <a  style="text-decoration:none;color:white;">
        Cerrar sesión</a>
    <a  style="text-decoration:none;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
        
        <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
        <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
        </svg></a>
    </div>
  </div>
<div class="row" style="background: #7749F8;">
    <div class="col-md-7 col-sm-9 col-lg-7 text-center col-8  text-white">
        <div class="row  mt-3">
            <div class="col-12">
            <?php if(isset($_SESSION['carrito'])==false):?>
              <h4 style="font-family: 'Inter';font-style: normal;font-weight: bold;font-size: 1.2em;color:white;">¡Hola, <?php  echo ucfirst($_SESSION['comanda_cabecera']['cliente']);?>! </h4>           
    <?php endif;?>
    <?php if(isset($_SESSION['carrito'])):?>
      <h4 style="font-family: 'Inter';font-style: normal;font-weight: bold;font-size: 1.2em;color:white">Genial, <?php  echo ucfirst($_SESSION['comanda_cabecera']['cliente']);?>! </h4>           
    <?php endif;?>
            </div>
        </div>
        <div class="row  mt-2">
            <div class="col-12">
            <?php if(isset($_SESSION['carrito'])):?>
      <h4 style="font-family: 'Inter';font-style: normal;font-weight: bold;font-size: 1.2em;color:white">Solo resta que confirmes el pedido! </h4>           
    <?php endif;?>
            <?php if(isset($_SESSION['carrito'])==false):?>

                <h4 style="font-family: 'Inter';font-style: normal;font-weight: bold;font-size: 1.2em;color:white">Bienvenido/a a <?= $_SESSION['comanda_cabecera']['nombrebar'];?> </h4>           
                <?php endif;?>

              </div>
        </div>
        <div class="row  mt-2 mb-3">
            <div class="col-12">
            <?php if(isset($_SESSION['carrito'])==false):?>

                <h4 style="font-family: 'Inter';font-style: normal;font-weight: 600;font-size: 1.2em;color:white">¿Qué te gustaria pedir? </h4>           
                <?php endif;?>

              </div>
        </div>
    </div>
    <div class="col-md-5 col-sm-3 col-lg-5 text-center col-4 d-flex align-items-end">
        <img src="<?=base_url?>assets/img/fede.png" alt="LOGO">
    </div>
    
</div>
<div class="row" style="background: linear-gradient(to bottom, #7749F8, #1A0556);">
    <div class="col-6 text-center"  >
        <h6 onclick="vercomidas()" id="vercomidas" style="background: #491CC8;border-radius: 11px 11px 0px 0px;font-size: 1.7em;font-family:'Inter';font-weight:600;color:white;" >Menú de comidas</h6>
    </div>
    <div class="col-6 text-center"  >
    <h6 onclick="verbebidas()" id="verbebidas" style="background: #491CC8;border-radius: 11px 11px 0px 0px;font-size: 1.7em;font-family:'Inter';font-weight:600;color:white;">Menú de bebidas</h6>

    </div>
</div>

<div class="row" style="background: #1A0556 !important;">
    <div class="col-12" id="bebidas"  >
        </div>
        <div class="col-12"   style="display: none;" id="comidas">
        </div>
</div>
<div class="row  py-2" style="clear:both;background-color: #7749F8 !important;">
<div class=" col-4 col-sm-3 btn btn-light  d-flex align-items-center justify-content-center" style="border: 1px solid;margin-left: 5px;margin-top:5px;border-radius: 37px;">
    <img  data-toggle="modal" data-target="#traducir" src="<?=base_url?>assets/img/traductor.png" alt="traducir">
    <a  data-toggle="modal" data-target="#traducir" style="text-decoration: none;font-weight: 600;color:black;font-size:1em;" >Change languaje</a>

     </div>

     <!--
         
     
     traducir script
    
    
    
    -->
  
   <!--
         
     
     traducir script
    
    
    
    -->
  
    <div class=" col-4 col-sm-2 btn btn-light  d-flex align-items-center justify-content-center" style="border: 1px solid;margin-left: 5px;margin-top:5px;border-radius: 37px;">
    <h4 style="font-weight: 600;color:black;font-size:1.5em;" data-toggle="modal" data-target="#pedirmozo">Llamar <br> mozo</h4>
    </div>
    <div class=" col-4 col-sm-2 btn btn-light  d-flex align-items-center justify-content-center" style="border: 1px solid;margin-left: 5px;margin-top:5px;border-radius: 37px;">
    <h4 style="font-weight: 600;color:black;font-size:1.5em;"  data-toggle="modal" data-target="#pedirlacuenta" onclick="pedirlacuenta(`<?=$_SESSION['comanda_cabecera']['mesa_id']?>`)" >Pedir la <br> cuenta</h4>  
    </div>
    <div class=" col-4 col-sm-2 btn btn-light  d-flex align-items-center justify-content-center" data-toggle="modal" data-target="#pedido" style="border: 1px solid;margin-left: 5px;margin-top:5px;border-radius: 37px;">
        <?php if(isset($_SESSION['carrito'])):?>
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="text-dark bi bi-cart4" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg><a style="font-weight:bold;text-decoration:none;color:black;margin-left:8px;"> <?= sizeof($_SESSION['carrito']);?></a>
<h4 style="font-weight: 600;color:black;font-size:1.5em;" data-toggle="modal" data-target="#pedido">Confirmar <br> pedido</h4>
    
        <?php endif;?>
    </div>
</div>
<!-- modal abandonar mesa-->
<div class="modal fade" id="abandonarmesa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="descripcionLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div  style="background: #1A0556 !important;height:103.93px;">
        <div class="row">
            <div class="col-11 offset-1">
            <h5 class=" mt-3" style="font-family: 'Inter';font-style: normal;font-weight: bold;font-size: 29px;color: #FFFFFF;" >Abandonar mesa</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-11 offset-1">
            <p class=" mt-1" style="font-family: 'Inter';font-style: normal;font-weight: 400;font-size: 14px;color: #CBCBCB;" >¿Estás seguro de abandonar la mesa?</p>
            </div>
        </div>
    </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-4 offset-2">
          <a href="<?=base_url?>bar/cerrarsesion" class="btn btn-success">Confirmar</a>
          </div>
          <div class="col-4 offset-2">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Volver</button>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- modal pedido-->
 <div class="modal fade" id="pedido" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="descripcionLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div  style="background: #1A0556 !important;height:103.93px;">
        <div class="row">
            <div class="col-11 offset-1">
            <h5 class=" mt-3" style="font-family: 'Inter';font-style: normal;font-weight: bold;font-size: 29px;color: #FFFFFF;" >Resumen de tu pedido</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-11 offset-1">
            <p class=" mt-1" style="font-family: 'Inter';font-style: normal;font-weight: 400;font-size: 14px;color: #CBCBCB;" >Por favor, revisá que todo esté bien antes de confirmarlo.</p>
            </div>
        </div>
    </div>
      <div class="modal-body">

        <?php foreach($_SESSION['carrito'] as $producto):?>
            <div class="row d-flex align-items-center" style="background: #EFECF9;border-bottom: 1px solid #7663AA;">
            <div class="col-md-5 col-4 text-white">
                   <p style="font-family: 'Inter';font-style: normal;font-weight: bold;font-size: 0.6em;color: #1A0556;" > <?= $producto['producto'];?> </p>
                </div>
                <div class="col-md-2 col-3">
                   <p style="font-family: 'Inter';font-style: normal;font-weight: normal;font-size: 0.6em;color: #1A0556;" >Cant. x <?= $producto['unidades'];?> </p>
                </div>
                <div class="col-2 col-md-2">
                   <p style="font-family: 'Inter';font-style: normal;font-weight: bold;font-size: 0.6em;color: #1A0556;" >$<?= $producto['precio'];?> </p>
                </div>
                <div class="col-md-1 col-1">
                   <a style="font-family: 'Inter';font-style: normal;font-weight: bold;font-size: 0.6em;color: #1A0556;text-decoration:underline;" data-toggle="modal" data-target="#editarnota"  onclick="editarnota<?= '(`'.$producto['id_producto'].'`,`'.$producto['producto'].'`,`'.$producto['nota'].'`)';?>"  > Ver notas </a>
                   
                </div>
                <div class="col-2 col-md-2 text-center">
                   <a href="<?=base_url?>producto/quitar&producto=<?= $producto['id_producto'];?>" style="color:red;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg> 
        </a>
                </div>
            </div>
        <?php endforeach;?>
      </div>
          <div class="row mt-2">
              <div class="col-8  offset-2 text-center">
                  <p style="font-family:'Inter';font-style: normal;font-weight: bold;font-size: 29px;color: #281758;">¿Desea confirmar el pedido?</p>
              </div>
          </div>
          <div class="row mt-2">
              <div class="col-5 d-flex justify-content-center offset-1">
              <button type="button" class="btn btn-secondary" style="float:right; color:white;background: #1A0556;border-radius: 11px;font-family: Inter;font-style: normal;font-weight: 600;font-size: 17px;" data-dismiss="modal">Volver atrás</button>
              </div>
              <div class="col-4 d-flex justify-content-start">
              <a href="<?=base_url?>producto/confirmar" class="btn btn-secondary" style="color:white;background: #7749F8;border-radius: 11px;font-family: Inter;font-style: normal;font-weight: 600;font-size: 17px;">Confirmar</a>
              </div>
          </div>
        <div class="row mt-3 mb-1">
            <div class="col-8 text-center offset-2">
                <p style="font-family: 'Inter';font-style: normal;font-weight: normal;font-size: 14px;align-items: center;text-align: center;color: #605F64;">Una vez confirmado, no hay vuelta atras y el pedido se empezará a preparar.</p>
            </div>
        </div>
    </div>
  </div>
</div>
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
<!-- ver nota -->
<div class="modal fade" id="vernotamodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="descripcionLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>

    </div>
      <div class="modal-body">
          <label style="font-family:'Inter';font-style: normal;font-weight: 600;font-size: 19px;color: #281758;">Nota añadida</label>
          <br>
          <p id="vernota" style="font-family:'Inter';font-style: normal;font-weight: 600;font-size: 19px;color: #281758;"></p>

      </div>
    

    </div>
  </div>
</div>

<!-- editar nota -->
<div class="modal fade" id="editarnota" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="descripcionLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="productonota"></h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>

    </div>
    <form action="<?=base_url?>producto/editarnota" method="POST">
      <div class="modal-body">
          <input type="hidden" name="id" id="idnotaeditar">
          <label style="font-family:'Inter';font-style: normal;font-weight: 600;font-size: 19px;text-decoration-line: underline;color: #281758;">Nota añadida</label>
          <br>
            <textarea name="nota" id="notaeditar" ></textarea>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-secondary justify-content-start" style="background: #7749F8;border-radius: 17px">Editar nota</button>
      </div>
      </form>

    </div>
  </div>
</div>
<script type="text/javascript">
    function editarnota(id,producto,nota){
        document.getElementById("idnotaeditar").value=id
        document.getElementById("productonota").innerHTML=producto
        document.getElementById("notaeditar").value=nota
    }
</script>
<!-- Modal pedir mozo-->
<div class="modal fade" id="pedirmozo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="descripcionLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
      <div class="modal-body">
        <div class="row">
          <div class="col-10 offset-1">
          <h5 style="font-family: 'Inter';font-style: normal;font-weight: bold;font-size: 29px;" >¿Deseas llamar a un mozo?</h5>
          </div>        
        </div>

        <div class="row mt-2">
          <div class="col-5 offset-1">
          <button type="button" class="btn btn-secondary" style="color:white;font-weight:600;font-size:21px;background: #1A0556;border-radius: 11px;border-color:#1A0556;" data-dismiss="modal" aria-label="Close">No,volver atrás</button>
          </div>
          <div class="col-3">
          <button type="button" class="btn btn-secondary" style="color:white;font-weight:600;font-size:21px;background: #7749F8;border-radius: 11px;border-color:#7749F8;" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#confirmarmozo" onclick="enviarnotificacion(<?= ''.$_SESSION['comanda_cabecera']['id'].',`PM`';?>)">Si,llamar</button>

          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- modal pedir cuenta resumen-->
<div class="modal fade" id="pedirlacuenta" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="descripcionLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div  style="background: #1A0556 !important;height:103.93px;">
        <div class="row">
            <div class="col-11 offset-1">
            <h5 class=" mt-3" style="font-family: 'Inter';font-style: normal;font-weight: bold;font-size: 29px;color: #FFFFFF;" >Pedir la cuenta</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-11 offset-1">
            <p class=" mt-1" style="font-family: 'Inter';font-style: normal;font-weight: 400;font-size: 14px;color: #CBCBCB;" >Por favor, revisá que todo esté bien antes de proceder al pago.</p>
            </div>
        </div>
    </div>
      <div class="modal-body" id="productospedircuenta">

    
      </div>
        <div class="row mt-3 mb-1">
            <div class="col-8 text-center offset-2">
                <p style="font-family: 'Inter';font-style: normal;font-weight: normal;font-size: 14px;align-items: center;text-align: center;color: #605F64;"> Si en esta lista hay algo que no corresponde con tus pedidos, podes realizar un reclamo llamando y comentandole el inconveniente al mozo. Para eso, debés presionar proceder al pago.</p>
            </div>
        </div>
    </div>
  </div>
</div>
<input type="hidden" value="<?=$_SESSION['comanda_cabecera']['bar'];?>" id="id_bar">
<script type="text/javascript">

    function pedirlacuenta(num){
      
      var param = {
            "mesa": num
          }
      $.ajax({
    
    data:param,
    url: 'https://undertake.ar/notificacionapi.php',
    type:'GET',
    success: function(pedidos){
      let html=""
      let total=0.00
      if(pedidos[0].estadocomanda==="CERRADA"){
        window.location.href("https://undertake.ar/bar/destruir");
      }
      for (var i=0; i < pedidos.length; i++) {
        html+='<div class="row" style="background: #EFECF9;border-bottom: 1px solid #7663AA;"><div class="col-md-5 col-4"><p style="font-style: normal;font-weight: bold;font-size: 17px;color: #1A0556;">'+pedidos[i].producto+'</p></div><div class="col-md-2 col-2"><p style="font-family:font-style: normal;font-weight: normal;font-size: 17px;color: #1A0556;" >Cant. x'+pedidos[i].cantidad+'</p></div><div class="col-md-1 col-2 text-center"><p style="font-style: normal;font-weight: bold;font-size: 17px;color: #1A0556;" >$'+pedidos[i].precio+'</p></div><div class="col-md-2 col-2 text-center" style="font-style: normal;font-weight: bold;font-size: 17px;color: #1A0556;">$'+pedidos[i].subtotal+'</div><div class="col-md-2 col-2 text-center"><a style="font-style: normal;font-weight: bold;font-size: 17px;color: #1A0556;text-decoration:underline;" data-toggle="modal" data-target="#vernotamodal"  onclick="vernota(`'+pedidos[i].nota+'`)"  data-dismiss="modal" aria-label="Close">Ver notas</a></div></div>'
       
      total=Number(pedidos[i].subtotal)+total
      }
      html+='<div class="row mt-2" ><div class="col-4 offset-8 text-center"><h4 style="font-style: normal;font-weight: bold;font-size: 17px;color: #1A0556;">TOTAL $'+total+'</h4></div></div>'
      html+='<div class="row mt-2" ><div class="col-4 offset-4 text-center"><button  class="btn btn-success w-100" style="background: #7749F8;border-color:#7749F8;border-radius: 11px;font-weight: 600;font-size: 17px;color:white;" onclick="enviarnotificacion(<?= ''.$_SESSION['comanda_cabecera']['id'].',`PC`';?>)" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#procederpago">Proceder al pago</button></div></div>'
      document.getElementById("productospedircuenta").innerHTML=html
    }
      })
    }
    window.addEventListener("load",obtenercarta)

function obtenercarta(){
  var bar=document.getElementById("id_bar").value      

      var param = {
            "cartabar": bar
          }

      $.ajax({
    
    data:param,
    url: 'https://undertake.ar/notificacionapi.php',
    type:'GET',
    success: function(carta){
      document.getElementById("vercomidas").style.backgroundColor='#491CC8';
        document.getElementById("verbebidas").style.backgroundColor='#1A0556';
        let comidas=""
      let bebidas=""
      let total=0.00
      let tipodeproductocomida=carta.comidas[0].tipo
      for (var i=0; i < carta.comidas.length; i++) {
        if(i===0){
          comidas+='<div class="row py-3" onclick="verprod(`'+carta.comidas[i].tipoid+'`)" style="background:#1A0556;border-bottom: 2px solid black;"><div class="col-11 text-center text-white" style="font-weight:bold;font-size:large;">'+carta.comidas[i].tipo+'</div><div class="col-1  text-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/></svg></div></div>'

        }
        
        if(carta.comidas[i].tipo!==tipodeproductocomida){
          comidas+='<div class="row py-3" onclick="verprod(`'+carta.comidas[i].tipoid+'`)" style="background:#1A0556;border-bottom: 2px solid black;"><div class="col-11 text-center text-white" style="font-weight:bold;font-size:large;">'+carta.comidas[i].tipo+'</div><div class="col-1  text-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/></svg></div></div>'
          tipodeproductocomida=carta.comidas[i].tipo
        }
        comidas+='<div class="row py-3 ver'+carta.comidas[i].tipoid+'" style="border-bottom: 1px solid #7663AA;display:none !important;display:none;"><div class="col-md-6 col-3 text-white">'
            if(carta.comidas[i].categoria==='PROMO'){
              comidas+='<h6 style="color:red;font-weight:bold;display:inline-block;border-radius:25px;border:1px solid yellow;padding:3px;margin-right:2px;">PROMO  </h6>'
            }
                 
            comidas+=carta.comidas[i].nombre+'</div><div class="col-md-2 col-3 text-white">$ '+carta.comidas[i].precio+'</div><div class="col-md-2 col-3 text-white"><a style="font-size:small;" data-toggle="modal" onclick="verdescripcion(`'+carta.comidas[i].nombre+'`,`'+carta.comidas[i].descripcion+'`)" data-target="#descripcion" >Ver Descripción</a></div><div class="col-md-2 col-3"><button  onclick="add(`'+carta.comidas[i].id+'`,`'+carta.comidas[i].nombre+'`,`'+carta.comidas[i].precio+'`,`'+carta.comidas[i].descripcion+'`,`'+carta.comidas[i].categoria+'`)" data-toggle="modal" data-target="#pedir" class="btn btn-secondary text-white" style="background: #7749F8;border-radius: 17px;font-size:small;">Añadir a pedido</button></div></div>'          

      }
      let tipodeproductobebida=carta.bebidas[0].tipo

      for (var i=0; i < carta.bebidas.length; i++) {
        if(i===0){
          bebidas+='<div class="row py-3" onclick="verprod(`'+carta.bebidas[i].tipoid+'`)" style="background:#1A0556;border-bottom: 2px solid black;"><div class="col-11 text-center text-white  " style="font-weight:bold;font-size:large;">'+carta.bebidas[i].tipo+'</div><div class="col-1   text-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/></svg></div></div>'

        }
        if(carta.bebidas[i].tipo!==tipodeproductobebida){
          bebidas+='<div class="row py-3" onclick="verprod(`'+carta.bebidas[i].tipoid+'`)" style="background:#1A0556;border-bottom: 2px solid black;"><div class="col-11 text-center text-white" style="font-weight:bold;font-size:large;">'+carta.bebidas[i].tipo+'</div><div class="col-1   text-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/></svg></div></div>'
          tipodeproductobebida=carta.bebidas[i].tipo
        }
        bebidas+='<div class="row py-3 ver'+carta.bebidas[i].tipoid+'" style="border-bottom: 1px solid #7663AA;display:none;"><div class="col-md-6 col-3 text-white d-flex align-items-center">'
            if(carta.bebidas[i].categoria==='PROMO'){
              bebidas+='<h6 style="color:red;font-weight:bold;display:inline-block;border-radius:25px;border:1px solid yellow;padding:3px;margin-right:2px;">PROMO  </h6>'
            }
                 
            bebidas+=carta.bebidas[i].nombre+'</div><div class="col-md-2 d-flex align-items-center col-3 text-white">$ '+carta.bebidas[i].precio+'</div><div class=" d-flex align-items-center col-md-2 col-3 text-white"><a data-toggle="modal" style="font-size:small;" onclick="verdescripcion(`'+carta.bebidas[i].nombre+'`,`'+carta.bebidas[i].descripcion+'`)" data-target="#descripcion" >Ver Descripción</a></div><div class="col-md-2 col-3"><button  onclick="add(`'+carta.bebidas[i].id+'`,`'+carta.bebidas[i].nombre+'`,`'+carta.bebidas[i].precio+'`,`'+carta.bebidas[i].descripcion+'`,`'+carta.bebidas[i].categoria+'`)" data-toggle="modal" data-target="#pedir" class="btn btn-secondary text-white" style="background: #7749F8;border-radius: 17px;font-size:small;">Añadir a pedido</button></div></div>'
       }

      document.getElementById("bebidas").innerHTML=bebidas
      document.getElementById("comidas").innerHTML=comidas
    
        }
      });
   
        


  var obtenerlacarta= setInterval(function(){
    var bar=document.getElementById("id_bar").value      

      var param = {
            "cartabar": bar
          }

      $.ajax({
    
    data:param,
    url: 'https://undertake.ar/notificacionapi.php',
    type:'GET',
    success: function(carta){
      let comidas=""
      let bebidas=""
      let total=0.00
      let tipodeproductocomida=carta.comidas[0].tipo
      for (var i=0; i < carta.comidas.length; i++) {
        if(i===0){
          comidas+='<div class="row py-3" onclick="verprod(`'+carta.comidas[i].tipoid+'`)" style="background:#1A0556;border-bottom: 2px solid black;"><div class="col-11 text-center text-white" style="font-weight:bold;font-size:large;">'+carta.comidas[i].tipo+'</div><div class="col-1  text-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/></svg></div></div>'

        }
        
        if(carta.comidas[i].tipo!==tipodeproductocomida){
          comidas+='<div class="row py-3" onclick="verprod(`'+carta.comidas[i].tipoid+'`)" style="background:#1A0556;border-bottom: 2px solid black;"><div class="col-11 text-center text-white" style="font-weight:bold;font-size:large;">'+carta.comidas[i].tipo+'</div><div class="col-1  text-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/></svg></div></div>'
          tipodeproductocomida=carta.comidas[i].tipo
        }
        comidas+='<div class="row py-3 ver'+carta.comidas[i].tipoid+'" style="border-bottom: 1px solid #7663AA;display:none !important;display:none;"><div class="col-md-0 d-flex align-items-center col-3 text-white">'
            if(carta.comidas[i].categoria==='PROMO'){
              comidas+='<h6 style="color:red;font-weight:bold;display:inline-block;border-radius:25px;border:1px solid yellow;padding:3px;margin-right:2px;">PROMO  </h6>'
            }
                 
            comidas+=carta.comidas[i].nombre+'</div><div class="d-flex align-items-center col-md-2 col-3 text-white">$ '+carta.comidas[i].precio+'</div><div class=" col-md-2  d-flex align-items-center col-3 text-white"><a style="font-size:small;" data-toggle="modal" onclick="verdescripcion(`'+carta.comidas[i].nombre+'`,`'+carta.comidas[i].descripcion+'`)" data-target="#descripcion" >Ver Descripción</a></div><div class="d-flex align-items-center col-md-2 col-3"><button  onclick="add(`'+carta.comidas[i].id+'`,`'+carta.comidas[i].nombre+'`,`'+carta.comidas[i].precio+'`,`'+carta.comidas[i].descripcion+'`,`'+carta.comidas[i].categoria+'`)" data-toggle="modal" data-target="#pedir" class=" btn btn-secondary text-white" style="background: #7749F8;border-radius: 17px;font-size:small;">Añadir a pedido</button></div></div>'          

      }
      let tipodeproductobebida=carta.bebidas[0].tipo

      for (var i=0; i < carta.bebidas.length; i++) {
        if(i===0){
          bebidas+='<div class="row py-3" onclick="verprod(`'+carta.bebidas[i].tipoid+'`)" style="background:#1A0556;border-bottom: 2px solid black;"><div class="col-11 text-center text-white " style="font-weight:bold;font-size:large;">'+carta.bebidas[i].tipo+'</div><div class="col-1  text-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/></svg></div></div>'

        }
        if(carta.bebidas[i].tipo!==tipodeproductobebida){
          bebidas+='<div class="row py-3" onclick="verprod(`'+carta.bebidas[i].tipoid+'`)" style="background:#1A0556;border-bottom: 2px solid black;"><div class="col-11 text-center text-white" style="font-weight:bold;font-size:large;">'+carta.bebidas[i].tipo+'</div><div class="col-1  text-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/></svg></div></div>'
          tipodeproductobebida=carta.bebidas[i].tipo
        }
        bebidas+='<div class="row py-3 ver'+carta.bebidas[i].tipoid+'" style="border-bottom: 1px solid #7663AA;display:none;"><div class="col-md-6 d-flex align-items-center col-3 text-white">'
            if(carta.bebidas[i].categoria==='PROMO'){
              bebidas+='<h6 style="color:red;font-weight:bold;display:inline-block;border-radius:25px;border:1px solid yellow;padding:3px;margin-right:2px;">PROMO  </h6>'
            }
                 
            bebidas+=carta.bebidas[i].nombre+'</div><div class="d-flex align-items-center col-md-2 col-3 text-white">$ '+carta.bebidas[i].precio+'</div><div class="d-flex align-items-center col-md-2 col-3 text-white"><a data-toggle="modal" style="font-size:small;" onclick="verdescripcion(`'+carta.bebidas[i].nombre+'`,`'+carta.bebidas[i].descripcion+'`)" data-target="#descripcion" >Ver Descripción</a></div><div class="col-md-2 d-flex align-items-center col-3"><button  onclick="add(`'+carta.bebidas[i].id+'`,`'+carta.bebidas[i].nombre+'`,`'+carta.bebidas[i].precio+'`,`'+carta.bebidas[i].descripcion+'`,`'+carta.bebidas[i].categoria+'`)" data-toggle="modal" data-target="#pedir" class="btn btn-secondary text-white" style="background: #7749F8;border-radius: 17px;font-size:small;">Añadir a pedido</button></div></div>'
       }


      document.getElementById("bebidas").innerHTML=bebidas
      document.getElementById("comidas").innerHTML=comidas
    
        }
      });
   

      },60000);
      obtenerlacarta
}  

      function verprod(tipo){
        var a=document.getElementsByClassName("ver"+tipo);
        if( a[0].style.display==="none"){
          for (var i=0; i<a.length; i++){
      a[i].style.display="";
    }
        }else{
		for (var i=0; i<a.length; i++){
      a[i].style.display="none";
    }
        }
        
      }
</script>
<!-- Modal pagar cuenta-->
<div class="modal fade" id="procederpago" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="descripcionLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
      <div class="modal-body">
        <div class="row">
          <div class="col-10 offset-1">
          <h5 style="color:#281758;font-family: 'Inter';font-style: normal;font-weight: bold;font-size: 29px;" >Un mozo se presentará en tu mesa a la brevedad</h5>
          </div>        
        </div>
        <div class="row">
          <div class="col-10 offset-1">
          <h5 style="color:#281758;font-family: 'Inter';font-style: normal;font-weight: normal;font-size: 14px;" >Ya notificamos al establecimiento tu solicitud. Solo resta esperar.Mientras tanto podes continuar contandonos como fue tu experiencia.</h5>
          </div>        
        </div>

        <div class="row mt-2">
          <div class="col-4 offset-1">
          <button type="button" class="btn btn-secondary w-100" style="color:white;font-weight:600;font-size:16px;background: #FFC700;border-radius: 11px;border-color:#FFC700;" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#valorarexperiencia" >Valorar experiencia</button>
          </div>
          <div class="col-4 offset-1">
          <a  class="btn btn-secondary w-100" style="color:white;font-weight:600;font-size:16px;background: #FFC700;border-radius: 11px;border-color:#FFC700;" href="<?=base_url?>bar/cerrarsesion" >No,gracias.</a>

          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- Modal valorar experiencia-->
<div class="modal fade" id="valorarexperiencia" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="descripcionLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background: #FFC700;">
        <h4 style="font-family: 'Inter';color:white;font-style: normal;font-weight: bold;font-size: 29px;" class="modal-title">Valorá tu experiencia</h4>
      </div>
      <form class="modal-body" action="<?=base_url?>bar/valorarexperiencia" method="POST">
        <div class="row">
          <div class="col-10 offset-1">
          <h5 style="color:#1A1A1A;font-family: 'Inter';font-style: normal;font-weight: normal;font-size: 14px;" >¿Cómo fue tu experiencia en <?= $_SESSION['comanda_cabecera']['nombrebar']?>?</h5>
          </div>        
        </div>
        <div class="row">
          <div class="col-10 offset-1">
              <select name="experienciabar" class="form-select">
                <option value="mala">Mala</option>
                <option value="buena" selected >buena</option>
                <option value="excelente">excelente</option>
              </select>
          </div>        
        </div>
        <div class="row">
          <div class="col-10 offset-1">
          <h5 style="color:#1A1A1A;font-family: 'Inter';font-style: normal;font-weight: normal;font-size: 14px;" >¿Te gustaria añadir un comentario sobre fede?</h5>
          </div>        
        </div>
        <div class="row">
          <div class="col-10 offset-1">
            <textarea class="w-100" name="comentariobar" style="background: #D9D9D9;border-radius: 8px;"></textarea>
          </div>        
        </div>
        <div class="row">
          <div class="col-10 offset-1">
          <h5 style="color:#1A1A1A;font-family: 'Inter';font-style: normal;font-weight: normal;font-size: 14px;" >¿Cómo fue tu experiencia al ser atendido virtualmente por fede?</h5>
          </div>        
        </div>
        <div class="row">
          <div class="col-10 offset-1">
              <select name="experienciaunder" class="form-select">
                <option value="mala">Mala</option>
                <option value="buena" selected>buena</option>
                <option value="excelente">excelente</option>
              </select>
          </div>        
        </div>
        <div class="row">
          <div class="col-10 offset-1">
          <h5 style="color:#1A1A1A;font-family: 'Inter';font-style: normal;font-weight: normal;font-size: 14px;" >¿Te gustaria añadir un comentario?</h5>
          </div>        
        </div>
        <div class="row">
          <div class="col-10 offset-1">
            <textarea name="comentariounder" class="w-100" style="background: #D9D9D9;border-radius: 8px;"></textarea>
          </div>        
        </div>
        <div class="row my-2">
          <div class="col-4 offset-1">
          <input type="submit" class="btn btn-secondary" style="color:white;font-weight:600;font-size:21px;background: #FFC700;
border-radius: 11px;border-color:#FFC700;"  data-toggle="modal" data-target="#muchasgracias" value="Enviar">
          </div>
         </div>
  </form>
      
    </div>
  </div>
</div>
<!-- Modal muchas gracias-->
<div class="modal fade" id="muchasgracias" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="descripcionLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
      <div class="modal-body">
        <div class="row">
          <div class="col-10 offset-1">
          <h5 style="font-family: 'Inter';font-style: normal;font-weight: 700;font-size: 29px;" >¡Muchas gracias! Y hasta la próxima<h5>
          </div>        
        </div>

        <div class="row mt-2">
          
          <div class="col-6 offset-3">
          <a type="button" class="btn btn-secondary" style="color:white;font-weight:600;font-size:21px;background: #1A0556;border-radius: 11px;border-color:#1A0556;" href="<?= base_url.'bar/vercarta&bar='.$_SESSION['comanda_cabecera']['bar']?>" >Comenzar de nuevo</a>

          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<script tipe="text/javascript">
  function enviarnotificacion(comanda,tipo){
    var parametros = {
      "comandanotificacion": comanda,
       "tiponotificacion":tipo
      }
    $.ajax({

        data:parametros,
    url: 'https://undertake.ar/notificacionapi.php',
        type:'GET',
        success: function(){
          
        }
  })
}
</script>
<!-- Modal confirmar mozo-->
<div class="modal fade" id="confirmarmozo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="descripcionLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
      <div class="modal-body">
        <div class="row">
          <div class="col-10 offset-1">
          <h5 style="font-family: 'Inter';font-style: normal;font-weight: bold;font-size: 29px;" >Un mozo se presentará en tu mesa a la brevedad.</h5>
          </div>        
        </div>
        <div class="row mt-2">
          <div class="col-4 offset-4">
          <button type="button" class="btn btn-secondary w-100" style="color:white;font-weight:600;font-size:21px;background: #1A0556;border-radius: 11px;" data-dismiss="modal" aria-label="Close">Volver al menú</button>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>

<!-- Modal pedir mozo-->
<div class="modal fade" id="descripcion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="descripcionLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tituloeditar" ></h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <p id="recetaeditar"></p>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="pedir" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="descripcionLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="font-family: 'Inter';font-style: normal;font-weight: bold;font-size: 29px;color: #281758;" id="productoadd" ></h5>

        <button type="button" class="btn-close btn-danger p-2" data-dismiss="modal" style="color:#D51C1C !important;" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <h5 class="modal-subtitle" style="color: #281758;font-family: 'Inter';font-style: normal;font-weight: 600;font-size: 19px;" id="precioadd"></h5>

      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <p id="recetaadd" style="font-family: 'Inter';font-style: normal;font-weight: normal;font-size: 19px;align-items: center;color: #2B039D;"></p>
      </div>
      <form action="<?=base_url?>producto/add" method="POST">
            <div class="form-group">
                <label  class="col-form-label" style="font-family: 'Inter';font-style: normal;font-weight: 600;font-size: 21px;color: #41326C;">Indicá la cantidad:</label>
                <div class="row  justify-content-left">
                <input type="hidden" id="idproductopedido" name="idproductopedido">
                    <div class="col-5">
                        <div class="row" style="background-color: #1A0556;">
                            <div class="col-3">
                                <button onclick="restarcantidad()" type="button" class="btn btn-primary w-100"  style="width:120% !important;color:white;background-color: #1A0556;border-color:#1A0556">-</button>
                            </div>
                            <div class="col-5">
                                <input type="number" id="cantidad" class="form-control text-center w-100" min="1" style="width:120% !important;color:white;background-color: #1A0556;border-color:#1A0556 -webkit-appearance: textfield;margin: 0; " value="0" name="cantidad" >
                            </div>
                            <div class="col-3">
                                <button onclick="sumarcantidad()" type="button" class="btn btn-primary w-100" style="width:120% !important;color:white;background-color: #1A0556;border-color:#1A0556">+</button>
                            </div>
                        </div>  
                        
                    </div>
                </div>
                <script type="text/javascript">
                    function restarcantidad(){
                    let cantidad=document.getElementById("cantidad").value
                    if(cantidad!='0'){
                    document.getElementById("cantidad").value= Number(cantidad)-1
                    }
                }
                    function sumarcantidad(){
                    let cantidad=document.getElementById("cantidad").value
                    document.getElementById("cantidad").value= Number(cantidad)+1
                    }
                </script>
                 <label  class="col-form-label" style="font-family: 'Inter';font-style: normal;font-weight:bold;font-size: 29px;color: #281758;">¿Cómo te gustaría que te lo preparen?</label>
                 <label  class="col-form-label" style="font-family: 'Inter';font-style: normal;font-weight:normal;font-size: 14px;color: #605F64;"> Añadí lo que creas necesario, o si te gustaria que le quiten algun ingrediente. Si deseas no comentar nada, dejalo vacio y lo recibirás como indica la descripción del mismo.</label>
                 <textarea name="nota" placeholder="Escribe aquí" style="width:100%;border:none;background: #D9D9D9 !important;border-radius: 8px;"></textarea>
            </div>
        </div>
      <div class="modal-footer justify-content-start">
        <button type="submit" class="btn btn-secondary" style="font-size:17px;color: #FFFFFF;background: #7749F8;border-radius: 17px;">Añadir al pedido</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
       function add(id,nombre,precio,descripcion,categoria){
        document.getElementById("productoadd").innerHTML=""+nombre
        document.getElementById("recetaadd").innerHTML=""+descripcion
        if(categoria==='PROMO'){
        document.getElementById("precioadd").innerHTML='$ '+precio+'<h6 style="color:red;font-weight:bold;display:inline-block;border-radius:25px;border:1px solid yellow;padding:3px;margin-right:2px;">  PROMO</h6>'
        }else{
          document.getElementById("precioadd").innerHTML="$ "+precio
        }        

        document.getElementById("idproductopedido").value=id

    }
    function verdescripcion(nombre,descripcion){
        document.getElementById("tituloeditar").innerHTML=""+nombre
        document.getElementById("recetaeditar").innerHTML=""+descripcion

    }
    function vernota(descripcion){
      if(descripcion==''){
        document.getElementById("vernota").innerHTML="Este pedido no tiene nota añadida"

      }else{
        document.getElementById("vernota").innerHTML=""+descripcion
      }
    }
    function verbebidas(){
        document.getElementById("bebidas").style.display="block"
        document.getElementById("comidas").style.display="none"
        document.getElementById("bebidas").style.backgroundColor='#1A0556';
        document.getElementById("vercomidas").style.backgroundColor='#491CC8';
        document.getElementById("verbebidas").style.backgroundColor='#1A0556';
    }
    
    function vercomidas(){
        document.getElementById("comidas").style.display="block"
        document.getElementById("bebidas").style.display="none"
        document.getElementById("verbebidas").style.backgroundColor='#491CC8';
        document.getElementById("vercomidas").style.backgroundColor='#1A0556';
        document.getElementById("comidas").style.backgroundColor='#1A0556';

    }
</script>

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