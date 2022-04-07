<?php
require_once 'models/bar.php';
require_once 'models/producto.php';
require_once 'models/mesa.php';
require_once 'models/valoracion.php';
require_once 'models/promocion.php';
require_once 'models/caja.php';
require_once 'models/pedido.php';
require_once 'models/comanda_cabecera.php';
use Endroid\QrCode\QrCode;

class barController{
	public function landing(){
		$objetobar=new Bar();
		$bares=$objetobar->getAll();
		require_once 'views/layout/landing.php';
	}
	public function iniciarsesion(){
		// Identificar al usuario
		// Consulta a la base de datos
		$bar = new Bar();
		if(isset($_POST['correo']) && $_POST['password']){
		$bar->setCorreo($_POST['correo']);
		$password=$_POST['password'];
		$identity = $bar->login($password);

		if(is_object($identity)){
			$_SESSION['identity'] = $identity;
			$objmesa=new Mesa(); 		
			$bar=$_SESSION['identity']->id;
			$objmesa->setBar($bar);
			$mesas=$objmesa->getAll();
			require_once 'views/bar/configurarmesas.php';
		
			
		}
		else{
			if($identity==="no existe cuenta con este correo"){
				$error="no existe cuenta con este correo";
			}
			if($identity==="password incorrecto"){
				$error="password incorrecto";
			}
		require_once "views/bar/login.php";
		}

	}else{
		require_once "views/bar/login.php";

	}
}
	public function nuevo(){
		
		require_once "views/bar/registrar.php";

	}
	public function tablero(){
		if(Utils::isAdmin()){
		$objetomesa=new Mesa();
		$objetomesa->setBar($_SESSION['identity']->id);
		$mesas=$objetomesa->getAll();
		require_once 'views/bar/tablero.php';
	}
}
public function valoraciones(){
	if(Utils::isAdmin()){
	$objvaloracion=new Valoracion();
	$objvaloracion->setBar($_SESSION['identity']->id);
	$valoraciones=$objvaloracion->getAll();
	require_once 'views/bar/valoraciones.php';
}
}
	public function login(){
			require_once 'views/bar/login.php';
	}
	public function editarcarta(){
		if(Utils::isAdmin()){
		$objetobar=new Bar();
		$objetobar->setId($_SESSION['identity']->id);
		$bebidas=$objetobar->obtenerbebidas();
		$comidas=$objetobar->obtenercomidas();
		$objetoproducto=new Producto();
		$id=$_SESSION['identity']->id;
		$objetoproducto->setBar($id);
		$productos=$objetoproducto->getAll();
		$subcategorias=$objetoproducto->obtenersubcategorias();
		
		require_once 'views/bar/editarcarta.php';
	}
}
public function crearmesas(){
	if(Utils::isAdmin()){	
	$cantidad=$_POST['cantidad'];
	$bar=$_SESSION['identity']->id;
	
	$objmesa=new Mesa();
	$objmesa->setBar($bar);
	$objmesa->setEstado("DESOCUPADA");
	$objmesa->setMozo("");
	$verificarmaxmesa=$objmesa->max();
	if($verificarmaxmesa!=false){
		$num=$verificarmaxmesa+1;

	}else{
		$num=1;

	}
	for($i=1;$i<=$cantidad;$i++){
		$objmesa->setNumero_mesa($num);

		/* Generar token*/
		$cadena = $_SESSION['identity']->bar;
		$numerorandom=rand(0000,9999);
		$objmesa->setToken($numerorandom);
		$objmesa->save();
		$num=$num+1;

	}

	header("Location:".base_url."bar/configurarmesas");
	die();

	}
}

public function editarmesa(){
	if(Utils::isAdmin()){
		$mozo=$_POST['mozo'];
		$codigo=$_POST['codigo'];

		$mesa=$_POST['mesa'];
		$objmesa=new Mesa();
		$objmesa->setId($mesa);
		$objmesa->setToken($codigo);

		$objmesa->setMozo($mozo);
		$objmesa->edit();
		header("Location:".base_url."bar/configurarmesas");
		die();
	}

}
	public function configurarmesas(){
		if(Utils::isAdmin()){
	$objmesa=new Mesa(); 		
	$bar=$_SESSION['identity']->id;
	$objmesa->setBar($bar);
	$mesas=$objmesa->getAll();
	$verificarmaxmesa=$objmesa->max();
	if($verificarmaxmesa!=false){
		$maxmesa=$verificarmaxmesa;

	}else{
		$maxmesa=0;

	}
		require_once 'views/bar/gestion.php';

		require_once 'views/bar/configurarmesas.php';
	}
}
	public function ventas(){
		if(Utils::isAdmin()){
		$objbar=new Bar();
		$id=$_SESSION['identity']->id;
		$objbar->setBar($id);
		$ventassemana=$objbar->ventasultimasemana();
		$ventasmes=$objbar->ventasultimomes();
		$ventasanual=$objbar->ventasultimoano();

		require_once 'views/bar/gestion.php';
		require_once 'views/bar/ventas.php';
		}
	}
	public function configuracion(){
		require_once 'views/bar/gestion.php';
		require_once 'views/bar/configuracion.php';

	}
	public function ayudaysoporte(){
		require_once 'views/bar/ayuda.php';
	}
	public function vercarta(){

		if((isset($_GET['bar'])) || (isset($_POST['bar']))){
			if(isset($_GET['bar'])){
				$idbar=$_GET['bar'];
			}	
			if(isset($_POST['bar'])){
					$idbar=$_POST['bar'];
			}	
			if(isset($_SESSION['comanda_cabecera']['cliente'])){
			$objetobar=new Bar();
			$objetobar->setId($idbar);
			$promociones=$objetobar->obtenerpromociones($idbar);
			$objetobar->setEstado(1);
			$_SESSION['comanda_cabecera']['bar']=$idbar;
			require_once 'views/cliente/carta.php';
			}
			else{
			$mesa=new Mesa();
			$mesa->setBar($idbar);
			$mesas=$mesa->getAll();
			$bar=$idbar;
			require_once 'views/cliente/vercarta.php';
			}
	
}
}
public function cerrarsesion(){
	$bar=$_SESSION['comanda_cabecera']['bar'];
	session_destroy();
	header("Location:".base_url."bar/vercarta&bar=".$bar);
	die();
}
public function valorarexperiencia(){
	$valoracion=new Valoracion();
	$bar=$_SESSION['comanda_cabecera']['bar'];
	$experienciabar=$_POST['experienciabar'];
	$comentariobar=$_POST['comentariobar'];
	$experienciaunder=$_POST['experienciaunder'];
	$comentariounder=$_POST['comentariounder'];
	$valoracion->setExperienciabar($experienciabar);
	$valoracion->setComentariobar($comentariobar);
	$valoracion->setExperienciaunder($experienciaunder);
	$valoracion->setExperienciaunder($comentariounder);
	$valoracion->setBar($bar);
	$valoracion->save();
	session_destroy();
	header("Location:".base_url."bar/vercarta&bar=".$bar);
	die();
}
	public function destruir(){
		session_destroy();
		header("Location:".base_url);
		die();
	}
	public function carta(){
		if((isset($_POST['cliente'])) && (isset($_POST['bar'])) && (isset($_POST['mesa'])) && (isset($_POST['token']))){
			$cliente=$_POST['cliente'];
			$bar=$_POST['bar'];
			$token=$_POST['token'];
			$_SESSION['comanda_cabecera']['bar']=$bar;
			$mesa=$_POST['mesa'];
			$_SESSION['comanda_cabecera']['mesa_id']=$mesa;
	/* crear comanda*/
	$objetocomanda=new Comanda_cabecera();
				
	$objetocomanda->setBar($bar);
	$objetocomanda->setMesa($mesa);
	$objetocomanda->setcliente($cliente);
	$objetocomanda->setToken($token);
	$objetocomanda->setCliente($cliente);

	
	$objmesa=new Mesa();
	$objmesa->setBar($bar);
	$objmesa->setToken($token);
	$objmesa->setNumero_mesa($mesa);
	$verificartoken=$objmesa->verificartoken();

	$log=isset($_SESSION['comanda_cabecera']['cliente']);
			if(is_array($verificartoken) && $log==false){
					/* obtener carta*/
					$objetobar=new Bar();
					$objetobar->setId($bar);
					$objetobar->setEstado(1);
			
				
			if($verificartoken['estado']=='OCUPADA'){
					/* agregar cliente a comanda*/
					$comanda_cabecera=$objetocomanda->seleccionarmesa();
					var_dump($comanda_cabecera);die();

					$objetocomanda->guardarcliente($comanda_cabecera['id']);
					$_SESSION['comanda_cabecera']=$comanda_cabecera;
					$_SESSION['comanda_cabecera']['cliente']=$cliente;
					$_SESSION['comanda_cabecera']['bar']=$bar;

					header("Location:".base_url."bar/vercarta&bar=".$bar);
					die();
									
				}
				elseif($verificartoken['estado']=='DESOCUPADA'){
					$objetocomanda->setEstado("ABIERTA");
					$abrirmesa=$objetocomanda->abrirmesa();
					if($abrirmesa){
						$objmesa->setEstado("OCUPADA");
						$objmesa->editarestado();
						$comanda_cabecera=$objetocomanda->seleccionarmesa();
						$_SESSION['comanda_cabecera']=$comanda_cabecera;
						$_SESSION['comanda_cabecera']['cliente']=$cliente;
						$_SESSION['comanda_cabecera']['bar']=$bar;
								/* obtener carta*/
						$objetobar=new Bar();
						$objetobar->setId($bar);
						$objetobar->setEstado(1);
					
					

						header("Location:".base_url."bar/vercarta&bar=".$bar);
						die();
					}

									
				}

			}
			if(is_array($verificartoken) && $verificartoken['estado']=='DESOCUPADA'){
				$objetocomanda->setEstado("ABIERTA");
				$abrirmesa=$objetocomanda->abrirmesa();
							/* obtener carta*/
							$_SESSION['comanda_cabecera']['cliente']=$cliente;
							$_SESSION['comanda_cabecera']['bar']=$bar;
							$objetobar=new Bar();
							$objetobar->setId($bar);
							$objetobar->setEstado(1);
							
						
				if($abrirmesa==true){
					$objmesa->setEstado("OCUPADA");
					$objmesa->editarestado();
					$comanda_cabecera=$objetocomanda->seleccionarmesa();
					$_SESSION['comanda_cabecera']['cliente']=$cliente;
					$_SESSION['comanda_cabecera']['bar']=$bar;
					$_SESSION['comanda_cabecera']=$comanda_cabecera;
					$_SESSION['comanda_cabecera']['mesa_id']=$mesa;
					header("Location:".base_url."bar/vercarta&bar=".$bar);
					die();
				}
								
			}
			if($verificartoken==false){
				$tokenincorrecto="<p style=\"color:red;font-weight:bold;\">Código incorrecto</p>";
				$mesa=new Mesa();
				$mesa->setBar($bar);
				$mesas=$mesa->getAll();
				require_once 'views/cliente/vercarta.php';
			}

		}else{
			
		
			header("Location:".base_url."bar/vercarta&bar=".$bar);
			die();
		}
	}
	public function guardarpago(){
		if(Utils::isAdmin()){
		$monto=$_POST['monto'];
		$moneda=$_POST['moneda'];
		$acreedor=$_POST['acreedor'];
		$detalle=$_POST['detalle'];
		$caja=new Caja();
		$caja->setIngreso(0);
		$caja->setEgreso($monto);
		$caja->setMoneda($moneda);
		$caja->setDetalle($detalle);
		$caja->setAcreedor($acreedor);
		$caja->setBar($_SESSION['identity']->id);
		$caja->guardarmovimiento();
		$movimientos=$caja->obtenercaja();
		$posnet=$caja->totalposnet();
		$efectivo=$caja->totalefectivo();
		$total=$posnet+$efectivo;
		header("Location:".base_url."bar/caja");
		die();
	}
}
public function nuevoacreedor(){
	if(Utils::isAdmin()){
		$nombre=$_POST['nombre'];
	
	$caja=new Caja();

	$caja->setAcreedor($nombre);
	$caja->setBar($_SESSION['identity']->id);
	$caja->guardaracreedor();
	
	header("Location:".base_url."bar/caja");die();
}
}
public function crearsubcategoria(){
	if(Utils::isAdmin()){

		$subcategoria=$_POST['subcategoria'];
	
	$producto=new Producto();

	$producto->setSubcategoria($subcategoria);
	$producto->setBar($_SESSION['identity']->id);
	$producto->guardarsubcategoria();
	
	header("Location:".base_url."bar/editarcarta");die();
}
}
	public function guardarcobro(){
		if(Utils::isAdmin()){
			$monto=$_POST['monto'];
			$moneda=$_POST['moneda'];
			$acreedor=$_POST['acreedor'];
			$detalle=$_POST['detalle'];
			$caja=new Caja();
			$caja->setingreso($monto);
			$caja->setEgreso(0);
			$caja->setMoneda($moneda);
			$caja->setDetalle($detalle);
			$caja->setAcreedor($acreedor);
		$caja->setBar($_SESSION['identity']->id);
		$s=$caja->guardarmovimiento();
	
		header("Location:".base_url."bar/caja");die();
	}
}
	public function caja(){
		if(Utils::isAdmin()){
			require_once 'views/bar/gestion.php';

		$objcaja=new Caja();
		$objcaja->setBar($_SESSION['identity']->id);
		$movimientos=$objcaja->obtenercaja();

		$posnetobjeto=$objcaja->totalposnet();
		$efectivoobjeto=$objcaja->totalefectivo();

		$ingresosposnet=$posnetobjeto['ingreso'];
		$ingresosefectivo=$efectivoobjeto['ingreso'];
		$totalingresos=$ingresosefectivo+$ingresosposnet;
		$egresosposnet=$posnetobjeto['egreso'];
		$egresosefectivo=$efectivoobjeto['egreso'];
		$totalegresos=$egresosefectivo+$egresosposnet;
		$deuda=$objcaja->totaldeuda();
		
		$balance=$totalingresos-$totalegresos-$deuda;
		
		$acreedores=$objcaja->obteneracreedores();

		require_once 'views/bar/movimientos.php';
	}}
	public function crearproducto(){
		if(Utils::isAdmin()){

		$producto=new Producto();
		$producto->setBar($_SESSION['identity']->id);
		$producto->setCategoria($_POST['categoria']);
		$producto->setSubcategoria($_POST['subcategoria']);
		$producto->setNombre($_POST['nombre']);
		$producto->setDescripcion($_POST['descripcion']);
		$producto->setPrecio($_POST['precio']);
		if(isset($_POST['estado']) && $_POST['estado']=='on'){
			$producto->setEstado(1);

		}else{
			$producto->setEstado(0);
		}
		$resultado=$producto->save();

		$productos=$producto->getAll();
		header("Location:".base_url."bar/editarcarta");die();
	}
}



