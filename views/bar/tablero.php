
<?php		require_once 'views/bar/gestion.php';?><div class="row" >
<style> body{
      background: #E5E5E5 !important;
    }
      </style>  
    <div class="col-8 col-md-9" style="background: #E5E5E5;margin-top:1.5em">
    <?php if(isset($mesas)):?>
      <div class="row">
        <div class="col-10 offset-1 mb-4">
          
      <div class="row"  >
              <?php foreach($mesas as $mesa):?>
                <div class="col-2" style="border: #9d6919 solid 1px;margin-top:0.7em;" onclick="vermesa(<?= $mesa['id']?>)" data-toggle="modal" data-target="#administrarmesa" style="background: #FFECCF;border-radius: 11px;">
                <div class="row" style="background-color: #9d6919;">
                    <div class="col-10 offset-1  justify-content-center">
                      <p class="text-center text-dark" style="font-size: 1.3em;color:white !important;font-weight:bold;"> <?= $mesa['numero_mesa']?> </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-10 offset-1">
                      <img src="<?=base_url?>assets/img/mesa.png" class="w-100"  alt="Mesa">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 ">
                      <div class="row my-2">
                          <div class="col-4" id="pedirmozomesa<?= $mesa['numero_mesa']?>" style="background: #F1F1F1;border: 2px solid #000000;box-sizing: border-box;border-radius: 8px;">
                            <img id="imgpedirmozomesa<?= $mesa['numero_mesa']?>" src="<?=base_url?>assets/img/mozonotificacion.png" class="w-100" style="display:none;"  alt="Mesa">
                          </div>
                          <div class="col-4"  id="nuevopedidomesa<?= $mesa['numero_mesa']?>" style="background: #F1F1F1;border: 2px solid #000000;box-sizing: border-box;border-radius: 8px;">
                            <img id="imgnuevopedidomesa<?= $mesa['numero_mesa']?>" src="<?=base_url?>assets/img/cubiertos.png" class="w-100" style="display:none;"  alt="Mesa">
                          </div>
                          <div class="col-4"  id="pedircuentamesa<?= $mesa['numero_mesa']?>" style="background: #F1F1F1;border: 2px solid #000000;box-sizing: border-box;border-radius: 8px;">
                            <img id="imgpedircuentamesa<?= $mesa['numero_mesa']?>" src="<?=base_url?>assets/img/cuenta.png" class="w-100" style="display:none;"  alt="Mesa">
                          </div>
                      </div>
                    </div>
                  </div>
              </div>  
              <?php endforeach;?>
      </div>  
      
      </div>
      </div>
      <?php endif;?>

      </div>
      <div class="col-4 col-md-3 " style="background: #F1F1F1;border-right:2px solid rgba(0, 0, 0, 0.5);">
    <div class="row">
      <div class="col-12">
          <p style="font-family: 'Inter';font-style: normal;font-weight: bold;font-size: 1.5em;color: #FFFFFF;background: #384DB9;">Notificaciones</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12" id="notificacionesbarra" >

      </div>
    </div>
  </div>
    </div>
  </div>
  </div>
