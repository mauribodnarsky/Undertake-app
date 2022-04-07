<?php
class Pedido{
	private $id;
	private $comanda;
	private $fecha_pedido;
	private $producto;
	private $cantidad;
	private $estado;
	public function __construct() {
		$this->db = Database::connect();
	}
	
	function getId() {
		return $this->id;
	}
	function setId($id) {
		$this->id = $id;
	}

	function setComanda($comanda) {
		$this->comanda = $this->db->real_escape_string($comanda);
	}
	function getComanda() {
		return $this->comanda;
	}
	
	function setFecha_pedido($fecha_pedido) {
		$this->fecha_pedido = $this->db->real_escape_string($fecha_pedido);
	}
	function getFecha_pedido() {
		return $this->fecha_pedido;
	}
	
	function setproducto($producto) {
		$this->producto = $producto;
	}

	function getproducto() {
		return $this->producto;
	}
	function setCantidad($cantidad) {
		$this->cantidad = $cantidad;
	}
	function getCantidad() {
		return $this->cantidad;
	}
	function setEstado($estado) {
		$this->estado = $estado;
	}
	function getEstado() {
		return $this->estado;
	}
	
	function setNota($nota) {
		$this->nota = $nota;
	}
	function getNota(){
		return $this->nota;
	}
	function setCliente($cliente) {
		$this->cliente = $this->db->real_escape_string($cliente);
	}
	function getCliente() {
		return $this->cliente;
	}

	public function obtenerpedido($bar){
		$filas=array();
		$sql="SELECT mesas.id as 'mesaid',pedidos.nota as 'nota',comandas_cabecera.estado 'estadocomanda',pedidos.estado 'estadopedido',mesas.numero_mesa as 'mesa',mesas.mozo, productos.nombre as 'producto',productos.precio as 'precio',pedidos.cantidad as 'cantidad', precio*cantidad as 'subtotal',pedidos.cliente as 'cliente',DATE_FORMAT(pedidos.fecha_pedido,'%H hs : %i') AS 'fecha_pedido',DATE_FORMAT(comandas_cabecera.fecha_apertura,'%H hs :%i min del %d/%c/%Y') AS 'fecha_apertura',DATE_FORMAT(comandas_cabecera.fecha_cierre,'%H hs :%i min del %d/%c/%Y') AS 'fecha_cierre',comandas_cabecera.estado as 'estado',pedidos.id as 'idpedido',pedidos.comanda as 'comandaid' from productos INNER JOIN pedidos on pedidos.producto=productos.id INNER JOIN comandas_cabecera  ON pedidos.comanda=comandas_cabecera.id INNER JOIN mesas on mesas.id=comandas_cabecera.mesa WHERE comandas_cabecera.id={$this->getComanda()}";
		
		$pedidos = $this->db->query($sql);
		if($pedidos==true && $pedidos->num_rows>0){
			while($fila=$pedidos->fetch_assoc()){
			$filas[]=$fila;
		}
	}

		return $filas;
	}
	
