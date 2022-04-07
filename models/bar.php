<?php

class Bar{
	
private $id;
private $bar;
private $direccion;
private $ubicacion;
private $ciudad;
private $provincia;
private $pais;
private $telefono;
private $nombre_responsable;
private $dni;
private $correo;
private $membresia;
private $estado;
private $password;
private $impresora;
private $qr;
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

	function setBar($bar) {
		$this->bar = $this->db->real_escape_string($bar);
	}
	function getBar() {
		return $this->bar;
	}

	function setDireccion($direccion) {
		$this->direccion = $this->db->real_escape_string($direccion);
	}
	function getDireccion() {
		return $this->direccion;
	}
	function setUbicacion($ubicacion) {
		$this->ubicacion = $this->db->real_escape_string($ubicacion);
	}
	function getUbicacion() {
		return $this->ubicacion;
	}
	function setCiudad($ciudad) {
		$this->ciudad = $this->db->real_escape_string($ciudad);
	}
	function getCiudad() {
		return $this->ciudad;
	}
	function setProvincia($provincia) {
		$this->provincia = $this->db->real_escape_string($provincia);
	}
	function getProvincia() {
		return $this->provincia;
	}
	function setPais($pais) {
		$this->pais = $this->db->real_escape_string($pais);
	}
	function getPais() {
		return $this->pais;
	}
	
	function setTelefono($telefono) {
		$this->telefono = $this->db->real_escape_string($telefono);
	}
	function getTelefono() {
		return $this->telefono;
	}	
	function setNombre_responsable($nombre_responsable) {
		$this->nombre_responsable = $this->db->real_escape_string($nombre_responsable);
	}
	function getNombre_responsable() {
		return $this->nombre_responsable;
	}	
	
	function setDni($dni) {
		$this->dni = $this->db->real_escape_string($dni);
	}
	function getDni() {
		return $this->dni;
	}	
	
	function setCorreo($correo) {
		$this->correo = $this->db->real_escape_string($correo);
	}
	function getCorreo() {
		return $this->correo;
	}	
	
	function setMembresia($membresia) {
		$this->membresia = $this->db->real_escape_string($membresia);
	}
	function getMembresia() {
		return $this->membresia;
	}	
	
	function setEstado($estado) {
		$this->estado = $this->db->real_escape_string($estado);
	}
	function getEstado() {
		return $this->estado;
	}

	function setPassword($password) {
		$this->password = $this->db->real_escape_string($password);
	}
	function getPassword() {
		return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
	}	
	function setImpresora($impresora) {
		$this->impresora = $this->db->real_escape_string($impresora);
	}
	function getImpresora() {
		return $this->impresora;
	}	
	function setQr($qr) {
		$this->qr = $qr;
	}
	function getQr() {
		return $this->qr;
	}
	public function getAll(){
		$filas=array();
		$bares = $this->db->query("SELECT * FROM bares;");
		while($fila=$bares->fetch_assoc()){
            $filas[]=$fila;
        }
		return $filas;
	}
	public function save(){

		$sql="SELECT * FROM bares WHERE correo='{$this->getCorreo()}'";
		$email=$this->db->query($sql);
		if($email->num_rows == 0){
			$sql="INSERT INTO bares VALUES (NULL,'{$this->getBar()}','{$this->getDireccion()}','{$this->getUbicacion()}','{$this->getCiudad()}','{$this->getProvincia()}','{$this->getPais()}','{$this->getTelefono()}','{$this->getNombre_responsable()}','{$this->getDni()}','{$this->getCorreo()}',DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 3 HOUR),'{$this->getEstado()}','{$this->getPassword()}','{$this->getImpresora()}','{$this->getQr()}')";
			$resultado=$this->db->query($sql);
			if($resultado){
				$result=true;
			}else{
			$result=false;
		}
	}else{
		$result="correoinvalido";
	}
		return $result;
	}
	public function recuperarpassword(){
		$sql="SELECT * FROM bares WHERE correo='{$this->getCorreo()}'";
		$resultado=$this->db->query($sql);
		if($resultado->num_rows == 1){
			$resultado=$resultado->fetch_assoc();
          
			$pass=substr($resultado['password'],0,10);
		
			$this->setPassword($pass);
			$sql="UPDATE bares SET bares.password='{$this->getPassword()}' WHERE  correo LIKE '%{$this->getCorreo()}%'";
		    $ejecutar=$this->db->query($sql);
		    $result=$pass;
			
	}else{
		$result=false;
	}
		return $result;
	}
	public function login($password){
		$result = false;
	
		
		// Comprobar si existe el usuario
		$sql = "SELECT * FROM bares WHERE correo LIKE '%{$this->getCorreo()}%' AND (membresia>DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 3 HOUR))";

		$login = $this->db->query($sql);
		
		if($login && $login->num_rows == 1){
			$usuario = $login->fetch_object();
			
			// Verificar la contraseña
			$verify = password_verify($password, $usuario->password);
			
			if($verify){
				$result = $usuario;
			}
			else{
				$result="password incorrecto";

			}
		}else{
			$result="no existe cuenta con este correo";

		}

		return $result;
	}