<div class="modal " tabindex="-1" id="administrarmesa">
  <div class="modal-dialog-lg ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="background: #4F60C1;color:white;font-family: 'Inter';font-style: normal;font-weight: bold;font-size: 1.5em;" id="vermesatitulo"></h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
         <div class="row">
          <div class="col-10 offset-1">
          <p style="color: #605F64;display:inline-block;font-weight:bold;">Mozo encargado del servicio:</p>
        <p style="color: #605F64;font-weight:600; display:inline-block" id="mozoencargadomesa"></p>
        <br>
        <p style="color: #605F64;display:inline-block;font-weight:bold;">Apertura de la mesa:</p>
        <p style="color: #605F64;font-weight:600; display:inline-block" id="fechaaperturamesa"></p>
        <br>  
        <p style="color: #605F64;display:inline-block;font-weight:bold;">Estado actual de la mesa:</p>
        <p style="color: #605F64;font-weight:600; display:inline-block" id="estadomesa"></p>
          </div>
        </div>
        <div class="row">
                    <div class="col-10 offset-1">
                      <div class="row my-2">
                          <div class="col-4 text-center" onclick="borrarnotificacionpedido('pedirmozomesa')" id="pedirmozomesa" style="background: #F1F1F1;border: 2px solid #000000;box-sizing: border-box;border-radius: 8px;">
                            <img id="imgpedirmozomesa" src="<?=base_url?>assets/img/mozonotificacion.png" class="w-25"   alt="Mesa">
                          </div>
                          <div class="col-4 text-center" onclick="borrarnotificacionpedido('nuevopedidomesa')" id="nuevopedidomesa" style="background: #F1F1F1;border: 2px solid #000000;box-sizing: border-box;border-radius: 8px;">
                            <img id="imgnuevopedidomesa" src="<?=base_url?>assets/img/cubiertos.png" class="w-25"   alt="Mesa">
                          </div>
                          <div class="col-4 text-center" onclick="borrarnotificacionpedido('pedircuentamesa')" id="pedircuentamesa" style="background: #F1F1F1;border: 2px solid #000000;box-sizing: border-box;border-radius: 8px;">
                            <img id="imgpedircuentamesa" src="<?=base_url?>assets/img/cuenta.png" class="w-25"   alt="Mesa">
                          </div>
                      </div>
                    </div>
                  </div>
        <div class="row">
          <div class="col-10 offset-1" style="background: #E9E9E9;border: 1px solid #000000;border-radius: 30px;">
            <div class="row">
           
              <div class="row">
                <div class="col-10 offset-1  " id="pedidosmesa">
                 
                </div>
              </div>
              
              <div class="row mt-1">
              <div class="col-4 text-center" id="imprimircocina">
                    
                    </div>
                <div class="col-4 text-center" id="imprimirrecibo">
                    
                </div>
                <div class="col-4 text-center" id="cerrarmesaboton">
                    
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<input type="hidden" id="barnotificacion" value="<?=$_SESSION['identity']->id;?>">

<!-- ver nota -->
<div class="modal fade" id="vernotamodall" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="descripcionLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>

    </div>
      <div class="modal-body">
          <label style="font-family:'Inter';font-style: normal;font-weight: 600;font-size: 19px;color: #281758;">Nota añadida</label>
          <br>
          <p id="vernotad" style="font-family:'Inter';font-style: normal;font-weight: 600;font-size: 19px;color: #281758;"></p>

      </div>
    

    </div>
  </div>
</div>
<!-- editar pedido modal -->
<div class="modal fade" id="editarpedidos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="descripcionLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>

    </div>
      <div class="modal-body">
         <form  class="row" >
                <div class="col-12">
                  <div class="row">
                    <div class="col-10 offset-1">
                      <input type="hidden" id="editarpedidoid" name="idpedido">
                      <input type="hidden" id="comandaeditar" name="comanda">

                      <input type="text" disabled name="editarproducto" id="editarpedidoproducto" >
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-10 offset-1">
                      <label >CANTIDAD</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-10 offset-1">
                      <input id="editarpedidocantidad" type="number" name="cantidad" min="0" >
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-10 offset-1">
                      <label >ESTADO</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-10 offset-1">
                      <select id="editarpedidoestado" name="estado">
                        <option value="ENTREGADO" id="editarpedidoentregado">ENTREGADO</option>
                        <option value="SIN ATENDER" id="editarpedidosinatender">SIN ATENDER</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-10 offset-1">
                      <input value="Modificar" onclick="editarpedidoconfirmado()" type="button" class="btn btn-success" data-dismiss="modal" style="background: #109CF1;border-color: #109CF1;border-radius: 11px;">
                    </div>
                  </div>
                </div>
        </form>
      </div>
    

    </div>
  </div>
</div>
<!-- Modal pagar-->
<div class="modal fade" id="pagarcomanda" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="descripcionLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
      <div class="modal-body">
        <div class="row">
          <div class="col-12 text-left">
          <h5 style="font-family: 'Inter';font-style: normal;font-weight: 700;font-size: 29px;" >Ingresa los montos pagados<h5>
          </div>        
        </div>
        
        <div class="row mt-2">
          <div class="col-12">
               <label id="totalapagar"></label>
          </div>
        </div>
        <form action="<?=base_url;?>bar/pagartodo" method="POST" class="row form-group">
          <div class="col-12">
            
            <div class="row mt-2">
              <div class="col-12">
                  <label >EFECTIVO</label>
                  <input type="number" class="form-control" id="totalefectivo" name="efectivo">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                  <label >POSNET</label>
                  <input type="number" class="form-control" id="totalposnet" name="posnet">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                <input type="hidden" id="comandapagar" name="comanda">
                <input type="hidden" id="mesapagar" name="mesa">

                  <input type="submit" class="btn btn-success" value="Pagar">
              </div>
            </div>
      </div>
    
        </form>
      
    </div>
  </div>
