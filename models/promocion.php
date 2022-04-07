<?php
				require_once ('config/db.php');
				class Promocion{
					private $id;
					private $promocion;				
					private $estado;
                    private $precio;
                    private $bar;
					private $descripcion;
					public $db;
					
					public function __construct() {
						$this->db = Database::connect();
					}
					
					function setPromocion($promocion) {
						$this->promocion = $this->db->real_escape_string($promocion);
					}
					
					function setEstado($estado) {
						$this->estado = $this->db->real_escape_string($estado);
					}
					
					function setPrecio($precio) {
						$this->precio = $this->db->real_escape_string($precio);
					}
					
					function setBar($bar) {
						$this->bar = $this->db->real_escape_string($bar);
					}
					
					function setDescripcion($descripcion) {
						$this->descripcion = $this->db->real_escape_string($descripcion);
					}
					function getPromocion() {
						return $this->promocion;
					}
				  
					function getEstado() {
						return $this->estado;
					}

					function getPrecio() {
						return $this->precio;
					}
                    
					function getBar() {
						return $this->bar;
					}

					function getDescripcion() {
						return $this->descripcion;
					}
					public function getAll(){
						$productos=array();
						$sql="SELECT * FROM promociones where bar={$this->getBar()};";
						$productoss = $this->db->query($sql);
						while($filas=$productoss->fetch_assoc()){
				            $productos[]=$filas;
				        }

						return $productos;
					}
                    
                    public function save(){
                    $this->db->autocommit(false);
                    try {
                        $this->db->query("INSERT INTO promociones VALUES (NULL,'{$this->getPromocion()}',{$this->getEstado()},{$this->getPrecio()},{$this->getBar()},'{$this->getDescripcion()}')");
                        
                        $this->db->commit();
                        $result=true;
                    } catch (Exception $e) {
                        $this->db->rollback();
                        $result=false;
                    }
                    return $result;
                }

                }