<?php

require_once 'models/usuario.php';
require_once 'models/bar.php';



class usuarioController{
	
	public function index(){
		
		require_once "views/administrador/login.php";

	}
public function contacto(){
	if(isset($_POST['nombre']) && isset($_POST['telefono']) && isset($_POST['localidad'])){

		$mensaje="CONTACTO(landing) <br> nombre: ".$_POST['nombre']."<br> telefono:".$_POST['telefono']."<br> localidad: ".$_POST['localidad'];	
		$correo=mail('mbodnarsky74@gmail.com', 'Undertake ', $mensaje);
		$mensajecontacto='Gracias '.$_POST['nombre']."! te contactaremos cuanto antes.";
		require_once 'views/layout/landing.php';
	}
}
public function recuperarpassword(){
	if(isset($_POST['email'])){
		$correo=$_POST['email'];	
		$bar=new Bar();
		$bar->setCorreo($correo);
		$password=$bar->recuperarpassword();
		if($password!=false){
		$correo=mail($correo, 'Undertake ',"Tu contraseña es: ".$password);
		}
		
		require_once 'views/bar/login.php';
	}
}
	 public function login(){
			// Identificar al usuario
			// Consulta a la base de datos
		if((isset($_POST['nombre'])) && (isset($_POST['password']))){
			$error=false; //se usa para mostrar el mensaje de error 
			$usuario = new Usuario();
			$usuario->setNombre($_POST['nombre']);
			$usuario->setPassword($_POST['password']);
			
			$identity = $usuario->login();

			if(is_object($identity)){
				$_SESSION['identity'] = $identity;
				
				$bar=new Bar();
				$bares=$bar->getAll();
				require_once "views/administrador/index.php";

			}
			else{
				$error=true;
				$mensaje="DATOS INGRESADOS INCORRECTOS!";
			require_once "views/administrador/login.php";
			}
		}
			else{
				$error=true;
				$mensaje="DATOS INGRESADOS INCORRECTOS!";
			require_once "views/administrador/login.php";
			}

			
	}
	public function borrarbar(){
		if(isset($_SESSION['identity'])){
		if (isset($_GET['id'])){
			 $id=$_GET['id'];

			
			 $objbar=new Bar();
			 $objbar->setId($id);

			

			 $delete=$objbar->delete();
			 $bares=$objbar->getAll();
			 require_once "views/administrador/index.php";
		}}

	}
	public function editarbar(){
		if(isset($_SESSION['identity'])){
		if (isset($_POST['id']) && isset($_POST['bar']) && isset($_POST['direccion']) && isset($_POST['responsable']) && isset($_POST['telefono']) && isset($_POST['correo']) && isset($_POST['membresia'])){
			 $bar=$_POST['bar'];
			 $id=$_POST['id'];

			 $direccion=$_POST['direccion'];
			 $nombre_responsable=$_POST['responsable'];
			 $telefono=$_POST['telefono'];
			 $correo=$_POST['correo'];
			 $membresia=$_POST['membresia'];
			 $objbar=new Bar();
			 $objbar->setId($id);

			 $objbar->setBar($bar);
			 $objbar->setDireccion($direccion);
			 $objbar->setTelefono($telefono);
			 $objbar->setNombre_responsable($nombre_responsable);
			 $objbar->setCorreo($correo);
			 $objbar->setMembresia($membresia);


			 $save=$objbar->editarbar();
			 $bares=$objbar->getAll();
			 require_once "views/administrador/index.php";
		}}

	}
	public function logout(){
		
		if(isset($_SESSION['identity'])){
			session_destroy();
		}
		$error=false; // booleano para mostrar mensajes de validacion
		require_once "views/bar/login.php";

	}

}