</div>
</div>
  <script type="text/javascript">
function pagartodo(comanda,total,mesa){
  document.getElementById("totalapagar").innerHTML='TOTAL: $ '+total
  document.getElementById("comandapagar").value=comanda
  document.getElementById("mesapagar").value=mesa
  document.getElementById("totalposnet").setAttribute("max",total);
  document.getElementById("totalefectivo").setAttribute("max",total);
  document.getElementById("totalefectivo").value=total


}
function borrarnotificacionpedido(tipo){
  comanda=document.getElementById("comandaeditar").value
  let tiponotificacion=''
  if(tipo==='nuevopedidomesa'){
              
              document.getElementById("nuevopedidomesa").style.background="#F1F1F1"
              tiponotificacion='NP'
            }
          
            if(tipo==='pedirmozomesa' ){
              document.getElementById("pedirmozomesa").style.background="#F1F1F1"
              tiponotificacion='PM'

            }
            
            if(tipo==='pedircuentamesa'){
              document.getElementById("pedircuentamesa").style.background="#F1F1F1"
              tiponotificacion='PC'

            }
  var param = {
        "tipo": tiponotificacion,
        "comanda":comanda
      }
  $.ajax({
 
data:param,
url: 'https://undertake.ar/notificacionapi.php',
type:'GET',
success: function(mesa){

  if(tipo==='nuevopedidomesa'){
              
              document.getElementById("nuevopedidomesa"+mesa.mesa).style.background="#F1F1F1"
              document.getElementById("imgnuevopedidomesa"+mesa.mesa).style.display="none"

            }
          
            if(tipo==='pedirmozomesa' ){
              document.getElementById("pedirmozomesa"+mesa.mesa).style.background="#F1F1F1"
              document.getElementById("imgpedirmozomesa"+mesa.mesa).style.display="none"

            }
            
            if(tipo==='pedircuentamesa'){
              document.getElementById("pedircuentamesa"+mesa.mesa).style.background="#F1F1F1"
              document.getElementById("imgpedircuentamesa"+mesa.mesa).style.display="none"

            }
}
  })
}
function vermesa(num){
  
  var param = {
        "mesa": num
      }
  $.ajax({
 
data:param,
url: 'https://undertake.ar/notificacionapi.php',
type:'GET',
success: function(pedidos){

  document.getElementById("imprimircocina").innerHTML='<a class="btn mt-2 mb-3 btn-success w-100" style="background:#109CF1;border-color:#109CF1;border-radius: 11px;font-style: normal;font-weight: 600;font-size: 28px;color: #FFFFFF;" target="_blank" href="<?=base_url.'imprimircocina.php'?>?mesa='+num+'">Imprimir comanda</a>'
  document.getElementById("imprimirrecibo").innerHTML='<a class="btn mt-2 mb-3 btn-success w-100" style="background:#109CF1;border-color:#109CF1;border-radius: 11px;font-style: normal;font-weight: 600;font-size: 28px;color: #FFFFFF;" target="_blank" href="<?=base_url.'imprimir.php'?>?mesa='+num+'">Imprimir factura</a>'
  document.getElementById("comandaeditar").value=""+pedidos[0].comandaid
  document.getElementById("vermesatitulo").innerHTML="Mesa "+pedidos[0].mesa
  document.getElementById("mozoencargadomesa").innerHTML=""+pedidos[0].mozo+"."
  document.getElementById("fechaaperturamesa").innerHTML=""+pedidos[0].fecha_apertura+"."
  if(pedidos[0].estado=="CERRADA"){
    document.getElementById("estadomesa").innerHTML="Mesa cerrada a las "+pedidos[0].fecha_cierre+"."

  }
  if(pedidos[0].estado==='ABIERTA'){
    document.getElementById("estadomesa").innerHTML="Abierta."

  }
  let html='<div class="row"><div class="text-center col-md-2 col-2 "><h5>ESTADO</h5></div><div class="text-center col-md-2 col-2 "><h5>FECHA PEDIDO</h5></div><div class="text-center col-md-3 col-3 "><h5>PRODUCTO</h5></div><div class="text-center col-md-2 col-2 "><h5>CANTIDAD</h5></div><div class="text-center col-md-1 col-2 "><h5>SUBTOTAL</h5></div><div class="col-md-1 col-2 "></div></div>'
  let total=0.00
  for (var i=0; i < pedidos.length; i++) {
    html+='<div class="row my-1"  style="border-bottom: 1px solid #7663AA;"><div class="col-md-2 col-2">'+pedidos[i].estadopedido+'</div><div class="col-md-2 col-2">'+pedidos[i].fecha_pedido+'</div><div class="col-md-3 col-3"><p style="font-style: normal;font-weight: bold;font-size: 20px;color: #1A0556;">'+pedidos[i].producto+'</div><div class="col-md-2 col-1">Cant. x '+pedidos[i].cantidad+'</div>'+'<div class="col-md-1 col-2">$'+pedidos[i].subtotal+'</div><div class="col-md-1 col-2"><a data-toggle="modal" data-target="#vernotamodall" onclick="vernota(`'+pedidos[i].nota+'`)" >Ver nota</a></div><div class="col-md-1 col-1"><button data-toggle="modal" data-target="#editarpedidos" onclick="editarpedido(`'+pedidos[i].idpedido+'`,`'+pedidos[i].estadopedido+'`,`'+pedidos[i].producto+'`,`'+pedidos[i].cantidad+'`)" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16"><path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/></svg></div></div>'
  total=Number(pedidos[i].subtotal)+total
  }
  document.getElementById("cerrarmesaboton").innerHTML='<a class="btn mt-2 mb-3 btn-success w-100" style="background:#109CF1;border-color:#109CF1;border-radius: 11px;font-style: normal;font-weight: 600;font-size: 28px;color: #FFFFFF;" data-toggle="modal" data-target="#pagarcomanda" onclick="pagartodo(`'+pedidos[0].comandaid+'`,`'+total+'`,`'+pedidos[0].mesa+'`)"  >Cerrar mesa</a>'
  html+='<div class="row my-2" style="border-bottom: 1px solid #7663AA;"><div class="col-4 offset-8 text-center"><h4>TOTAL $'+total+'</h4></div></div>'
  document.getElementById("pedidosmesa").innerHTML=html




  var paremeters = {
        "obtenernotificacion": num
      }
  $.ajax({
 
data:paremeters,
url: 'https://undertake.ar/notificacionapi.php',
type:'GET',
success: function(notificaciones){
  document.getElementById("nuevopedidomesa").style.background="#F1F1F1"
    document.getElementById("pedirmozomesa").style.background="#F1F1F1"
    document.getElementById("pedircuentamesa").style.background="#F1F1F1"
  for (var i=0; i < notificaciones.length; i++) {
    

            if(notificaciones[i].tipo==='NP'){
              
              document.getElementById("nuevopedidomesa").style.background="#5fd738"

            }
          
            if(notificaciones[i].tipo==='A' ){
              document.getElementById("pedirmozomesa").style.background="#5fd738"

            }
            if(notificaciones[i].tipo==='PM' ){
              document.getElementById("pedirmozomesa").style.background="#5fd738"
            }
            if(notificaciones[i].tipo==='PC'){
              document.getElementById("pedircuentamesa").style.background="#5fd738"

            }


          }
console.log("notificacioness")

}
  })
}
})
}
function editarpedido(idpedido,estado,producto,cantidad){
  document.getElementById("editarpedidoid").value=idpedido
  document.getElementById("editarpedidoproducto").value=producto
  document.getElementById("editarpedidocantidad").value=cantidad
if(estado==="SIN ATENDER"){
  document.getElementById("editarpedidosinatender").selected='selected'

}

if(estado==="ENTREGADO"){
  document.getElementById("editarpedidoentregado").selected='selected'

}

}
function editarpedidoconfirmado(){
  idpedido=document.getElementById("editarpedidoid").value
  cantidad=document.getElementById("editarpedidocantidad").value
  estado=document.getElementById("editarpedidoestado").value
  comanda=document.getElementById("comandaeditar").value
  producto=document.getElementById("editarpedidoproducto").value
  
  var param = {
        "idpedido": idpedido,
        "cantidad":cantidad,
        "estado":estado,
        "comanda": comanda

      }
  $.ajax({
 
data:param,
url: 'https://undertake.ar/notificacionapi.php',
type:'POST',
  success: function(pedidos){
    document.getElementById("imprimircocina").innerHTML='<a class="btn mt-2 mb-3 btn-success w-100" style="background:#109CF1;border-color:#109CF1;border-radius: 11px;font-style: normal;font-weight: 600;font-size: 28px;color: #FFFFFF;" target="_blank" href="<?=base_url.'imprimircocina.php'?>?mesa='+num+'">Imprimir comanda</a>'
  document.getElementById("imprimirrecibo").innerHTML='<a class="btn mt-2 mb-3 btn-success w-100" style="background:#109CF1;border-color:#109CF1;border-radius: 11px;font-style: normal;font-weight: 600;font-size: 28px;color: #FFFFFF;" target="_blank" href="<?=base_url.'imprimir.php'?>?mesa='+num+'">Imprimir factura</a>'
    document.getElementById("cerrarmesaboton").innerHTML='<a class="btn mt-2 mb-3 btn-success w-100" style="background:#109CF1;border-color:#109CF1;border-radius: 11px;font-style: normal;font-weight: 600;font-size: 28px;color: #FFFFFF;" target="_blank" href="<?=base_url.'imprimir.php'?>?mesa='+num+'">Cerrar mesa</a>'

  document.getElementById("vermesatitulo").innerHTML="Mesa "+pedidos[0].mesa
  document.getElementById("mozoencargadomesa").innerHTML=""+pedidos[0].mozo+"."
  document.getElementById("fechaaperturamesa").innerHTML=""+pedidos[0].fecha_apertura+"."
  if(pedidos[0].estado=="CERRADA"){
    document.getElementById("estadomesa").innerHTML+="Mesa cerrada a las"+pedidos[0].fecha_cierre+"."

  }
  if(pedidos[0].estado==='ABIERTA'){
    document.getElementById("estadomesa").innerHTML="Abierta."

  }
  let html=""
  let total=0.00
  for (var i=0; i < pedidos.length; i++) {
    html+='<div class="row" data-toggle="modal" data-target="#editarpedidos" onclick="editarpedido(`'+pedidos[i].idpedido+'`,`'+pedidos[i].estadopedido+'`,`'+pedidos[i].producto+'`,`'+pedidos[i].cantidad+'`)" style="border-bottom: 1px solid #7663AA;"><div class="col-md-2 col-2">'+pedidos[i].estadopedido+'</div><div class="col-md-2 col-2">'+pedidos[i].fecha_pedido+'</div><div class="col-md-4 col-3"><p style="font-style: normal;font-weight: bold;font-size: 20px;color: #1A0556;">'+pedidos[i].producto+'</div><div class="col-md-2 col-1">Cant. x '+pedidos[i].cantidad+'</div>'+'<div class="col-md-1 col-2">$'+pedidos[i].subtotal+'</div><div class="col-md-1 col-2"><a data-toggle="modal" data-target="#vernotamodall" onclick="vernota(`'+pedidos[i].nota+'`)" >Ver nota</a></div></div>'
  total=Number(pedidos[i].subtotal)+total
  }
  html+='<div class="row my-2" style="border-bottom: 1px solid #7663AA;"><div class="col-4 offset-8 text-center"><h4>TOTAL $'+total+'</h4></div></div>'
  document.getElementById("pedidosmesa").innerHTML=html
console.log("actualizado")

}

  }
)
}
function borrar(notificacionid,tipo,num){
  var param = {
        "notificacion": notificacionid
      }
  $.ajax({
 
data:param,
url: 'https://undertake.ar/notificacionapi.php',
type:'GET',
success: function(){

  if(tipo==='NP'){
  document.getElementById("nuevopedidomesa"+num).style.background="#F1F1F1"
  document.getElementById("imgnuevopedidomesa"+num).style.display="none"

  }
  if(tipo==='A'){
  document.getElementById("pedirmozomesa"+num).style.background="#F1F1F1"
  document.getElementById("imgpedirmozomesa"+num).style.display="none"

  }
  if(tipo==='PC'){
  document.getElementById("pedircuentamesa"+num).style.background="#F1F1F1"
  document.getElementById("imgpedircuentamesa"+num).style.display="none"

  }
}
  })
}
window.addEventListener("load",tiempo)

  var tiempo= setInterval(function(){

    var texto=document.getElementById("barnotificacion").value;
      var parametros = {
        "bar": texto
      }
    $.ajax({

        data:parametros,
        url: 'https://undertake.ar/notificacionapi.php',
        type:'GET',
        success: function(notificaciones){
          let html='';
          for (var i=0; i < notificaciones.length; i++) {
          html+='<div class="row" ><div class="col-10">'
          html+='<p style="font-size:small;">Hace  ';
              var fec = new Date(notificaciones[i].fecha);
              var ahora = new Date();
              
              var difference = fec.getTime()-ahora.getTime();
              difference=Math.abs(difference)
              
              difference=secondsToTime(difference)
              html+=' '+difference+'</p></div>'
          
          html+='<div class="col-2"><a onclick="borrar(`'+notificaciones[i].id+'`,`'+notificaciones[i].tipo+'`,`'+notificaciones[i].numero_mesa+'`)" class="btn-close" style="padding:0.4em;text-decoration:none;color:red;font-weight:bold;"></a></div></div><div class="row" style="border-bottom:1px solid #000000;"><div class="col-12"><p style="font-size:medium;">La mesa '+notificaciones[i].numero_mesa
            if(notificaciones[i].tipo==='NP'){
              
              document.getElementById("nuevopedidomesa"+notificaciones[i].numero_mesa).style.background="#5fd738"
              document.getElementById("imgnuevopedidomesa"+notificaciones[i].numero_mesa).style.display=""

              html+=' realizo un pedido.Se debe poner en producción</p>';
            }
          
            if(notificaciones[i].tipo==='A' ){
              document.getElementById("pedirmozomesa"+notificaciones[i].numero_mesa).style.background="#5fd738"
              document.getElementById("imgpedirmozomesa"+notificaciones[i].numero_mesa).style.display=""


              html+=' escaneo el qr. Se solicita al mozo que reciba al nuevo cliente.</p>';
              
            }
            if(notificaciones[i].tipo==='PM' ){
              document.getElementById("imgpedirmozomesa"+notificaciones[i].numero_mesa).style.display=""

              document.getElementById("pedirmozomesa"+notificaciones[i].numero_mesa).style.background="#5fd738"


              html+=' solicita el servicio de un mozo. Se solicita al mozo que atienda las peticiones del cliente.</p>'
              
            }
            if(notificaciones[i].tipo==='PC'){
              document.getElementById("imgpedircuentamesa"+notificaciones[i].numero_mesa).style.display=""

              document.getElementById("pedircuentamesa"+notificaciones[i].numero_mesa).style.background="#5fd738"


              html+=' pidió la cuenta. Se solicita al mozo que la lleve.</p>'
              
            }

            html+='</div></div>';

          }
          
          document.getElementById("notificacionesbarra").innerHTML=html

                  
        console.log("3 segundoss")
        }
      });
   
        

      },3000);
      
          
          var secondsToTime = function (s) {

          function addZ(n) {
            return (n<10? '0':'') + n;
          }

          var ms = s % 1000;
          s = (s - ms) / 1000;
          var secs = s % 60;
          s = (s - secs) / 60;
          var mins = s % 60;
          var hrs = (s - mins) / 60;
          var respuesta
          if(addZ(hrs)>0){
              respuesta=addZ(hrs) + ' Horas ' + addZ(mins) + ' Minutos ' ;
            }
            else if(addZ(mins)==0){
              respuesta=addZ(secs)+' Segundos';
            }
            else if((addZ(hrs)==0)){
              respuesta= addZ(mins) + ' Minutos ' ;
            }
           
            return respuesta
          }


          function vernota(descripcion){
      if(descripcion==''){
        document.getElementById("vernotad").innerHTML="Este pedido no tiene nota añadida"

      }else{
        document.getElementById("vernotad").innerHTML=""+descripcion
      }
    }
    </script>