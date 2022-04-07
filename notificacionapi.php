<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
header('content-type: application/json; charset=utf-8');
require_once 'models/producto.php';
require_once 'config/db.php';
require_once 'models/pedido.php';
require_once 'models/notificacion.php';
require_once 'models/comanda_cabecera.php';
require_once 'models/bar.php';
require_once 'models/caja.php';

if (isset($_GET['tipo']) && (isset($_GET['comanda']))){
    $notificacion= new Notificacion();
    $notificacion->setComanda_id($_GET['comanda']);
    $tipo=$_GET['tipo'];
    $notificacion->setTipo($tipo);
    $borrar= $notificacion->borrarpormesa();

    $comanda=new Comanda_cabecera();
    $comanda->setId($_GET['comanda']);
    $mesa=$comanda->obtenernummesa();

    $resultado['mesa']=$mesa;
    echo json_encode($resultado);

    
}   
if(isset($_POST['buscador'])){
    $objcaja=new Caja();
		$objcaja->setBar($_POST['bar']);
        $busqueda=$_POST['buscador'];
        $busca= explode(' ', $busqueda);
        $buscar="";
      
        foreach ($busca as $letra) {
          $buscar= $buscar.$letra."%";
        }
		$movimientos=$objcaja->buscarcaja($buscar);
        echo json_encode($movimientos);

}
if(isset($_GET['pagardeuda'])){
     $objcaja=new Caja();
		$objcaja->setId($_GET['pagardeuda']);
        $resultado=$objcaja->borrarmovimiento();
        echo json_encode($resultado);

}
if ((isset($_GET['tiponotificacion'])) && (isset($_GET['comandanotificacion']))){
    $notificacion= new Notificacion();
    $notificacion->setTipo($_GET['tiponotificacion']);
    $notificacion->setComanda_id($_GET['comandanotificacion']);
    $notificaciones= $notificacion->save();
    }
    if (isset($_GET['bar'])){
        $notificacion= new Notificacion();
        $notificaciones= $notificacion->getAll($_GET['bar']);
        echo json_encode($notificaciones);
        }
    
    if (isset($_GET['mesa'])){
            $objcomanda=new Comanda_cabecera();
            $objcomanda->setMesa($_GET['mesa']);
            $comanda=$objcomanda->obtenerultimacomanda();
            $pedido= new Pedido();
            $pedido->setComanda($comanda);
            $pedidos= $pedido->obtenerpedido($comanda);
            echo json_encode($pedidos);
    }

    if (isset($_GET['notificacion'])){
        $notificacion= new Notificacion();
        $notificacion->setId($_GET['notificacion']);
        $borrar= $notificacion->delete();
        echo ($borrar);

        
    }    
    if (isset($_GET['obtenernotificacion'])){
        $notificacion= new Notificacion();
        $mesa=$_GET['obtenernotificacion'];
        $notificaciones=$notificacion->obtenerpormesa($mesa);
        echo json_encode($notificaciones);

        
    }    

    if(isset($_POST['idpedido']) && isset($_POST['cantidad']) && isset($_POST['estado'])){
		$idpedido=$_POST['idpedido'];
        $comanda=$_POST['comanda'];

		$pedido=new Pedido;
		$pedido->setId($_POST['idpedido']);
		$pedido->setCantidad($_POST['cantidad']);
        $estado=htmlspecialchars($_POST['estado']);
		$pedido->setEstado($estado);
        $pedido->update();
        $pedido->setComanda($comanda);

        $pedidos= $pedido->obtenerpedido($idpedido);
        echo json_encode($pedidos);


	}

    
    if (isset($_GET['cartabar'])){
                    $objetobar=new Bar();
					$objetobar->setId($_GET['cartabar']);
					$objetobar->setEstado(1);
					$bebidas=$objetobar->obtenerbebidascliente();
					$comidas=$objetobar->obtenercomidascliente();
                    $resultado=['comidas'=>$comidas,'bebidas'=>$bebidas];
				    echo json_encode($resultado);
        }
        
    


    

           