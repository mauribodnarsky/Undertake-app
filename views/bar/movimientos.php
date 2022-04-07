<div class="row py-2" style="background:#EFECF9;">
    <div class="col-12 text-left">
        <h5 style="color:#384DB9;font-weight:bold;font-size: 70px;">Caja</h5>
    </div>
</div>

<div class="row  py-2" style="background:#EFECF9;">
    <div class="col-12">
    <div class="row">
    <div class="col-2 text-center offset-1">
            <button data-toggle="modal" data-target="#nuevocobro" class="btn btn-secondary w-100">Nuevo ingreso</button>                    
        </div>
        <div class="col-2 text-center">
            <button data-toggle="modal" data-target="#nuevopago" class="btn btn-secondary w-100">Nuevo egreso</button>
        </div>
        <div class="col-2 text-center">
            <button data-toggle="modal" data-target="#nuevadeuda" class="btn btn-secondary w-100">Cargar deuda</button>                    
        </div>
        <div class="col-2 text-center">
            <button data-toggle="modal" data-target="#historialcaja" class="btn btn-secondary w-100">Historial de caja</button>
        </div>
        <div class="col-2 text-center">
            <button data-toggle="modal" data-target="#nuevoacreedor" class="btn btn-secondary w-100">Nuevo acreedor</button>
        </div>
        
    </div>
    <div class="row py-2" style="background:#EFECF9;">
    <div class="col-12 text-left">

        <h5 style="color:#384DB9;font-weight:bold;font-size: 30px;">Balance</h5>
        <a data-toggle="modal" data-target="#veradvertencia" id="advertencia"></a>

    </div>
</div>
<div class="row bg-white">
    <div class="col-12">
        <div class="row mt-2" style="border-bottom:6px solid #A9CFF0;border-top:6px solid #A9CFF0;">
            <div class="col-4 d-flex align-items-center justify-content-start">
                <h6 style="font-family: 'Inter';font-style: normal;font-weight: 600;font-size: 50px;color: #1E86E1;">Ingresos</h6>
            </div>
            <div class="col-4" style="border-right:4px solid #A9CFF0;border-left:4px solid #A9CFF0;">
                <div class="row">
                    <div class="col-4 d-flex align-items-center justify-content-start">
                        <h6 style="font-family: 'Inter';font-style: normal;font-weight: 600;font-size: 28px;color: #1E86E1;">POSNET:</h6>
                    </div>
                    <div class="col-4 d-flex align-items-center justify-content-start">
                        <h6 style="font-family: 'Inter';font-style: normal;font-weight: 600;font-size: 28px;color: #1E86E1;"> <h6><?php echo  "$".$ingresosposnet;?></h6>
                    </div>

                </div>
                <div class="row">
                    <div class="col-4 d-flex align-items-center justify-content-start">
                        <h6 style="font-family: 'Inter';font-style: normal;font-weight: 600;font-size: 28px;color: #1E86E1;">EFECTIVO:</h6>
                    </div>
                    <div class="col-4 d-flex align-items-center justify-content-start">
                        <h6 style="font-family: 'Inter';font-style: normal;font-weight: 600;font-size: 28px;color: #1E86E1;"> <h6><?php echo  "$ ".$ingresosefectivo;?></h6>
                    </div>
                    
                </div>
            </div>
            <div class="col-4 d-flex align-items-center justify-content-center">
                        <h6 style="font-family: 'Inter';font-style: normal;font-weight: 600;font-size: 28px;color: #1E86E1;"><?php echo  "$ ".$totalingresos;?></h6>
            </div>
            
        </div>
        <div class="row " style="border-bottom:6px solid #A9CFF0;">
            <div class="col-4 d-flex align-items-center justify-content-start">
                <h6 style="font-family: 'Inter';font-style: normal;font-weight: 600;font-size: 50px;color: #1E86E1;">Egresos</h6>
            </div>
            <div class="col-4" style="border-right:4px solid #A9CFF0;border-left:4px solid #A9CFF0;">
                <div class="row">
                    <div class="col-4 d-flex align-items-center justify-content-start">
                        <h6 style="font-family: 'Inter';font-style: normal;font-weight: 600;font-size: 28px;color: #1E86E1;">POSNET:</h6>
                    </div>
                    <div class="col-4 d-flex align-items-center justify-content-start">
                        <h6 style="font-family: 'Inter';font-style: normal;font-weight: 600;font-size: 28px;color: #1E86E1;"> <h6><?php echo  "$ ".$egresosposnet;?></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 d-flex align-items-center justify-content-start">
                        <h6 style="font-family: 'Inter';font-style: normal;font-weight: 600;font-size: 28px;color: #1E86E1;">EFECTIVO:</h6>
                    </div>
                    <div class="col-4 d-flex align-items-center justify-content-start">
                        <h6 style="font-family: 'Inter';font-style: normal;font-weight: 600;font-size: 28px;color: #1E86E1;"> <h6><?php echo  "$ ".$egresosefectivo;?></h6>
                    </div>
                </div>
            </div>
            <div class="col-4 d-flex align-items-center justify-content-center">
                        <h6 style="font-family: 'Inter';font-style: normal;font-weight: 600;font-size: 28px;color: #1E86E1;"><?php echo  "$ ".$totalegresos;?></h6>
            </div>
        </div>
        <div class="row " style="border-bottom:6px solid #A9CFF0;">
            <div class="col-4 d-flex align-items-center justify-content-start">
                <h6 style="font-family: 'Inter';font-style: normal;font-weight: 600;font-size: 50px;color: #1E86E1;">Deuda</h6>
            </div>
            
            <div class="col-4 d-flex align-items-center justify-content-center" style="border-right:4px solid #A9CFF0;border-left:4px solid #A9CFF0;">
                        <h6 style="font-family: 'Inter';font-style: normal;font-weight: 600;font-size: 28px;color: #1E86E1;"><?php echo  "$ ".$deuda;?></h6>
            </div>
            <div class="col-4 d-flex align-items-center justify-content-center">
                        <h6 style="font-family: 'Inter';font-style: normal;font-weight: 600;font-size: 28px;color: #1E86E1;"><?php echo  "$ ".$deuda;?></h6>
            </div>
        </div>
        
        <div class="row " style="border-bottom:6px solid #A9CFF0;">
            <div class="col-4 offset-8 d-flex align-items-center justify-content-center" style="border-right:4px solid #A9CFF0;border-left:4px solid #A9CFF0;background: #1E86E1;">
                        <h6 style="font-family: 'Inter';font-style: normal;font-weight: 600;font-size: 28px;color: white;"><?php echo  "$ ".$balance;?></h6>
            </div>
        </div>
