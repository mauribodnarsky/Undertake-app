<?php

class Valoracion{
	private $id;
	private $experienciabar;
	private $comentariobar;
	private $bar;
	private $experienciaunder;
	private $comentariounder;
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

	function setExperienciabar($experienciabar) {
		$this->experienciabar = $this->db->real_escape_string($experienciabar);
	}
	function getExperienciabar() {
		return $this->experienciabar;
	}

	function setComentariobar($comentariobar) {
		$this->comentariobar = $comentariobar;
	}
	function getComentariobar() {
		return $this->comentariobar;
	}
	function setExperienciaunder($experienciaunder) {
		$this->experienciaunder = $this->db->real_escape_string($experienciaunder);
	}
	function getExperienciaunder() {
		return $this->experienciaunder;
	}
	function setComentariounder($comentariounder) {
		$this->comentariounder = $this->db->real_escape_string($comentariounder);
	}
	function getComentariounder() {
		return $this->comentariounder;
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
			$this->db->query("INSERT INTO valoraciones VALUES (NULL,'{$this->getExperienciabar()}','{$this->getComentariobar()}','{$this->getExperienciaunder()}','{$this->getComentariounder()}',{$this->getBar()})");
			
			$this->db->commit();
			$result=true;
		} catch (Exception $e) {
			$this->db->rollback();
			$result=false;
		}
		return $result;
	}	
	public function getAll(){
		$valoraciones=array();
		$sql="SELECT * FROM valoraciones where bar={$this->getBar()};";
		$filassql = $this->db->query($sql);
		
		while($filas=$filassql->fetch_assoc()){
            $valoraciones[]=$filas;
        }
		return $valoraciones;
	}


}