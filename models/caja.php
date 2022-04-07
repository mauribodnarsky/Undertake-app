<?php
class Caja{
	private $id;
	private $ingreso;
	private $egreso;
	private $acreedor;
	private $fecha;
	private $tipo;
	private $moneda;
	private $bar;
	private $detalle;

	public function __construct() {
		$this->db = Database::connect();
	}

	function getId() {
		return $this->id;
	}

	function getIngreso() {
		return $this->ingreso;
	}

	function getEgreso() {
		return $this->egreso;
	}
	function getAcreedor() {
		return $this->acreedor;
	}
	function getTipo() {
		return $this->tipo;
	}

	function getFecha() {
		return $this->fecha;
	}


	function getMoneda() {
		return $this->moneda;
	}

	function getBar() {
		return $this->bar;
	}
	function getDetalle() {
		return $this->detalle;
	}	
	function setId($id) {
		$this->id = $id;
	}
	function setIngreso($ingreso) {
		$this->ingreso = $ingreso;
	}
	function setTipo($tipo){
		$this->tipo=	$tipo;
	}
	function setFecha($fecha){
		$this->fecha=	$fecha;
	}
	function setEgreso($egreso) {
		$this->egreso = $egreso;
	}
	function setAcreedor($acreedor){
		$this->acreedor=$acreedor;
	}
	
	function setMoneda($moneda){
		$this->moneda=$moneda;
	}
	function setBar($bar){
		$this->bar=$bar;
	}
	function setDetalle($detalle){
		$this->detalle=$detalle;
	}
	//metodos 
	
	//** */
	public function borrarmovimiento(){
		
		$sql =$sql = "DELETE FROM caja  WHERE id ={$this->getId()}";
		$this->db->query($sql);
		return $sql;
	}
	public function guardarmovimiento(){

		$consulta="INSERT INTO caja VALUES(NULL,{$this->getIngreso()},{$this->getEgreso()},'{$this->getAcreedor()}',DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 3 HOUR),'{$this->getMoneda()}',{$this->getBar()},'{$this->getDetalle()}');";

		
		$sql = $this->db->query($consulta);
		return $sql;
	}
	public function guardaracreedor(){
		$consulta="INSERT INTO acreedores VALUES(NULL,'{$this->getAcreedor()}',{$this->getBar()});";
		
		$sql = $this->db->query($consulta);
		return $sql;
	}
	public function obteneracreedores(){
		$caja=array();
		$sql ="SELECT * from acreedores WHERE bar={$this->getBar()};";
		$filassql = $this->db->query($sql);
		while($filas=$filassql->fetch_assoc()){
            $caja[]=$filas;
        }
		return $caja;
	}
	public function obtenercaja(){
		$caja=array();
		$sql ="SELECT id,ingreso,egreso,detalle,moneda,DATE_FORMAT(fecha,'%H :%i hs del %d de %M de %Y') as 'fecha',acreedor from caja WHERE bar={$this->getBar()} ORDER BY fecha desc;";
		$filassql = $this->db->query($sql);
		while($filas=$filassql->fetch_assoc()){
            $caja[]=$filas;
        }
		return $caja;
	}
	public function buscarcaja($busqueda){
		$caja=array();
		$sql ="SELECT id,ingreso,egreso,detalle,moneda,DATE_FORMAT(fecha,'%H :%i hs del %d de %M de %Y') as 'fecha',acreedor from caja WHERE bar={$this->getBar()} AND detalle LIKE '%".$busqueda."' OR moneda LIKE '%".$busqueda."' OR acreedor LIKE '%".$busqueda."' ORDER BY fecha desc LIMIT 15;";
		$filassql = $this->db->query($sql);
		while($filas=$filassql->fetch_assoc()){
            $caja[]=$filas;
        }
		return $caja;
	}
	public function obtenerresumen(){
		$caja=array();
		$sql ="SELECT acreedor as 'nombre', (sum(ingreso)-(sum(egreso))) as 'balance' from caja WHERE bar={$this->getBar()}  GROUP BY descripcion ;";
		$filassql = $this->db->query($sql);
		while($filas=$filassql->fetch_assoc()){
            $caja[]=$filas;
        }
		return $caja;
	}
	public function totalposnet(){
		$sql ="SELECT (sum(ingreso)-(sum(egreso))) as 'total',sum(egreso) as 'egreso',sum(ingreso) as 'ingreso' FROM caja where moneda='POSNET' and bar={$this->getBar()};";
		$filassql = $this->db->query($sql);
		$posnet=$filassql->fetch_assoc();
		return $posnet;
	}
	public function totalefectivo(){
		$sql ="SELECT (sum(ingreso)-(sum(egreso))) as 'total',sum(egreso) as 'egreso',sum(ingreso) as 'ingreso' FROM caja where moneda='EFECTIVO' and bar={$this->getBar()};";
		$filassql = $this->db->query($sql);
		$efectivo=$filassql->fetch_assoc();
		return $efectivo;
	}
	public function totaldeuda(){
		$sql ="SELECT sum(egreso) as 'totaldeuda' FROM caja where moneda='DEUDA' and bar={$this->getBar()};";
		$filassql = $this->db->query($sql);
		$deuda=$filassql->fetch_assoc();
		$deuda=$deuda['totaldeuda'];
		return $deuda;
	}
	public function ultimomesefectivo(){
		$sql ="SELECT SUM(caja.ingreso) AS 'ingreso', SUM(caja.egreso) as 'egreso',DATE_FORMAT(caja.fecha,'%M') as 'mes'  FROM caja WHERE caja.moneda='EFECTIVO' AND YEAR(caja.fecha)=YEAR(CURRENT_DATE()) 
				AND MONTH(caja.fecha)  = MONTH(DATE_SUB(CURRENT_DATE(), INTERVAL 3 HOUR))-1";
		$filassql = $this->db->query($sql);
		$ultimomes=$filassql->fetch_assoc();
		
		return $ultimomes;
	}
	
	public function ultimomesposnet(){
		$sql ="SELECT SUM(caja.ingreso) AS 'ingreso', SUM(caja.egreso) as 'egreso',DATE_FORMAT(caja.fecha,'%M') as 'mes'  FROM caja WHERE caja.moneda='POSNET' AND YEAR(caja.fecha)=YEAR(DATE_SUB(CURRENT_DATE(), INTERVAL 3 HOUR)) 
				AND MONTH(caja.fecha)  = MONTH(DATE_SUB(CURRENT_DATE(), INTERVAL 3 HOUR))-1 ORDER BY caja.fecha" ;
		$filassql = $this->db->query($sql);
		$ultimomes=$filassql->fetch_assoc();
		
		return $ultimomes;
	}
}



	