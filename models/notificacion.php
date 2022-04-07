<?php
/// A mesa abierta
/// NP nuevo pedido
/// Pedir cuenta
class Notificacion{
	
private $id;
private $comanda_id;
private $tipo;
private $fecha;
private $db;
public function __construct() {
		$this->db = Database::connect();
}
	
	function getId() {
		return $this->id;
	}
	function setId($id) {
		$this->id = $id;
	}

	function setComanda_id($comanda_id) {
		$this->comanda_id = $comanda_id;
	}
	function getComanda_id() {
		return $this->comanda_id;
	}

	function setTipo($tipo) {
		$this->tipo =$tipo;
	}
	function getTipo() {
		return $this->tipo;
	}
	function setFecha($fecha) {
		$this->fecha = $this->db->real_escape_string($fecha);
	}
	function getFecha() {
		return $this->fecha;
	}
	public function getAll($bar){
		$filas=array();
		$notificaciones = $this->db->query("SELECT notificaciones.id as 'id',mesas.numero_mesa,notificaciones.tipo,notificaciones.fecha FROM notificaciones INNER JOIN comandas_cabecera ON comandas_cabecera.id=notificaciones.comanda_id INNER JOIN mesas ON comandas_cabecera.mesa=mesas.id WHERE comandas_cabecera.bar=".$bar." ORDER BY fecha DESC;");
		while($fila=$notificaciones->fetch_assoc()){
            $filas[]=$fila;
        }
		return $filas;
	}
	public function save(){
		$result=false;
			while($result==false){
				$sql="INSERT INTO notificaciones VALUES (NULL,{$this->getComanda_id()},'{$this->getTipo()}',DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 3 HOUR))";
				$result=$this->db->query($sql);
				
			}

		return $result;
	}
	public function delete(){
		$result=false;
			while($result==false){
				$sql="DELETE FROM notificaciones WHERE id={$this->getId()}";
			$result=$this->db->query($sql);
				$result=true;
			}
		return $result;
	}
	public function borrarpormesa(){
		$result=false;
			while($result==false){
				$sql="DELETE FROM notificaciones WHERE comanda_id={$this->getComanda_id()} AND ((tipo='{$this->getTipo()}') OR (tipo='A'))";
			$result=$this->db->query($sql);
				$result=true;
			}
		return $result;
	}

	public function obtenerpormesa($mesa){
		$filas=array();
		$notificaciones = $this->db->query("SELECT notificaciones.id as 'id',mesas.numero_mesa,notificaciones.tipo,notificaciones.fecha FROM notificaciones INNER JOIN comandas_cabecera ON comandas_cabecera.id=notificaciones.comanda_id INNER JOIN mesas ON comandas_cabecera.mesa=mesas.id WHERE comandas_cabecera.mesa=".$mesa." ORDER BY fecha DESC;");
		while($fila=$notificaciones->fetch_assoc()){
            $filas[]=$fila;
        }
		return $filas;
	}
}