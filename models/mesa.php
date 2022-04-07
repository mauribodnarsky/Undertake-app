<?php

class Mesa{
	private $id;
	private $numero_mesa;
	private $estado;
	private $bar;
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

	function setNumero_mesa($numero_mesa) {
		$this->numero_mesa = $this->db->real_escape_string($numero_mesa);
	}
	function getNumero_mesa() {
		return $this->numero_mesa;
	}

	function setEstado($estado) {
		$this->estado = $estado;
	}
	function getEstado() {
		return $this->estado;
	}
	function setToken($token) {
		$this->token = $this->db->real_escape_string($token);
	}
	function getToken() {
		return $this->token;
	}
	function setMozo($mozo) {
		$this->mozo = $this->db->real_escape_string($mozo);
	}
	function getMozo() {
		return $this->mozo;
	}
	
	function setBar($bar) {
		$this->bar = $bar;
	}
	function getbar() {
		return $this->bar;
	}
	public function save(){
		$this->db->autocommit(false);
		try {
			$this->db->query("INSERT INTO mesas VALUES (NULL,{$this->getNumero_mesa()},'{$this->getEstado()}',{$this->getBar()},'{$this->getToken()}','{$this->getMozo()}')");
			
			$this->db->commit();
			$result=true;
		} catch (Exception $e) {
			$this->db->rollback();
			$result=false;
		}
		return $result;
	}	
	public function edit(){
		$this->db->autocommit(false);
		try {
			$sql="UPDATE mesas SET mozo='{$this->getMozo()}',token='{$this->getToken()}' WHERE id={$this->getId()}";
			$this->db->query($sql);
			$this->db->commit();
			$result=true;
		} catch (Exception $e) {
			$this->db->rollback();
			$result=false;
		}
		return $result;
	}	
	public function editarestado(){
		$this->db->autocommit(false);
		try {
			$sql="UPDATE mesas SET estado='{$this->getEstado()}' WHERE bar={$this->getBar()} and id={$this->getNumero_Mesa()}";
			$this->db->query($sql);
			$this->db->commit();
			$result=true;
		} catch (Exception $e) {
			$this->db->rollback();
			$result=false;
		}
		return $result;
	}	
	public function delete(){
		$this->db->autocommit(false);
		try {
			$sql="DELETE FROM mesas WHERE id={$this->getId()}";
			$this->db->query($sql);
			$this->db->commit();
			$result=true;
		} catch (Exception $e) {
			$this->db->rollback();
			$result=false;
		}
		return $result;
	}	
	public function verificartoken(){
			$result=false;
			$sql="SELECT * FROM mesas WHERE token='{$this->getToken()}' and id={$this->getNumero_Mesa()} and bar={$this->getBar()}";
			
			$consulta=$this->db->query($sql);
			if($consulta==true && $consulta->num_rows==1){
				$result=$consulta->fetch_assoc();
			}
		return $result;
	}	

	public function obtenermesas(){
		$mesas=array();
		$sql="SELECT * FROM mesas where bar={$this->getBar()};";
		$mesass = $this->db->query($sql);
		while($filas=$mesass->fetch_assoc()){
			$mesas[]=$filas;
		}

		return $mesas;
	}
	public function getAll(){
		$mesas=array();
		$sql="SELECT * FROM mesas where bar={$this->getBar()};";
		$mesass = $this->db->query($sql);
		while($filas=$mesass->fetch_assoc()){
			$mesas[]=$filas;
		}

		return $mesas;
	}
	public function max(){
		$sql="SELECT max(numero_mesa) as 'max' FROM mesas where bar={$this->getBar()};";
		$mesass = $this->db->query($sql);
		$result=$mesass->fetch_assoc();
		$result=$result['max'];
		

		return $result;
	}
	public function getOne(){
		$mesas=array();
		$sql="SELECT * FROM mesas where bar={$this->getBar()} and id={$this->getNumero_Mesa()} and token='{$this->getToken()}' ;";
		$mesa = $this->db->query($sql);
		$filas=$mesa->fetch_assoc();
		

		return $mesas;
	}

}