</div>

  
    </div>
    
               <!-- modal nuevo acreedor -->
               <div class="modal fade" id="nuevoacreedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">NUEVO ACREEDOR</h5>
                                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                </button>
                          </div>
                          <form action="<?=base_url?>bar/nuevoacreedor" method="POST" class="row">
                                <div class="col-11 offset-1">
                                    
                                    <div class="row mt-3 mb-1">
                                        <div class="col-11">
                                        <input type="text" name="nombre" class="form-control" placeholder="Ej:Proveedor coca cola">

                                        </div>
                                    </div>
                                    <div class="row mb-2 mt-1">
                                        <div class="col-3 offset-8">
                                        <input type="submit" class="btn btn-primary w-100" style="background-color: rgb(22, 24, 75) !important;border-color:rgb(22, 24, 75) !important;" value="GUARDAR">

                                        </div>
                                    </div>
                                </div>
                                             </form>
                                    </div>
                
            </div>
            </div>
            <!-- modal nuevo pago -->
            <div class="modal fade" id="nuevopago" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">NUEVO EGRESO</h5>
                                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                </button>
                          </div>
                                 <form   action="<?=base_url?>bar/guardarpago" method="POST">

                                    <div class="modal-body">
                                        <label class="mt-3">MONTO</label>
                                        <input type="number" class="form-control my-1" required min="1" name="monto"  placeholder="Monto..." >
                                        <label class="mt-3">ACREEDOR</label>
                                        <select name="acreedor" class="form-select">
                                        <?php foreach($acreedores as $acreedor):?>

                                            <option value="<?=$acreedor['nombre'];?>"><?=$acreedor['nombre'];?></option>
                                            <?php endforeach;?>
                                        </select>
                                        <label class="mt-3">TIPO</label>

                                        <select name="moneda" class="form-select">
                                                <option value="EFECTIVO">EFECTIVO</option>
                                                <option value="POSNET">POSNET</option>
                                        </select>
                                        <label class="mt-3">DETALLE</label>
                                        <textarea name="detalle" class="form-control"></textarea>
                                    </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary" style="background-color: #fc8c04 !important;border: #fc8c04 !important;">Pagar</button>
                </div>
            </form>

            </div>
            </div>
            </div>   
                 <!-- modal nuevo cobro -->
                 <div class="modal fade" id="nuevocobro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">NUEVO INGRESO</h5>
                                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                </button>
                          </div>
                                 <form   action="<?=base_url?>bar/guardarcobro" method="POST">

                                    <div class="modal-body">
                                        <label class="mt-3">MONTO</label>
                                        <input type="number" class="form-control my-1" required min="1" name="monto"  placeholder="Monto..." >
                                        <label class="mt-3">ACREEDOR</label>
                                        <select name="acreedor" class="form-select">
                                        <?php foreach($acreedores as $acreedor):?>
                                       <option value="<?=$acreedor['nombre'];?>"><?=$acreedor['nombre'];?></option>
                                       <?php endforeach;?>
                                      </select> 
                                       <label class="mt-3">TIPO</label>

                                       <select name="moneda" class="form-select">
                                                <option value="EFECTIVO">EFECTIVO</option>
                                                <option value="POSNET">POSNET</option>
                                        </select>   
                                        <label class="mt-3">DETALLE</label>
                                        <textarea name="detalle"  class="form-control"></textarea>                            
                                 </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary" style="background-color: #fc8c04 !important;border: #fc8c04 !important;">Cobrar</button>
                </div>
            </form>

            </div>
            </div>
            </div>   

             <!-- modal nueva deuda -->
             <div class="modal fade" id="nuevadeuda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">NUEVA DEUDA</h5>
                                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                </button>
                          </div>
                                 <form   action="<?=base_url?>bar/guardarpago" method="POST">

                                    <div class="modal-body">
                                        <label class="mt-3">MONTO</label>
                                        <input type="number" class="form-control my-1" required min="1" name="monto"  placeholder="Monto..." >
                                        <label class="mt-3">ACREEDOR</label>
                                        <select name="acreedor" class="form-select">
                                        <?php foreach($acreedores as $acreedor):?>

                                            <option value="<?=$acreedor['nombre'];?>"><?=$acreedor['nombre'];?></option>
                                            <?php endforeach;?>
                                        </select>
                                        <input name="moneda" value="DEUDA" type="hidden">

                                       <label class="mt-3">DETALLE</label>
                                        <textarea name="detalle"  class="form-control"></textarea>    
                                    </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary" style="background-color: #fc8c04 !important;border: #fc8c04 !important;">Pagar</button>
                </div>
            </form>

            </div>
            </div>
            </div>   


             <!-- modal historial -->
             <div class="modal fade" id="historialcaja" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-lg" role="document">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">ULTIMOS MOVIMIENTOS</h5>
                                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                </button>
                          </div>

                                    <div class="modal-body">
                                    <div class="row mb-2">
                                    <div class="col-1 bg-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search w-100" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                        </svg>
                                        </div>
                                        <div class="col-9 bg-white">
                                            <input type="text" placeholder="Buscar Por ej: deuda" onkeyup="buscarmovimiento()" class="form-control" id="buscadormovimiento">
                                        </div>
                                       
                                    
                                    </div>
                                    <div class="row mb-2">
                                    <div class="col-12 bg-white">
                                     
                                    <table class="table table-dark table-striped ">
                                    <thead>
                                        <tr>
                                        <th class="p-2 text-center m-2">ACREEDOR</th>
                                        <th class="p-2 text-center m-2">DETALLE</th>
                                             <th class="p-2 text-center m-2">TIPO</th>
                                             <th class="p-2 text-center m-2">FECHA</th>
                                             <th class="p-2 text-center m-2">MONTO</th>
                                             <th class="p-2 text-center m-2">ACCIÓN</th>


                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th class="p-2 text-center m-2">ACREEDOR</th>
                                        <th class="p-2 text-center m-2">DETALLE</th>
                                             <th class="p-2 text-center m-2">TIPO</th>
                                             <th class="p-2 text-center m-2">FECHA</th>
                                             <th class="p-2 text-center m-2">ACCIÓN</th>

                                        </tr>
                                    </tfoot>
                                    <tbody class="thead-light" id="movimientos">
                
                <?php if(isset($movimientos)):?>
                    <?php foreach($movimientos as $movimiento):?>

                                        <tr class="my-2 text-center blockquote">
                                        <td>
                                            <?= $movimiento['acreedor'];?>
                                            </td>
                                            <td>
                                            <?= $movimiento['detalle'];?>
                                            </td>
                                            <td>
                                                <?php if($movimiento['moneda']=='DEUDA'){
                                                    echo "DEUDA";
                                                }elseif($movimiento['ingreso']>$movimiento['egreso']){
                                                    echo "INGRESO";
                                                }elseif($movimiento['ingreso']<$movimiento['egreso']){
                                                    echo "EGRESO";
                                                }
                                                
                                                ;?>
                                            </td>
                                            <td>
                                            <?= $movimiento['fecha'];?>
                                            </td>
                                            
                                            <td>
                                            <?php if($movimiento['ingreso']>$movimiento['egreso']){
                                                    echo $movimiento['ingreso'];
                                                }elseif($movimiento['ingreso']<$movimiento['egreso']){
                                                    echo $movimiento['egreso'];
                                                };?>
                                            </td>                           
                                                 <?php if($movimiento['moneda']=='DEUDA'):?>
                                                 <td><button class="btn btn-warning my-2 mx-3" onclick="pagardeuda('<?=$movimiento['id'];?>')"><?=$movimiento['egreso'];?>   </button></td>
                                                 <?php endif;?>
                                        </tr>
                     <?php endforeach;?>
            
                <?php endif;?>
        
                                    </tbody>
                                </table>
                                    </div></div>
                                        </div>
                <div class="modal-footer">
                </div>

            </div>
            </div>
            </div>   
       <!-- modal advertencia -->
       <div class="modal fade" id="veradvertencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">ADVERTENCIA</h5>
                                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                </button>
                          </div>

                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-4 offset-4">
                                                <img src="<?=base_url;?>assets/img/fede.png" alt="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-10 offset-1">
                                                <p class="h5 text-dark" >Recuerda realizar un NUEVO EGRESO indicando el monto de la deuda abonada y el método de pago.</p>
                                            </div>
                                        </div> 
                                    </div>
                     </div>
                     </div>
                     </div>
