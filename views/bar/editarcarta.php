<?PHP 		require_once 'views/bar/gestion.php';?>

<div class="row  py-2" style="background:#EFECF9;">
    <div class="col-12 text-left">
        <h5 style="color:#384DB9;font-weight:bold;font-size: 70px;">Editar menú(la carta)</h5>
    </div>
</div>
    <div class="row py-2 " style="background-color: rgba(228, 228, 228, 1);">
        <div class=" col-3 d-flex align-items-center justify-content-center" >
            <a data-toggle="modal" data-target="#creaproducto" class="btn btn-secondary" >Crear producto</a>
        </div>
       
        <div class="col-3 d-flex align-items-center justify-content-center" style="color: #000000;font-weight:600;font-size:3em;">
        <a class="btn btn-secondary " data-toggle="modal" data-target="#crearsubcategoria" >Crear subcategoria</a>

        </div>
    </div>
    <div class="row bg-white">

        <div class="col-12 col-md-6">
            <div class="row" style="background: #83B2F8;padding-bottom:3em;padding-top:3em;">
                <div class="col-12 text-center">
                    <h6 style="font-weight:700;font-size:2em;">MENÚ DE BEBIDAS</h6>
                </div>
            </div>
            <?php if(isset($bebidas) && (sizeof($bebidas)>0)) :?>

            <div class="row">
                <div class="col-12">

                <?php foreach ($bebidas as $bebida) :?>
                        <div class="row my-1" style="border-bottom: 1px;border-color: #1A0556 !important;">
                            <div class="col-7 offset-1" style="color:#1A0556 !important;display: flex; align-items: center;">
                                <?php if($bebida['categoria']==='PROMO'):?>
                                    <h6 style="color:red;font-weight:bold;display:inline-block;border-radius:25px;border:1px solid yellow;padding:3px;margin-right:2px;">PROMO  </h6>
                                <?php endif;?>
                                <h6 class="text-left " style="font-weight: bold;font-family:'Inter';">
                                    <?php echo $bebida['nombre']; ?>
                                </h6>
                            </div>
                            <div class="col-2 text-center " style="display: flex; align-items: center;color: #1A0556 !important;">
                                <h6> <?php echo '$' . $bebida['precio']; ?> </h6>
                            </div>
                            <div class="col-2" style="display: flex; align-items: center;">
                                <button onclick="editarproductobebida(<?= $bebida['id'] . ',`' . $bebida['nombre'] . '`,`' . $bebida['categoria'] . '`,`' . $bebida['precio'] . '`,`' . $bebida['descripcion'] . '`,' . $bebida['estado']; ?>)" data-toggle="modal" class="btn w-100 btn-danger bg-white " style="color:#1A0556;border-color:white !important;" data-target="#editarproductobebida">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg>
                                </button>
                              
                                
                            </div>
                        </div>
                        <hr style="color: #1A0556 !important;">
                    <?php endforeach; ?>

                </div>
            </div>
            <?php endif; ?>

        </div>

        <div class="col-12 col-md-6" style="border-left:rgba(125, 125, 125, 1) 5px solid;">
            <div class="row" style="background: #83B2F8;padding-bottom:3em;padding-top:3em;">
                <div class="col-12 text-center">

                    <h6 style="font-weight:700;font-size:2em;">MENÚ DE COMIDAS</h6>
                </div>
            </div>
            <?php if(isset($comidas) && (sizeof($comidas)>0)) :?>
            <div class="row">
                <div class="col-12">
                    <?php foreach ($comidas as $comida) :?>
                        <div class="row my-1" style="border-bottom: 1px;border-color: #1A0556 !important;">
                            <div class="col-7 offset-1" style="color:#1A0556 !important;display: flex; align-items: center;">
                            <?php if($comida['categoria']==='PROMO'):?>
                                <h6 style="color:red;font-weight:bold;display:inline-block;border-radius:25px;border:1px solid yellow;padding:3px;margin-right:2px;">PROMO  </h6>
                            <?php endif;?>
                                    <h6 class="text-left " style="font-weight: bold;font-family:'Inter';">
                                    <?php echo $comida['nombre']; ?>
                                    </h6>
                            </div>
                            <div class="col-2 text-center " style="display: flex; align-items: center;color: #1A0556 !important;">
                                <h6> <?php echo '$' . $comida['precio']; ?> </h6>
                            </div>
                            <div class="col-2" style="display: flex; align-items: center;">
                                <button onclick="editarproductocomida(<?= $comida['id'] . ',`' . $comida['nombre'] . '`,`' . $comida['categoria'] . '`,`' . $comida['precio'] . '`,`' . $comida['descripcion'] . '`,' . $comida['estado']; ?>)" data-toggle="modal" class="btn w-100 btn-danger bg-white " style="color:#1A0556;border-color:white !important;" data-target="#editarproductocomida">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg>
                                </button>
                              
                                
                            </div>
                        </div>
                        <hr style="color: #1A0556 !important;">
                    <?php endforeach; ?>

                </div>
            </div>
            <?php endif; ?>

        </div>

    </div><!-- Modal crear subcategoria -->
