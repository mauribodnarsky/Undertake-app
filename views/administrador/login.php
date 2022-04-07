<div  style="background: #16184B;height:100%; display:grid;">
	<div class="row mt-4">
		<div class="col-9 offset-1">
			<div class="row">
				<div class="col-12 bg-white" style="border-radius:16px 0px 0px 13px;">
					<div class="row">
						<div class="col-9 offset-1">
							<img src="<?=base_url;?>/assets/img/loginbar.png" alt="LOGO" style="margin-top: 2em;margin-bottom:3em;" >
						</div>
					</div>
					<div class="row">
						<div class="col-9 offset-1">
							<h2 style="font-family: 'DM Sans';font-style: normal;font-weight: 500;font-size: 35px;line-height: 41px;color: rgba(181, 181, 181, 0.6);" >Iniciar sesión</h2>
<p style="font-family: 'DM Sans';font-style: normal;font-weight: normal;font-size: 13px;margin-top:2em;margin-bottom:3em;">

						</div>
					</div>
					<form onkeyup="verificar()" action="<?=base_url?>usuario/login" method="POST" class="row form-group">
						<div class="col-9 offset-1">
							<div class="row">
								<div class="col-7">
								<label  class="registerlabel">
								Usuario
								</label>
								<input type="text"   name="nombre" class="form-control" >
								</div>
							</div>
							<div class="row">
							<div class="col-7">
								<label  class="registerlabel" >
								Contraseña
								</label>
								<input required type="password" name="password" class="form-control" >
							</div>
							</div>
							<div class="row">
								<div class="col-7">
									<a style="font-family: 'DM Sans';font-style: normal;font-weight: normal;font-size: 13px;margin-top:2em;margin-bottom:3em;text-decoration:underline;color: #7B7B7B;">Olvidé la contraseña</a>
								</div>
							</div>
							<div class="row mt-2">
							<div class="col-7">
								<input type="submit" class="btn btn-primary py-2 px-4 my-4" style="background: #0957CB;border-radius: 25px;" id="submit" value="Ingresar">
							</div>
							</div>
							
						</div>
					</form>
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