<script type="text/javascript">
    function buscarmovimiento(){
        buscador=document.getElementById("buscadormovimiento").value
        var param = {
        "buscador": buscador,
        "bar":<?= $_SESSION['identity']->id;?>
      }
  $.ajax({
 
data:param,
url: 'https://undertake.ar/notificacionapi.php',
type:'POST',
success: function(pedidos){
    let html='';
        for(i=0;pedidos.length>=i;i++){
        html+='<tr><td>'+pedidos[i].acreedor+'</td><td>'+pedidos[i].detalle+'</td>';
                           
        if(pedidos[i].moneda==='DEUDA'){
            html+='<td>DEUDA</td>'
        }else
        if(pedidos[i].ingreso>pedidos[i].egreso){
            html+='<td>INGRESO</td>'
        }else 
        if(pedidos[i].ingreso<pedidos[i].egreso){
            html+='<td>EGRESO</td>'
        }
        html+='<td>'+pedidos[i].fecha+'</td>'

        if(pedidos[i].ingreso>pedidos[i].egreso){
            html+='<td>'+pedidos[i].ingreso+'</td>'
        }else
        if(pedidos[i].ingreso<pedidos[i].egreso){
            html+='<td>'+pedidos[i].egreso+'</td>'
        }
        if(pedidos[i].moneda==='DEUDA'){
            html+='<td><button class="btn btn-warning my-2 mx-3" onclick="pagardeuda('+pedidos[i].id+')">'+pedidos[i].egreso+'</button></td>'
        }
        html+='</tr>'

        
        document.getElementById("movimientos").innerHTML=html
    }

    }
})
    }
    function pagardeuda(id){
        var parametros = {
      "pagardeuda": id
      }
    $.ajax({

        data:parametros,
    url: 'https://undertake.ar/notificacionapi.php',
        type:'GET',
        success: function(r){
            document.getElementById("advertencia").click()
console.log(r)
        }
  })
    }
</script>