<div class="modal fade" id="crearsubcategoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear subcategoria</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url ?>bar/crearsubcategoria" method="POST">

                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 ">
                          
                            <div class="row">
                                <div class="col-8">
                                    <input type="text" name="subcategoria" class="form-control" style="background: #D9D9D9;" >

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary text-left" style="background-color: #83B2F8 !important;border-radius:11px;border: #83B2F8 !important;">Guardar cambios</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal crear producto -->
<div class="modal fade" id="creaproducto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear producto</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url ?>bar/crearproducto" method="POST">

                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 ">
                            <div class="row">
                                <div class="col-8">
                                    <label class="mt-3 form-label" style="color:#1A1A1A !important;font-size:0.9em;font-family:'Inter';">Tipo de producto </label>
                                    <select name="categoria" id="categoriaeditarcomida" value="COMIDA" class="form-select">
                                        <option value="COMIDA" id="comida">Comida</option>
                                        <option value="BEBIDA" id="bebida">Bebida</option>
                                        <option value="PROMO" id="promo">Promo</option>

                                    </select>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <label class="mt-3 form-label" style="color:#1A1A1A !important;font-size:0.9em;font-family:'Inter';">Subcategoria de producto</label>
                                    <select name="subcategoria" id="subcategoriaeditarcomida"  class="form-select">
                                        <?php foreach($subcategorias as $subcategoria):?>
                                            <option value="<?=$subcategoria['id'];?>"><?=$subcategoria['categoria'];?></option>
                                        <?php endforeach;?>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <label class="form-label" style="color:#1A1A1A !important;font-size:0.9em;font-family:'Inter';">Nombre del producto</label>
                                    <input type="text" name="nombre" class="form-control" required>
                                    <p style="color:#595959;font-size:0.8em;">Asegurate de que no sea igual que uno ya existente</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <label class="form-label " style="color:#1A1A1A !important;font-size:0.9em;font-family:'Inter';">Precio del producto</label>
                                    <input type="number" name="precio" class="form-control" required >
                                    <p style="color:#595959;font-size:0.8em;">Se mostrará en pesos argentinos(AR$)</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label  text-justify" style="font-size:0.9em;color:#1A1A1A !important;font-family:'Inter';">Descripción del producto. No olvides añadir los ingredientes.</label>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <textarea type="text" name="descripcion" class="form-control" style="background: #D9D9D9;" ></textarea>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="checkbox" class="form-checked" name="estado" >
                                    <label class="form-label  d-inline-block" style="font-size:0.9em;color:#1A1A1A !important;font-family:'Inter';">¿Mostrar producto en el menú online?</label>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary text-left" style="background-color: #83B2F8 !important;border-radius:11px;border: #83B2F8 !important;">Guardar cambios</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal eliminar producto -->
<div class="modal fade" id="eliminarproducto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Producto</h5>
        <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?=base_url;?>bar/borrarproducto" method="POST">
      <div class="modal-body">
      <h6 id="productoeliminar"></h6>
      <input type="hidden" name="ideliminar" id="ideliminar">
      </div>
      <div class="modal-footer">
        <button type="SUBMIT" class="btn btn-primary">Confirmar</button>
      </div>
    </div>
    </form>
  </div>
