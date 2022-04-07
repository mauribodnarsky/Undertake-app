<?php		require_once 'views/bar/gestion.php';?>
<div class="row py-2" style="background:#EFECF9;">
    <div class="col-12 text-left">
        <h5 style="color:#384DB9;font-weight:bold;font-size: 70px;">Reseñas</h5>
    </div>
</div>
<div class="row">
    <div class="col-12">
        
        <?php if(isset($valoraciones)):?>
            <?php $malas=0;$buenas=0;$excelentes=0;?>

            <div class="row py-2">
                <div class="col-3 d-flex align-items-center justify-content-center">
                    <h6>Experiencia</h6>
                </div>
                <div class="col-7 d-flex align-items-center justify-content-start">
                    <h6>Comentario</h6>
                </div>
                <div class="col-2 d-flex align-items-center justify-content-start">
                    <h6>Acción</h6>
                </div>
            </div>
            <?php foreach($valoraciones as $valoracion):?>
                <div class="row py-2" style="border-bottom: #384DB9 2px solid;">
                <div class="col-1 text-center">
                <?php if($valoracion['experienciabar']=="mala"):?>
                    <?php $malas=$malas+1;?>

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-angry" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zm6.991-8.38a.5.5 0 1 1 .448.894l-1.009.504c.176.27.285.64.285 1.049 0 .828-.448 1.5-1 1.5s-1-.672-1-1.5c0-.247.04-.48.11-.686a.502.502 0 0 1 .166-.761l2-1zm-6.552 0a.5.5 0 0 0-.448.894l1.009.504A1.94 1.94 0 0 0 5 6.5C5 7.328 5.448 8 6 8s1-.672 1-1.5c0-.247-.04-.48-.11-.686a.502.502 0 0 0-.166-.761l-2-1z"/>
</svg>
                <?php endif;?>
                <?php if($valoracion['experienciabar']=="buena"):?>
                    <?php $buenas=$buenas+1;?>

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
</svg>                <?php endif;?>
                <?php if($valoracion['experienciabar']=="excelente"):?>
                    <?php $excelentes=$excelentes+1;?>

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-sunglasses" viewBox="0 0 16 16">
  <path d="M4.968 9.75a.5.5 0 1 0-.866.5A4.498 4.498 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.498 3.498 0 0 1 8 11.5a3.498 3.498 0 0 1-3.032-1.75zM7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A2.99 2.99 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.22 4.22 0 0 0 8 5c-.35 0-.69.04-1 .116z"/>
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0z"/>
</svg>                <?php endif;?>
                </div>
                
                <div class="col-2 d-flex align-items-center align-content-center">
                   <h6> <?= $valoracion['experienciabar'];?> </h6>
                </div>
        
                <div class="col-7 d-flex align-items-center align-content-center">
                  <h6>  <?= $valoracion['comentariobar'];?> </h6>
                </div>
                <div class="col-2 d-flex align-items-center align-content-center">
                  <button data-toggle="modal" class="btn btn-secondary" data-target="#vercomentario" onclick="vercomentario('<?= $valoracion['comentariobar'];?>')">VER</button>
                </div>
            </div>
            <?php endforeach;?>

        <?php endif;?>
    </div>
</div>
<div class="row py-2" style="background:#EFECF9;border-bottom:2px solid black;border-top:2px solid black;">
    <div class="col-12 text-left">
        <h5 style="color:#384DB9;font-weight:bold;font-size: 30px;">Experiencias</h5>
    </div>
</div>
<div class="row py-3 text-dark bg-white">
    <div class="col-4 text-center  ">
        

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-angry" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zm6.991-8.38a.5.5 0 1 1 .448.894l-1.009.504c.176.27.285.64.285 1.049 0 .828-.448 1.5-1 1.5s-1-.672-1-1.5c0-.247.04-.48.11-.686a.502.502 0 0 1 .166-.761l2-1zm-6.552 0a.5.5 0 0 0-.448.894l1.009.504A1.94 1.94 0 0 0 5 6.5C5 7.328 5.448 8 6 8s1-.672 1-1.5c0-.247-.04-.48-.11-.686a.502.502 0 0 0-.166-.761l-2-1z"/>
            </svg>

</div>              
<div class="col-4 text-center  ">
        
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
</svg>       
</div>              
<div class="col-4 text-center  ">


                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-sunglasses" viewBox="0 0 16 16">
  <path d="M4.968 9.75a.5.5 0 1 0-.866.5A4.498 4.498 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.498 3.498 0 0 1 8 11.5a3.498 3.498 0 0 1-3.032-1.75zM7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A2.99 2.99 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.22 4.22 0 0 0 8 5c-.35 0-.69.04-1 .116z"/>
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0z"/>
</svg>     
</div>
</div>
<div class="row ">
    <div class="col-4 text-center bg-danger py-2 ">
        

            <h3 class="text-white" class="text-white">Malas:<?= $malas;?></h3>

</div>              
<div class="col-4 text-center bg-warning py-2">
        <h3 class="text-white">Buenas:<?= $buenas;?></h3>
    
</div>              
<div class="col-4 text-center bg-success py-2">
<h3 class="text-white">Excelentes:<?= $excelentes;?></h3>

</div>
</div>



<!-- ver comentario -->
<div class="modal fade" id="vercomentario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="descripcionLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>

    </div>
      <div class="modal-body">
          <label style="font-family:'Inter';font-style: normal;font-weight: 600;font-size: 32px;color: #281758;">Comentario:</label>
          <br>
          <p id="comentario" style="font-family:'Inter';font-style: normal;font-weight: 600;font-size: 22px;color: #281758;"></p>

      </div>
    

    </div>
  </div>
</div>
<script type="text/javascript">
    function vercomentario(comentario){
        document.getElementById("comentario").innerText=comentario
    }
</script>