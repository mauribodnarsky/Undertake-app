<div class="row">
    <div class="col-4 offset-4">
        <a href="<?=base_url?>usuario/logout" class="btn btn-primary w-100">SALIR</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table class="table table-dark">
            <thead class="table-light">
                <th>BAR</th>
                <th>DIRECCION</th>
                <th>NOMBRE RESPONSABLE</th>
                <th>TELEFONO</th>
                <th>CORREO</th>
                <th>MEMBRESIA</th>
                <th>EDITAR</th>
                <th>BORRAR</th>
            </thead>
            <tbody>
                <?php foreach($bares as $bar):?>
                    <tr>
                        <td><?=$bar['bar'];?></td>
                        <td><?=$bar['direccion'];?></td>
                        <td><?=$bar['nombre_responsable'];?></td>
                        <td><?=$bar['telefono'];?></td>
                        <td><?=$bar['correo'];?></td>
                        <td><?=$bar['membresia'];?></td>
                        <td> <button class="btn btn-success" data-toggle="modal" data-target="#verbar" onclick="<?php echo "editarbar("."`".$bar['id']."`,`".$bar['bar']."`,`".$bar['direccion']."`,`".$bar['nombre_responsable']."`,`".$bar['telefono']."`,`".$bar['correo']."`,`".$bar['membresia']."`)" ;?>"> EDITAR </button> </td>
                        <td> <a class="btn btn-danger" href="<?=base_url."usuario/borrarbar&id=".$bar['id'];?>">BORRAR</a> </td>

                    </tr>
                    <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal EDITAR-->
<div class="modal fade" id="verbar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="descripcionLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
      <div class="modal-body">
        <div class="row">
          <div class="col-10 offset-1">
          <h5 style="font-family: 'Inter';font-style: normal;font-weight: 700;font-size: 29px;" >Ingresa los montos<h5>
          </div>        
        </div>
        
        <div class="row mt-2">
          <div class="col-12">
               <label id="totalapagar"></label>
          </div>
        </div>
        <form action="<?=base_url;?>usuario/editarbar" method="POST" class="row form-group">
          <div class="col-12">
            <div class="row mt-2">
              <div class="col-12">
                  <label >BAR</label>
                  <input type="text" class="form-control" id="editarbar" name="bar">
                  <input type="hidden" class="form-control" id="editarid" name="id">

              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                  <label >DIRECCION</label>
                  <input type="text" class="form-control" id="editardireccion" name="direccion">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                  <label >RESPONSABLE</label>
                  <input type="text" class="form-control" id="editarresponsable" name="responsable">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                  <label >TELEFONO</label>
                  <input type="text" class="form-control" name="telefono" id="editartelefono">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                  <label >CORREO</label>
                  <input type="text" class="form-control" name="correo" id="editarcorreo">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                  <label >MEMBRESIA</label>
                  <input type="date" class="form-control" name="membresia" id="editarmembresia">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
              

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
function editarbar(id,bar,direccion,responsable,telefono,correo,membresia){
  document.getElementById("editarbar").value=bar
  document.getElementById("editarid").value=id

  document.getElementById("editardireccion").value=direccion
  document.getElementById("editarresponsable").value=responsable
  document.getElementById("editarcorreo").value=correo
  document.getElementById("editarmembresia").value=membresia
  document.getElementById("editartelefono").value=telefono

}
</script>