<?php
require_once 'models/usuario.php';
require_once 'models/producto.php';
require_once 'models/pedido.php';
require_once 'models/comanda_cabecera.php';

class productoController{
	public function confirmar(){
		if(isset($_SESSION['comanda_cabecera']) && isset($_SESSION['carrito'])){
			$comanda=$_SESSION['comanda_cabecera']['id'];
			$pedido=new Pedido;
			$pedido->setComanda($comanda);
			$objcomanda=new Comanda_cabecera();
			$objcomanda->setId($comanda);
			$verificarcomanda=$objcomanda->verificarestado();

			if($verificarcomanda=='ABIERTA'){
				foreach($_SESSION['carrito'] as $indice => $elemento){
						$producto=$_SESSION['carrito'][$indice]['id_producto'];
						$cantidad=$_SESSION['carrito'][$indice]['unidades'];
						$nota=$_SESSION['carrito'][$indice]['nota'];
						$cliente=$_SESSION['carrito'][$indice]['cliente'];
						$pedido->setproducto($producto);
						$pedido->setCantidad($cantidad);
						$pedido->setNota($nota);
						$pedido->setCliente($cliente);
						$pedido->setEstado("SIN ATENDER");

						$guardar=$pedido->save();

						}
						unset($_SESSION['carrito']);
						require_once 'views/cliente/listo.php';
				}else{
					$bar=$_SESSION['comanda_cabecera']['bar'];
					session_destroy();
					header("Location:".base_url."bar/vercarta&bar=".$bar);				}
		}else{
			header("Location:".base_url."bar/vercarta&bar=".$_SESSION['comanda_cabecera']['bar']);
		}
	}
	public function editarnota(){
		if(isset($_POST['id']) && isset($_POST['nota'])){
			$producto_id=$_POST['id'];
			$nota=$_POST['nota'];

			foreach($_SESSION['carrito'] as $indice => $elemento){
				if($elemento['id_producto'] == $producto_id){
					$_SESSION['carrito'][$indice]['nota']=$nota;
				}
			}
		}
		header("Location:".base_url."bar/vercarta&bar=".$_SESSION['comanda_cabecera']['bar']);

	}
	public function quitar(){
		if(isset($_GET['producto'])){
			$producto_id=$_GET['producto'];
			foreach($_SESSION['carrito'] as $indice => $elemento){
				if($elemento['id_producto'] == $producto_id){
					unset($_SESSION['carrito'][$indice]);
					$size=sizeof($_SESSION['carrito']);
					if($size==0){
						unset($_SESSION['carrito']);
					}
				}
			}
		}
		header("Location:".base_url."bar/vercarta&bar=".$_SESSION['comanda_cabecera']['bar']);


	}
	public function add(){
		if(isset($_POST['idproductopedido']) && isset($_POST['cantidad']) && isset($_POST['nota'])){
			$producto_id = $_POST['idproductopedido'];
			$cantidad=$_POST['cantidad'];
			$nota=$_POST['nota'];
			$cliente=$_SESSION['comanda_cabecera']['cliente'];
		}else{
			header('Location:'.base_url."error/index");
		}
		
		if(isset($_SESSION['carrito'])){
			$counter = 0;
			foreach($_SESSION['carrito'] as $indice => $elemento){
				if($elemento['id_producto'] == $producto_id){
					$_SESSION['carrito'][$indice]['unidades']+=$cantidad;
					$_SESSION['carrito'][$indice]['nota']=$nota;

					$counter++;
				}
			}	
		}
		
		if(!isset($counter) || $counter == 0){
			// Conseguir producto
			$producto = new Producto();
			$producto->setId($producto_id);
			$producto = $producto->getOne();

			// Añadir al carrito
			if(is_object($producto)){
				$_SESSION['carrito'][] = array(
					"id_producto" => $producto->id,
					"precio" => $producto->precio,
					"unidades" => $cantidad,
					"producto" => $producto->nombre,
					"cliente"=>$cliente,
					"nota"=>$nota

				);
			}
		}
		
		header("Location:".base_url."bar/vercarta&bar=".$_SESSION['comanda_cabecera']['bar']);
		
	}
	

	
	

	
}