	public function borrarproducto(){
		if(Utils::isAdmin()){
		$producto=new Producto();
		$producto->setId($_POST['ideliminar']);
		$bar=$_SESSION['identity']->id;
		$producto->setBar($bar);
		
		$resultado=$producto->delete();

		$productos=$producto->getAll();
header("Location:".base_url."bar/editarcarta");
	}else{
		header("Location:".base_url."usuario/login");die();

	}
}
public function borrarmesa(){
	if(Utils::isAdmin()){
	$mesa=new Mesa();
	$mesa->setId($_GET['mesa']);
	
	$resultado=$mesa->delete();

header("Location:".base_url."bar/configurarmesas");
}else{
	header("Location:".base_url."usuario/login");die();

}
}

	public function pagartodo(){
		$idpedido=$_POST['comanda'];
		$pedido=new Pedido;
		$pedido->setId($idpedido);
		$pedido->pagartodo();
		$caja=new Caja();
		$caja->setBar($_SESSION['identity']->id);
		$caja->setAcreedor("VENTA");
		$caja->setDetalle("");

		$caja->setEgreso(0);

		if($_POST['posnet']>0){
			$posnet=$_POST['posnet'];
			$caja->setIngreso($posnet);
			$moneda="POSNET";
			$caja->setMoneda($moneda);
			$caja->guardarmovimiento();


		}
		if($_POST['efectivo']>0){
			$efectivo=$_POST['efectivo'];
			$caja->setIngreso($efectivo);
			$moneda="EFECTIVO";
			$caja->setMoneda($moneda);
			$caja->guardarmovimiento();

		}
		$mesa=$_POST['mesa'];
	
		$comanda=new Comanda_cabecera;
		$comanda->setId($idpedido);
		$comanda->setMesa($mesa);
		$comanda->setBar($_SESSION['identity']->id);

		$comanda->cerrarmesa();
		
		header("Location:".base_url."bar/tablero");
		die();

	}
	public function editarproducto(){
		if($_POST['estado']=='on'){
			$estado=1;
		}else{
			$estado=0;
		}
		$producto=new Producto();
		$producto->setId($_POST['id']);
		$producto->setCategoria($_POST['categoria']);
		$producto->setSubcategoria($_POST['subcategoria']);
		$producto->setNombre($_POST['nombre']);
		$producto->setDescripcion($_POST['descripcion']);
		$producto->setPrecio($_POST['precio']);
		$producto->setEstado($estado);
		$producto->setBar($_SESSION['identity']->id);
		$resultado=$producto->edit();

		$productos=$producto->getAll();
header("Location:".base_url."bar/editarcarta");die();
	}
	public function modificarimpresora(){
		var_dump($_POST);die();
		if(Utils::isAdmin() && isset($_POST['impresoraeditar'])){
			
		$bar=new Bar();
		$bar->setId($_POST['id']);
		$impresora=$_POST['impresoraeditar'];
		$_SESSION['identity']->impresora=$impresora;
		$bar->setId($_SESSION['identity']->id);
		$resultado=$bar->modificarimpresora($impresora);
header("Location:".base_url."bar/editarcarta");die();
	}
}
	 public function registrar(){

			$bar=$_POST['bar'];
			$nombre=$_POST['nombre_responsable'];
			$apellido_responsable=$_POST['apellido_responsable'];
			$dni_responsable=$_POST['dni_responsable'];
			$pais=$_POST['pais'];
			$provincia=$_POST['provincia'];	
			$ciudad=$_POST['ciudad'];
			$direccion=$_POST['direccion'];
			$correo=$_POST['correo']; 
			$telefono=$_POST['telefono'];
			$password=$_POST['password'];
			$terminos=$_POST['terminos'];
			$impresora="";
			$estado="PENDIENTE";
			$membresia="CURRENT_DATE()";
			
			if($terminos=='on'){
				$objbar=new Bar();
				$nombre=$nombre." ".$apellido_responsable;
				$objbar->setBar($bar);
				$objbar->setDireccion($direccion);
				$objbar->setCiudad($ciudad);
				$objbar->setProvincia($provincia);
				$objbar->setPais($pais);
				$objbar->setTelefono($telefono);
				$objbar->setNombre_responsable($nombre);
				$objbar->setDni($dni_responsable);
				$objbar->setCorreo($correo);
				$objbar->setEstado($estado);
				$objbar->setMembresia($membresia);
				$objbar->setImpresora($impresora);
				$objbar->setUbicacion($direccion);
				$objbar->setPassword($password);

				$objbar->setQr("");

				$save=$objbar->save();

				if($save===true ){
					
		$mensaje="¡Hola ".$_POST['nombre_responsable']."! /n En las proximas horas nos contactaremos contigo para que puedas dar de alta tu membresia en undertake.ar";	
		$correo=mail($correo, 'Bienvenido a Undertake ', $mensaje);
				
				/* obtener id del bar*/
				$id=$objbar->obtenerid();

				/* generar qr*/ 
				$texto = base_url."bar/vercarta&bar=".$id;
				$codigoQR = new QrCode($texto);
				# La ruta en donde se guardará el código
				$nombreArchivoParaGuardar = "assets/qr/".$bar.".png";
				# Escribir archivo
				$codigoQR->writeFile($nombreArchivoParaGuardar);
				$ruta=base_url.$nombreArchivoParaGuardar;
				$objbar->setQr($ruta);
				$modificarqr=$objbar->modificarqr();

			
				require_once 'views/bar/yacasi.php';
				
			}else{
				if($save==="correoinvalido"){
					$errorcorreo="Ya existe una cuenta con este correo";
					require_once 'views/bar/registrar.php';

				}

			}
		}
			
	}
	public function logout(){
		unset($_SESSION['identity']);
		require_once 'views/bar/login.php';
	}
}