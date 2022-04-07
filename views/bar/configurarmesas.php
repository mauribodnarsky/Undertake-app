<?php		require_once 'views/bar/gestion.php';?>
<div class="row py-2" style="background:#EFECF9;">
    <div class="col-12 text-left">
        <h5 style="color:#384DB9;font-weight:bold;font-size: 70px;">Configurar mesas y mozos</h5>
    </div>
</div>
<?php if(sizeof($mesas)==0):?>
<div class="row  justify-content-left " style="background: #C1E0F3;padding: 1em 0em;">
    <div class="col-5">
        <H6 style="color: #1A0556;font-weight: 600;font-size:2.5em">Cantidad de mesas</H6>
    </div>
    <div class="col-4">
        <form action="<?=base_url;?>bar/crearmesas" class="form-group row align-items-center" method="POST">
        <div class="col-3">
        <button onclick="restarcantidad()" type="button" class="btn btn-primary w-100"  style="width:120% !important;background: #1A0556;border: 1px solid #FFFFFF;color:white;">-</button>

        </div>
        <div class="col-3">
        <input type="number" id="cantidad" class="form-control text-center w-100" pattern="[0-9]{1,200} " style="width:120% !important;background: #1A0556;color:white;" value="0" name="cantidad" >

        </div>
        <div class="col-3">
        <button onclick="sumarcantidad()" type="button" class="btn btn-primary w-100" style="width:120% !important;background: #1A0556;border: 1px solid #FFFFFF;color:white;">+</button>
        </div>
        <div class="col-3">
        <button type="submit"  class="btn btn-secondary ml-5">Generar mesas</button>
        </div>
        </form>
    </div>

</div>
<?php endif;?>
<?php if(sizeof($mesas)!=0):?>
<div class="row  justify-content-left " style="background: #C1E0F3;padding: 1em 0em;">
    <div class="col-5">
        <H6 style="color: #1A0556;font-weight: 600;font-size:2.5em">Cantidad de mesas</H6>
    </div>
    <div class="col-4">
        <form action="<?=base_url;?>bar/crearmesas" class="form-group row align-items-center" method="POST">
        <div class="col-3">
        <button onclick="restarcantidad()" type="button" class="btn btn-primary w-100"  style="width:120% !important;background: #1A0556;border: 1px solid #FFFFFF;color:white;">-</button>

        </div>
        <div class="col-3">
        <input type="number" id="cantidad" class="form-control text-center w-100" pattern="[0-9]{1,200} " style="width:120% !important;background: #1A0556;color:white;" value="0" name="cantidad" >

        </div>
        <div class="col-3">
        <button onclick="sumarcantidad()" type="button" class="btn btn-primary w-100" style="width:120% !important;background: #1A0556;border: 1px solid #FFFFFF;color:white;">+</button>
        </div>
        <div class="col-3">
        <button type="submit"  class="btn btn-secondary ml-5">Agregar mesas</button>
        </div>
        </form>
    </div>

</div>
<?php endif;?>
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

<?php if(isset($mesas) && (is_array($mesas))):?>
    <div class="row">
        <div class="col-12" style="border-radius:7px;">
    <table class="table table-responsive ">
    <thead class="thead-light text-center" style="background: #1A0556;">
    <th style="font-weight: 500;font-family:'Inter';color:white;"> Número de mesa</th>
    <th style="font-weight: 500;font-family:'Inter';color:white;">Código de seguridad</th>
    <th style="font-weight: 500;font-family:'Inter';color:white;">Mozo a cargo</th>
    <th style="font-weight: 500;font-family:'Inter';color:white;">Modificar</th>

     </thead>
    <tbody>
<?php foreach($mesas as $mesa):?>

    <tr class=" justify-content-center bg-white text-center" style="border-radius:7px; border-top:4px  solid #0957CB;border-bottom:4px  solid #0957CB;">
        <td style="border-left: 5px  solid #0957CB;font-weight: 500;font-family:'Inter';color:black;"><?= 'Mesa '.$mesa['numero_mesa'] ;?></td>
        <td style="border-left: 5px  solid #0957CB;font-weight: 500;font-family:'Inter';color:black;"><?= $mesa['token'] ;?></td>
        <td style="border-left: 5px  solid #0957CB;border-right: 5px  solid #0957CB;font-weight: 500;font-family:'Inter';color:black;"><?= $mesa['mozo'] ;?></td>
        <td style="border-left: 5px  solid #0957CB;border-right: 5px  solid #0957CB;">
        <button onclick="editarmesa(<?= $mesa['id'].',`'.$mesa['numero_mesa'].'`,`'.$mesa['mozo'].'`,`'.$mesa['token'].'`';?>)" class="btn btn-secondary" data-toggle="modal" data-target="#editarmesa" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></button>
    <a href="<?=base_url?>bar/borrarmesa&mesa=<?= $mesa['id'];?>" class="btn btn-danger ml-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
</svg></a>
        </td>

    </tr>
   


<?php endforeach;?>
</tbody>
</table>
</div>
</div>
<?php endif;?>

<!-- Modal -->
<div class="modal fade" id="editarmesa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="num_mesa"></h5>
        <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="<?=base_url;?>bar/editarmesa" method="POST" class="row form-group" >
      <div class="modal-body">
        <div class="row form-group" >
                <div class="col-12">
                            <div class="row">
                                <div class="col-10 offset-1">
                                    <input type="hidden" name="mesa" id="mesaeditar"  >
                                  <label  class="registerlabel">Mozo</label>
                                  <input type="text"   name="mozo" id="mozoeditar"  class="form-control" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10 offset-1">
                                  <label  class="registerlabel">Codigo</label>
                                  <input type="text" id="tokeneditar"  name="codigo" required pattern="[0-9]{4}" class="form-control" >
                                </div>
                            </div>
                           
                </div>
        </div>
      </div>
                <div class="modal-footer">
                 
                        <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
            </form> 

    </div>
  </div>
</div>
<script type="text/javascript">
    function editarmesa(id,numero_mesa,mozo,token){
        console.log(id,numero_mesa,mozo,token)
        document.getElementById("mesaeditar").value=id
        document.getElementById("num_mesa").innerHTML="Editar mesa "+numero_mesa
        document.getElementById("mozoeditar").value=mozo
        document.getElementById("tokeneditar").value=token

}
</script>