	public function obtenerfactura($bar){
		$filas=array();
		$sql="SELECT mesas.id as 'mesaid',pedidos.nota as 'nota',comandas_cabecera.estado 'estadocomanda',pedidos.estado 'estadopedido',mesas.numero_mesa as 'mesa',mesas.mozo, productos.nombre as 'producto',productos.precio as 'precio',pedidos.cantidad as 'cantidad', precio*cantidad as 'subtotal',pedidos.cliente as 'cliente',DATE_FORMAT(pedidos.fecha_pedido,'%H hs : %i') AS 'fecha_pedido',DATE_FORMAT(comandas_cabecera.fecha_apertura,'%H hs :%i min del %d/%c/%Y') AS 'fecha_apertura',DATE_FORMAT(comandas_cabecera.fecha_cierre,'%H hs :%i min del %d/%c/%Y') AS 'fecha_cierre',comandas_cabecera.estado as 'estado',pedidos.id as 'idpedido',pedidos.comanda as 'comandaid' from productos INNER JOIN pedidos on pedidos.producto=productos.id INNER JOIN comandas_cabecera  ON pedidos.comanda=comandas_cabecera.id INNER JOIN mesas on mesas.id=comandas_cabecera.mesa WHERE comandas_cabecera.id={$this->getComanda()} AND pedidos.estado='ENTREGADO'";
		
		$pedidos = $this->db->query($sql);
		if($pedidos==true && $pedidos->num_rows>0){
			while($fila=$pedidos->fetch_assoc()){
			$filas[]=$fila;
		}
	}

		return $filas;
	}
	public function obtenerpedidococina($bar){
		$filas=array();
		$sql="SELECT mesas.id as 'mesaid',pedidos.nota as 'nota',comandas_cabecera.estado 'estadocomanda',pedidos.estado 'estadopedido',mesas.numero_mesa as 'mesa',mesas.mozo, productos.nombre as 'producto',productos.precio as 'precio',pedidos.cantidad as 'cantidad', precio*cantidad as 'subtotal',pedidos.cliente as 'cliente',DATE_FORMAT(pedidos.fecha_pedido,'%H hs : %i') AS 'fecha_pedido',DATE_FORMAT(comandas_cabecera.fecha_apertura,'%H hs :%i min del %d/%c/%Y') AS 'fecha_apertura',DATE_FORMAT(comandas_cabecera.fecha_cierre,'%H hs :%i min del %d/%c/%Y') AS 'fecha_cierre',comandas_cabecera.estado as 'estado',pedidos.id as 'idpedido',pedidos.comanda as 'comandaid' from productos INNER JOIN pedidos on pedidos.producto=productos.id INNER JOIN comandas_cabecera  ON pedidos.comanda=comandas_cabecera.id INNER JOIN mesas on mesas.id=comandas_cabecera.mesa WHERE comandas_cabecera.id={$this->getComanda()} AND pedidos.estado='SIN ATENDER'";
		
		$pedidos = $this->db->query($sql);
		if($pedidos==true && $pedidos->num_rows>0){
			while($fila=$pedidos->fetch_assoc()){
			$filas[]=$fila;
		}
	}

		return $filas;
	}	
		
	public function obtenerventas($bar){
		$filas=array();
		$sql="SELECT DISTINCT sum(pedidos.cantidad*productos.precio) as 'total',productos.nombre as 'producto' FROM pedidos INNER JOIN productos ON productos.id=pedidos.producto WHERE productos.bar=".$bar." GROUP BY productos.id";	
		$pedidos = $this->db->query($sql);
		if($pedidos==true && $pedidos->num_rows>0){
			while($fila=$pedidos->fetch_assoc()){
			$filas[]=$fila;
		}
	}

		return $filas;
	}	

	public function save(){
		$this->db->autocommit(false);
		try {
			$sql="INSERT INTO pedidos VALUES(NULL,{$this->getComanda()},DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 3 HOUR),{$this->getProducto()},{$this->getCantidad()},'{$this->getNota()}','{$this->getCliente()}','{$this->getEstado()}')";
			$respuesta=$this->db->query($sql);		
			$sql="INSERT INTO notificaciones VALUES (NULL,{$this->getComanda()},'NP',DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 3 HOUR))";
			$this->db->query($sql);
			$this->db->commit();
			$result=true;
		} catch (Exception $e) {
			$this->db->rollback();
			$result=false;
		}
		return $result;
	}
	public function update(){
		$this->db->autocommit(false);
		try {
			$sql="UPDATE pedidos SET cantidad={$this->getCantidad()},estado='{$this->getEstado()}' WHERE id={$this->getId()}";
			$respuesta=$this->db->query($sql);		
			$this->db->commit();
			$result=true;
		} catch (Exception $e) {
			$this->db->rollback();
			$result=false;
		}
		return $result;
	}
	public function pagartodo(){
		$this->db->autocommit(false);
		try {
			$sql="UPDATE pedidos SET estado='PAGADO' WHERE comanda={$this->getId()}";
			$respuesta=$this->db->query($sql);		
			$this->db->commit();
			$result=true;
		} catch (Exception $e) {
			$this->db->rollback();
			$result=false;
		}
		return $result;
	}
	
}