	public function obtenerid(){
		$sql="SELECT id FROM bares WHERE correo='{$this->getCorreo()}' and bar='{$this->getBar()}'";
		$consulta = $this->db->query($sql);
		$objeto = $consulta->fetch_object();
		$id=$objeto->id;

		return $id;
	}
	public function obtenercarta(){
		$filas=array();
		$sql="SELECT * FROM productos WHERE bar='{$this->getBar()}'";
		$bares = $this->db->query($sql);
		if($bares){
			while($fila=$bares->fetch_assoc()){
				$filas[]=$fila;
			}
		}
		return $filas;
	}
	public function ventasultimasemana(){
		$filas=array();
		$sql="SELECT productos.nombre as 'nombre',productos.precio as 'precio', SUM(pedidos.cantidad) as 'cantidad',pedidos.fecha_pedido as 'fecha' FROM pedidos INNER JOIN productos ON pedidos.producto=productos.id WHERE (DATE_SUB(CURDATE(), INTERVAL 7 DAY) <pedidos.fecha_pedido) AND (productos.bar={$this->getBar()}) GROUP BY productos.id ORDER BY cantidad DESC";
		$bares = $this->db->query($sql);
		if($bares){
			while($fila=$bares->fetch_assoc()){
				$filas[]=$fila;
			}
		}
		return $filas;
	}
	public function ventasultimomes(){

		$filas=array();
		$sql="SELECT productos.nombre as 'nombre',productos.precio as 'precio', SUM(pedidos.cantidad) as 'cantidad'FROM pedidos INNER JOIN productos ON pedidos.producto=productos.id WHERE (DATE_SUB(CURDATE(), INTERVAL 31 DAY) <pedidos.fecha_pedido) AND (productos.bar={$this->getBar()}) GROUP BY productos.id ORDER BY cantidad DESC";
		$bares = $this->db->query($sql);
		if($bares){
			while($fila=$bares->fetch_assoc()){
				$filas[]=$fila;
			}
		}
		return $filas;
	}
	public function ventasultimoano(){

		$filas=array();
		$sql="SELECT productos.nombre as 'nombre',productos.precio as 'precio', SUM(pedidos.cantidad) as 'cantidad'FROM pedidos INNER JOIN productos ON pedidos.producto=productos.id WHERE (DATE_SUB(CURDATE(), INTERVAL 364 DAY) <pedidos.fecha_pedido) AND (productos.bar={$this->getBar()}) GROUP BY productos.id ORDER BY cantidad DESC";
		$bares = $this->db->query($sql);
		if($bares){
			while($fila=$bares->fetch_assoc()){
				$filas[]=$fila;
			}
		}
		return $filas;
	}
	public function obtenercomidas(){
	    
		$filas=array();
		$sql="SELECT * FROM productos WHERE  (categoria='PROMO' or categoria='COMIDA') and bar={$this->getId()}";
		$comidas = $this->db->query($sql);
		if($comidas==true && $comidas->num_rows>0){
			while($fila=$comidas->fetch_assoc()){
            $filas[]=$fila;
        }
	}
		return $filas;
	}
	public function obtenerbebidas(){
		$filas=array();
		$sql="SELECT * FROM productos WHERE  (categoria='PROMO' or categoria='BEBIDA') and bar={$this->getId()}";
	
		$bebidas = $this->db->query($sql);
		if($bebidas==true && $bebidas->num_rows>0){
			while($fila=$bebidas->fetch_assoc()){
            $filas[]=$fila;
        }
	}
		return $filas;
	}
	public function obtenercomidascliente(){
		$filas=array();
		$sql="SELECT productos.id,productos.nombre,productos.precio,productos.categoria,productos.descripcion,subcategorias.categoria as 'tipo',subcategorias.id as 'tipoid'  FROM productos INNER JOIN subcategorias ON subcategorias.id=productos.subcategoria WHERE (productos.categoria='PROMO' or productos.categoria='COMIDA') and productos.bar={$this->getId()}  and estado={$this->getEstado()}  ORDER BY subcategoria ";
		$comidas = $this->db->query($sql);
		if($comidas==true && $comidas->num_rows>0){
			while($fila=$comidas->fetch_assoc()){
            $filas[]=$fila;
        }
	}
		return $filas;
	}
	public function obtenerbebidascliente(){
		$filas=array();
		$sql="SELECT productos.id,productos.nombre,productos.precio,productos.categoria,productos.descripcion,subcategorias.categoria as 'tipo',subcategorias.id as 'tipoid' FROM productos INNER JOIN subcategorias ON subcategorias.id=productos.subcategoria WHERE (productos.categoria='PROMO' or productos.categoria='BEBIDA') and productos.bar={$this->getId()}  and estado={$this->getEstado()}  ORDER BY subcategoria ";
		$bebidas = $this->db->query($sql);
		if($bebidas==true && $bebidas->num_rows>0){
			while($fila=$bebidas->fetch_assoc()){
            $filas[]=$fila;
        }
	}
		return $filas;
	}
	public function obtenerpromociones($bar){
		$filas=array();
		$sql="SELECT * FROM promociones WHERE bar=".$bar;
		$promociones = $this->db->query($sql);
		if($promociones){
			while($fila=$promociones->fetch_assoc()){
				$filas[]=$fila;
			}
		}
		return $filas;
		
	}
	public function modificarqr(){
		$sql="UPDATE bares SET qr='{$this->getQr()}' WHERE correo='{$this->getCorreo()}' ";
		$consulta = $this->db->query($sql);
		if($consulta){
			return true;
		}else{
			return false;
		}
	}
	public function modificarimpresora(){
		$sql="UPDATE bares SET impresora='{$this->getImpresora()}' WHERE id={$this->getPassword()}";
		$consulta = $this->db->query($sql);
		if($consulta){
			return true;
		}else{
			return false;
		}
	}
	public function editarbar(){
		$sql="UPDATE bares SET bar='{$this->getBar()}',direccion='{$this->getDireccion()}',nombre_responsable='{$this->getNombre_Responsable()}',telefono='{$this->getTelefono()}',correo='{$this->getCorreo()}',membresia='{$this->getMembresia()}' WHERE id={$this->getId()}";
		$consulta = $this->db->query($sql);
		if($consulta){
			return true;
		}else{
			return false;
		}
	}
	public function delete(){
		$sql="DELETE FROM bares  WHERE id={$this->getId()}";
		$consulta = $this->db->query($sql);
		if($consulta){
			return true;
		}else{
			return false;
		}
	}
}