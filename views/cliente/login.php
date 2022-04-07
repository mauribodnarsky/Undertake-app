<div  style="background: #16184B;height:100%; display:grid;">
	<div class="row mt-4">
		<div class="col-9 offset-1">
			<div class="row">
				<div class="col-12  bg-white" style="border-radius:16px 0px 0px 13px;">
					<div class="row">
						<div class="col-7 offset-1">
							<h3 style="font-family: 'DM Sans';font-style: normal;font-weight: 500;font-size: 35px;line-height: 41px;color: rgba(181, 181, 181, 0.6);" >¡Gracias por tu visita!</h3>
							<h4 style="font-family: 'DM Sans';font-style: normal;font-weight: 500;font-size: 35px;line-height: 41px;color: rgba(181, 181, 181, 0.6);" >Para Atenderte necesitamos algunos datos.</h4>
						
						</div>
							
						<div class="col-4">
							<img src="<?=base_url;?>/assets/img/loginbar.png" alt="LOGO" style="margin-top: 2em;margin-bottom:3em;" >
						</div>
					</div>
					<form onkeyup="verificar()" action="<?=base_url?>bar/iniciarsesion" method="POST" class="row form-group">
						<div class="col-8 offset-1">
							<div class="row">
								<div class="col-12">
								<label  class="registerlabel">
									¿Como es tu nombre?
								</label>
								<input type="text" required  name="cliente" class="form-control" >
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<label  class="registerlabel" >
									¿Cual es el número de tu mesa?
									</label>
									<select required type="number" name="mesa" class="form-control">
										<option value="1">1</option>
										<option value="2">2</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<label  class="registerlabel" >
									¿Cual es el código de tu mesa?
									</label>
									<input type="text" pattern="[a-z A-Z]{4,8}" name="token" >
								</div>
							</div>
							
							<div class="row">
								<div class="col-12">
									<input type="submit" class="btn btn-primary py-2 px-4 my-4" style="border-radius: 25px;background: #0957CB;" value="Ingresar">
								</div>
							</div>
						
						</div>
					</form>
				</div>
				<div class="col-12 col-md-6" style="background: linear-gradient(180deg, #384DB9 -15.6%, #453090 118.21%);">

				</div>
			</div>
		</div>
	</div>
</div>
