<?php
				require_once ('config/db.php');
				class Producto{
					private $id;
					private $nombre;					
					private $precio;				
					private $bar;
                    private $categoria;
                    private $descripcion;
					private $subcategoria;
					public $db;
					
					public function __construct() {
						$this->db = Database::connect();
					}
					
					

                    function getId() {
						return $this->id;
					}
					function getNombre() {
						return $this->nombre;
					}
				  

					function getPrecio() {
						return $this->precio;
					}
                    function getBar() {
						return $this->bar;
					}
					function getCategoria() {
						return $this->categoria;
					}
                    function getDescripcion() {
						return $this->descripcion;
					}
                    function getEstado() {
						return $this->estado;
					}
					function getSubcategoria() {
						return $this->subcategoria;
					}
                    function setId($id) {
						$this->id = $this->db->real_escape_string($id);
					}
					function setNombre($nombre) {
						$this->nombre = $this->db->real_escape_string($nombre);
					}

					function setPrecio($precio) {
						$this->precio = $this->db->real_escape_string($precio);
					}
					

					function setBar($bar) {
						$this->bar = $this->db->real_escape_string($bar);
					}
					function setCategoria($categoria) {
						$this->categoria = $this->db->real_escape_string($categoria);
					}
                    function setDescripcion($descripcion) {
						$this->descripcion = $this->db->real_escape_string($descripcion);
					}
					function setSubcategoria($subcategoria) {
						$this->subcategoria = $subcategoria;
					}
					
					function setEstado($estado) {
						$this->estado = $this->db->real_escape_string($estado);
					}
					public function getAll(){
						$productos=array();
						$sql="SELECT * FROM productos where bar={$this->getBar()};";
						$productoss = $this->db->query($sql);
						while($filas=$productoss->fetch_assoc()){
				            $productos[]=$filas;
				        }

						return $productos;
					}
					public function getOne(){
						$sql="SELECT * FROM productos WHERE id = {$this->getId()}";
						$producto = $this->db->query($sql);
						$producto=$producto->fetch_object();
						return $producto;
					}
                    public function save(){
                        $this->db->autocommit(false);
                        try {
                            $sql="INSERT INTO productos VALUES (NULL,'{$this->getNombre()}',{$this->getPrecio()},{$this->getBar()},'{$this->getCategoria()}','{$this->getDescripcion()}',{$this->getEstado()},{$this->getSubcategoria()})";
							$this->db->query($sql);
                            $this->db->commit();
                            $result=true;
                        } catch (Exception $e) {
                            $this->db->rollback();
                            $result=false;
                        }
                        return $result;
                    }
					public function guardarsubcategoria(){
                        $this->db->autocommit(false);
                        try {
                            $sql="INSERT INTO subcategorias VALUES (NULL,'{$this->getSubcategoria()}',{$this->getBar()})";
							$this->db->query($sql);
                            $this->db->commit();
                            $result=true;
                        } catch (Exception $e) {
                            $this->db->rollback();
                            $result=false;
                        }
                        return $result;
                    }
					public function obtenersubcategorias(){
						$subcategorias=array();
						$sql="SELECT * FROM subcategorias where bar={$this->getBar()};";
						$subcategoriass = $this->db->query($sql);
						while($filas=$subcategoriass->fetch_assoc()){
				            $subcategorias[]=$filas;
				        }

						return $subcategorias;
					}
                public function edit(){
                    $this->db->autocommit(false);
                    try {
                        $sql="UPDATE productos SET  nombre='{$this->getNombre()}',precio={$this->getPrecio()},categoria='{$this->getCategoria()}',descripcion='{$this->getDescripcion()}',estado={$this->getEstado()},subcategoria={$this->getSubcategoria()} WHERE id={$this->getId()}";
				
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
                        $sql="DELETE from productos WHERE id={$this->getId()}";

						$this->db->query($sql);
                        $this->db->commit();
                        $result=true;
                    } catch (Exception $e) {
                        $this->db->rollback();
                        $result=false;
                    }
                    return $result;
                }
            }
					