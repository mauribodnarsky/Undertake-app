<div  style="background: #16184B;height:100%; display:grid;">
	<div class="row mt-4">
		<div class="col-md-9 col-12 offset-md-1">
			<div class="row">
				<div class="col-12  bg-white" style="border-radius:16px 0px 0px 13px;">
					<div class="row" style="background: #7749F8;">
						<div class="col-md-7 col-12">
							<div class="row mt-5">
								<div class="col-10 offset-1 text-left">
							<h3 style="font-family: 'Inter';font-style: normal;font-weight: 800;color: #FFFFFF;letter-spacing:1px;word-spacing:0.4em;" id="titulo" >¡Gracias por tu visita!</h3>
								</div>
							</div>
							<div class="row mt-1">
								<div class="col-10 offset-1">
							<h4 style="font-family: 'DM Sans';font-style: normal;font-weight: 500;color: rgba(181, 181, 181, 0.6);font-size:1.2em;letter-spacing:1px;word-spacing:11px;" >Soy Fede, tu mozo virtual <br> Para atenderte necesito<br> estos datos por favor ↓.</h4>
							</div>
							</div>
						</div>
							
						<style>
							#titulo::first-letter{
 							 font-size: 1.8rem;
							}
							
							#titulo{
 							 font-size: 1.7rem;
							}
						</style>
						<div class="col-md-5 col-4 offset-8">
							<img src="<?=base_url;?>/assets/img/fedebienvenida.png" alt="LOGO" class="w-100" style="margin-top: 1em;margin-bottom:3em;" >
						</div>
					</div>
					<form onkeyup="verificar()" action="<?=base_url?>bar/carta" method="POST" class="row form-group">
						<div class="col-8 offset-1">
							<div class="row">
								<div class="col-12">
								<label  class="registerlabel" >
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
										<?php foreach($mesas as $mesa):?>
										<option value="<?= $mesa['id'];?>"><?= $mesa['numero_mesa'];?></option>
								
										<?php endforeach;?>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									
									<input type="hidden" name="bar" value="<?=$bar;?>" >
									<label  class="registerlabel" >
									¿Cual es el código de tu mesa?
									</label>
									<input type="text" pattern="[a-z A-Z 0-9]{4,200}" required class="form-control" name="token" >
									<?php if(isset($tokenincorrecto)):?>
										<?=$tokenincorrecto;?>
									<?php endif;?>
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
