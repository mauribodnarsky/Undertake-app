<div  style="background: #16184B;height:100%; display:grid;">
	<div class="row mt-4">
		<div class="col-9 offset-1">
			<div class="row">
				<div class="col-12 col-md-6 bg-white" style="border-radius:16px 0px 0px 13px;">
					<div class="row">
						<div class="col-2 col-sm-4 offset-1">
							<img src="<?=base_url;?>/assets/img/loginbar.png" alt="LOGO" style="margin-top: 2em;margin-bottom:3em;" >
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<h2 style="font-family: 'DM Sans';font-style: normal;font-weight: 500;font-size: 35px;line-height: 41px;color: rgba(181, 181, 181, 0.6);" >Crear cuenta</h2>
<p style="font-family: 'DM Sans';font-style: normal;font-weight: normal;font-size: 13px;margin-top:2em;margin-bottom:3em;

color: #7B7B7B;">Con establecimiento nos referimos a Bar,Restaurante,Pub o casa de comida</p>
						</div>
					</div>
					<form onkeyup="verificar()" action="<?=base_url?>bar/registrar" method="POST" class="row form-group">
						<div class="col-12">
							<div class="row">
								<div class="col-12">
								<label  class="registerlabel">
								Nombre(s) del responsable del establecimiento
								</label>
								<input type="text" pattern="[A-Z]{3,50}" id="nombre_responsable"   name="nombre_responsable" class="form-control" >
								</div>
							</div>
							<div class="col-12">
								<label  class="registerlabel" >
								Apellido(s) del responsable del establecimiento
								</label>
								<input type="text"   pattern="[A-Z]{3,50}"  class="form-control" id="apellido_responsable" name="apellido_responsable">
							</div>
							<div class="col-12">
								<label  class="registerlabel">
								D.N.I. del responsable del establecimiento
								</label>
								<input type="text" class="form-control" name="dni_responsable"  id="dni_responsable" required pattern="[0-9]{8}"  >
							</div>
							<div class="col-12">
								<label  class="registerlabel">
								Nombre comercial del establecimiento
								</label>
								<input type="text"  id="bar"   name="bar" class="form-control" >
								</div>
							<div class="col-12">
								<label  class="registerlabel">
								País donde se ubica la establecimiento  
								</label>
								<input type="text" class="form-control"  id="pais" pattern="[a-z A-Z]{3,50}"  name="pais" required >	
							</div>
							<div class="col-12">
								<label  class="registerlabel">
								Provincia/Estado donde se ubica la establecimiento
								</label>
								<input type="text" class="form-control"   minlength="3" id="provincia" pattern="[a-z A-Z]{3,50}"   name="provincia">
							</div>
							<div class="col-12">
								<label  class="registerlabel">Ciudad donde se ubica el establecimiento</label>
								<input  required type="text" class="form-control" name="ciudad"  id="ciudad" pattern="[a-z A-Z]{3,50}" >
							</div>
							<div class="col-12">
								<label  class="registerlabel">
								Calle y Altura donde se ubica el establecimiento
								</label>
								<input required name="direccion" type="text" class="form-control" id="direccion"    >
							</div>
							<div class="col-12">
								<label  class="registerlabel">
								Correo electronico
								</label>
								<input required type="email" name="correo" class="form-control" id="correo">
							</div>
							<?php if(isset($errorcorreo)):?>
                <div class="col-12">
                  <p class="text-danger" style="font-weight:bold;"><?=$errorcorreo;?></p>
                </div>
              <?php endif;?> 
							<div class="col-12">
								<label  class="registerlabel">
								Repetir	correo electronico
								</label>
								<input required type="text" name="correo2" class="form-control" id="correo2">
							</div>
							<div class="col-12">
								<label  class="registerlabel">
									Celular (incluir código de país y área)
								</label>
								<input required type="tel" pattern="[0-9]{10,25}" name="telefono" id="telefono" class="form-control" >
							</div>
							<div class="col-12">
								<label  class="registerlabel" >
								Contraseña
								</label>
								<input required type="password" name="password" class="form-control"  id="password" >
							</div>
							<div class="col-12">
								<p  class="registerlabel" >
								ingresa un password de al menos 8 carácteres
							</p>
							</div>
							<div class="col-12">
								<label  class="registerlabel">
								Repetir contraseña
								</label>
								<input required type="password" name="password2" class="form-control" id="password2" >
							</div>
							<div class="col-12 form-check mt-3">
							<input required type="checkbox" onchange="verificar()" name="terminos" class="form-check-input" id="terminos" >
								<label class="form-check-label" style="font-family:Inter;font-style:normal;font-weight: normal;font-size: 1em;color: #152536;" >Acepto los  <a style="font-family:Inter;font-style:normal;font-weight: normal;font-size: 1em;color: #152536;text-decoration: underline;line-height:5%;"> términos y condiciones<a></a></label>
							</div>
							<div class="col-12">
								<input type="submit" disabled class="btn btn-primary py-2 px-4 my-4" style="border-radius: 25px;" id="submit" value="CREAR CUENTA">
							</div>
						</div>
					</form>
				</div>
				<div class="col-12 col-md-6" style="background: linear-gradient(180deg, #384DB9 -15.6%, #25A2C5 118.21%);
border-radius: 0px 22.5px 22.5px 0px;
transform: matrix(1, 0, 0, -1, 0, 0);">

				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" >
		function verificar(){

			let  nombre=document.getElementById("nombre_responsable").value;
			

			let  apellido_responsable=document.getElementById("apellido_responsable").value;
			let  dni_responsable=document.getElementById("dni_responsable").value;
			let  pais=document.getElementById("pais").value;
			let  bar=document.getElementById("bar").value;
			let  provincia=document.getElementById("provincia").value;
			let  ciudad=document.getElementById("ciudad").value;
			let  direccion=document.getElementById("direccion").value;
			let  correo=document.getElementById("correo").value;
			let  correo2=document.getElementById("correo2").value;
			let  password=document.getElementById("password").value;
			let  password2=document.getElementById("password2").value;
			let  telefono=document.getElementById("telefono").value;
			let  terminos=document.getElementById("terminos").checked;
			if((password2==password)  && (correo==correo2) && (terminos==true) && (password.length>7) && (password2.length>7)){
				document.getElementById("submit").disabled=false
			}else{
				document.getElementById("submit").disabled=true

			}	
			
		}
		
</script>
