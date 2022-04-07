<?php
class Comanda_cabecera{
	private $id;
	private $bar;
	private $mesa;
	private $token;
	private $cliente;
	private $fecha_apertura;
	private $fecha_cierre;
	private $estado;
	public function __construct() {
		$this->db = Database::connect();
	}

	function getId() {
		return $this->id;
	}

	function getBar() {
		return $this->bar;
	}

	function getMesa() {
		return $this->mesa;
	}
	function getToken() {
		return $this->token;
	}
	function getCliente() {
		return $this->cliente;
	}
	function getFecha_apertura() {
		return $this->fecha_apertura;
	}
	function getFecha_cierre() {
		return $this->fecha_cierre;
	}
	function getEstado() {
		return $this->estado;
	}
	function setId($id) {
		$this->id = $id;
	}
	function setBar($bar) {
		$this->bar = $bar;
	}
	function setMesa($mesa) {
		$this->mesa = $mesa;
	}
	function setToken($token){
		$this->token=$token;
	}
	function setCliente($cliente){
		$this->cliente=$cliente;
	}
	function setFecha_apertura($fecha_apertura) {
		$this->fecha_apetura=$fecha_apertura;
	}
	function setFecha_cierre($fecha_cierre){
		$this->fecha_cierre=$fecha_cierre;
	}
	
	function setEstado($estado){
		$this->estado=$estado;
	}
	
	//metodos 
	
	//** */
	public function abrirmesa(){
	    
		$this->db->autocommit(false);
		try {
		    		$ajustarfecha = $this->db->query("SET lc_time_names = 'es_AR';");

			$sql="INSERT INTO comandas_cabecera VALUES (NULL,{$this->getBar()},{$this->getMesa()},'{$this->getToken()}','{$this->getCliente()}',DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 3 HOUR),NULL,'{$this->getEstado()}')";
			$this->db->query($sql);
			$this->db->commit();
			$result=true;
		} catch (Exception $e) {
			$this->db->rollback();
			$result=false;
		}
		return $result;
	}

	public function cerrarmesa(){

		$this->db->autocommit(false);
		try {
			$sql="UPDATE comandas_cabecera SET estado='CERRADA',fecha_cierre=DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 3 HOUR) WHERE id={$this->id}";
			$this->db->query($sql);
			$sql="DELETE FROM notificaciones WHERE comanda_id={$this->id}";
			$this->db->query($sql);
			$sql="UPDATE mesas SET estado='DESOCUPADA' WHERE numero_mesa={$this->mesa} AND bar={$this->bar}";
			$this->db->query($sql);
			$this->db->commit();
			$result=true;
		} catch (Exception $e) {
			$this->db->rollback();
			$result=false;
		}
		return $result;
	}


	public function seleccionarmesa(){
		$this->db->autocommit(false);
		try {
			$sql="SELECT comandas_cabecera.id as 'id',comandas_cabecera.cliente as 'cliente',mesas.numero_mesa as 'numero_mesa',bares.bar as 'nombrebar',comandas_cabecera.mesa as 'mesa_id' FROM comandas_cabecera INNER JOIN bares ON bares.id=comandas_cabecera.bar INNER JOIN mesas ON mesas.id=comandas_cabecera.mesa  WHERE  ((comandas_cabecera.bar={$this->getBar()}) and (comandas_cabecera.token='{$this->getToken()}') and (comandas_cabecera.mesa={$this->getMesa()})) ORDER BY fecha_apertura DESC LIMIT 1";
			$arreglo=$this->db->query($sql);			
			$arreglo=$arreglo->fetch_assoc();
			$id=$arreglo['id'];
			$sql="INSERT INTO notificaciones VALUES (NULL,".$id.",'A',DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 3 HOUR))";
			$this->db->query($sql);
			$this->db->commit();
			$result=$arreglo;
		} catch (Exception $e) {
			$this->db->rollback();
			$result=false;
		}
		return $result;
	}

	public function guardarcliente($idmesa){
		$this->db->autocommit(false);
		try {
			$sql="INSERT INTO clientes VALUES (NULL,".$idmesa.",'{$this->getCliente()}')";
			$this->db->query($sql);
			$this->db->commit();
			$result=true;
		} catch (Exception $e) {
			$this->db->rollback();
			$result=false;
		}
		return $result;
	}
	public function verificarestado(){
		$sql="SELECT estado FROM comandas_cabecera where id={$this->getId()};";

		$estado = $this->db->query($sql);
		$estado=$estado->fetch_assoc();
		$estado=$estado['estado'];

		return $estado;
	}
	public function obtenerultimacomanda(){
		$sql="SELECT id FROM comandas_cabecera where mesa={$this->getMesa()} AND estado='ABIERTA' ORDER BY fecha_apertura ASC LIMIT 1;";
		$comanda = $this->db->query($sql);
		$comanda=$comanda->fetch_assoc();
		$comanda=$comanda['id'];
		return $comanda;
	}
	public function obtenernummesa(){
		$sql="SELECT mesas.numero_mesa as 'numero' FROM comandas_cabecera INNER JOIN mesas ON mesas.id=comandas_cabecera.mesa  where comandas_cabecera.id={$this->getId()}  LIMIT 1;";
		$comanda = $this->db->query($sql);
		$comanda=$comanda->fetch_assoc();
		$numero=$comanda['numero'];
		return $numero;
	}
}