</div>
<script type="text/javascript">
    function eliminarproducto(id,nombre){
        document.getElementById("ideliminar").value=id
        document.getElementById("productoeliminar").innerHTML='¿Seguro desea Eliminar '+nombre+'?';
    }
</script>
<!-- modal editar producto -->
<div class="modal fade" id="editarproductocomida" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar producto</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url ?>bar/editarproducto" method="POST">

                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 ">
                            <div class="row">
                                <div class="col-8">
                                    <input type="hidden" name="id" id="ideditar">
                                    <label class="mt-3 form-label" style="color:#1A1A1A !important;font-size:0.9em;font-family:'Inter';">Tipo de producto </label>
                                    <select name="categoria" id="categoriaeditar" value="COMIDA" class="form-select">
                                        <option value="COMIDA" id="comida">Comida</option>
                                        <option value="BEBIDA" id="bebida">Bebida</option>
                                        <option value="PROMO" id="promo">Promo</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <label class="mt-3 form-label" style="color:#1A1A1A !important;font-size:0.9em;font-family:'Inter';">Subcategoria de producto</label>
                                    <select name="subcategoria" id="subcategoriaeditarcomida"  class="form-select">
                                        <?php foreach($subcategorias as $subcategoria):?>
                                            <option value="<?=$subcategoria['id'];?>"><?=$subcategoria['categoria'];?></option>
                                        <?php endforeach;?>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <label class="form-label" style="color:#1A1A1A !important;font-size:0.9em;font-family:'Inter';">Nombre del producto</label>
                                    <input type="text" required name="nombre" class="form-control" id="nombreeditar">
                                    <p style="color:#595959;font-size:0.8em;">Asegurate de que no sea igual que uno ya existente</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <label class="form-label " style="color:#1A1A1A !important;font-size:0.9em;font-family:'Inter';">Precio del producto</label>
                                    <input type="number" required name="precio" class="form-control" id="precioeditar">
                                    <p style="color:#595959;font-size:0.8em;">Se mostrará en pesos argentinos(AR$)</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label  text-justify" style="font-size:0.9em;color:#1A1A1A !important;font-family:'Inter';">Descripción del producto. No olvides añadir los ingredientes.</label>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <textarea type="text" name="descripcion" class="form-control" style="background: #D9D9D9;" id="descripcioneditar"></textarea>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="checkbox" class="form-checked" name="estado" id="estadoeditar">
                                    <label class="form-label  d-inline-block" style="font-size:0.9em;color:#1A1A1A !important;font-family:'Inter';">¿Mostrar producto en el menú online?</label>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary text-left" style="background-color: #83B2F8 !important;border-radius:11px;border: #83B2F8 !important;">Guardar cambios</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- modal editar producto bebida -->
<div class="modal fade" id="editarproductobebida" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar producto Bebida</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url ?>bar/editarproducto" method="POST">

                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 ">
                            <div class="row">
                                <div class="col-8">
                                    <input type="hidden" name="id" id="ideditarbebida">
                                    <label class="mt-3 form-label" style="color:#1A1A1A !important;font-size:0.9em;font-family:'Inter';">Tipo de producto </label>
                                    <select name="categoria" id="categoriaeditarbebida" value="BEBIDA" class="form-select">
                                        <option value="BEBIDA" id="bebida">Bebida</option>
                                        <option value="COMIDA" id="comida">Comida</option>
                                        <option value="PROMO" id="promo">PROMO</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <label class="mt-3 form-label" style="color:#1A1A1A !important;font-size:0.9em;font-family:'Inter';">Subcategoria de producto</label>
                                    <select name="subcategoria" id="subcategoriaeditarcomida"  class="form-select">
                                        <?php foreach($subcategorias as $subcategoria):?>
                                            <option value="<?=$subcategoria['id'];?>"><?=$subcategoria['categoria'];?></option>
                                        <?php endforeach;?>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <label class="form-label" style="color:#1A1A1A !important;font-size:0.9em;font-family:'Inter';">Nombre del producto</label>
                                    <input type="text" name="nombre" class="form-control" id="nombreeditarbebida">
                                    <p style="color:#595959;font-size:0.8em;">Asegurate de que no sea igual que uno ya existente</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <label class="form-label " style="color:#1A1A1A !important;font-size:0.9em;font-family:'Inter';">Precio del producto</label>
                                    <input type="number" name="precio" class="form-control" id="precioeditarbebida">
                                    <p style="color:#595959;font-size:0.8em;">Se mostrará en pesos argentinos(AR$)</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label  text-justify" style="font-size:0.9em;color:#1A1A1A !important;font-family:'Inter';">Descripción del producto. No olvides añadir los ingredientes.</label>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <textarea type="text" name="descripcion" class="form-control" style="background: #D9D9D9;" id="descripcioneditarbebida"></textarea>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="checkbox" class="form-checked" name="estado" id="estadoeditarbebida">
                                    <label class="form-label  d-inline-block" style="font-size:0.9em;color:#1A1A1A !important;font-family:'Inter';">¿Mostrar producto en el menú online?</label>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <div class="row w-100">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary text-left" style="background-color: #83B2F8 !important;border-radius:11px;border: #83B2F8 !important;">Guardar cambios</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    function editarproductocomida(id,nombre,categoria,precio,descripcion,estado) {
        console.log(nombre)

        document.getElementById("ideditar").value = id
        document.getElementById("nombreeditar").value = nombre
        document.getElementById("precioeditar").value = precio
        document.getElementById("descripcioneditar").value = descripcion
        if(estado==1){
        document.getElementById("estadoeditar").checked = true
        }
        if(categoriab==='PROMO'){
        document.getElementById("categoriaeditarcomida").value = 'PROMO'
        }



    }

    function editarproductobebida(idb,nombreb,categoriab,preciob,descripcionb,estadob) {
        document.getElementById("ideditarbebida").value = idb
        document.getElementById("nombreeditarbebida").value = nombreb
        document.getElementById("precioeditarbebida").value = preciob
        document.getElementById("descripcioneditarbebida").value = descripcionb
        if(estadob==1){
        document.getElementById("estadoeditarbebida").checked = true
        }
        if(categoriab==='PROMO'){
        document.getElementById("categoriaeditarbebida").value = 'PROMO'
        }


    }
</script>


<!-- Modal -->
<div class="modal fade" id="crearpromocion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva promoción</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="<?=base_url;?>bar/crearproducto" method="POST" class="row form-group" >
      <div class="modal-body">
        <div class="row form-group" >
                <div class="col-12">
                            <div class="row">
                                <div class="col-10 offset-1">
                                  <label  class="registerlabel">Nombre de la promoción</label>
                                  <input type="text" pattern="[A-Z a-z]{3,50}" title="ingresa un nombre compuesto por mayusculas y minusculas, entre 3 y 50 caracteres"  name="nombre" class="form-control" >
                                </div>
                                <input type="hidden" name="categoria" value="PROMO">
                            </div>
                            <div class="row">
                                    <div class="col-10 offset-1">
                                      <label  class="registerlabel">Precio </label>
                                     <input type="number" min="0.00" step="1"   name="precio" required class="form-control" >
                                    </div>
                            </div>
                           <div class="row">
                                    <div class="col-10 offset-1">
                                        <label  class="registerlabel">Descripcion</label>
                                        <textarea type="text" pattern="[A-Z a-z]{3,200}"  name="descripcion" class="form-control" ></textarea>
                                    </div>
                          </div>
                          <div class="row mt-2">
                                    <div class="col-4 offset-8">
                                    <button type="submit" class="btn btn-primary" style="background-color: #16184B;border-color:#16184B;">Guardar</button>
 </div>
                          </div>
                </div>
        </div>
      </div>
    </form> 
              
            </div>
    
    </div>
  </div>
</div>

<script type="text/javascript">
    document.body.style.backgroundColor = 'white';
</script>
<?php require_once 'views/bar/gestion.php'; ?>