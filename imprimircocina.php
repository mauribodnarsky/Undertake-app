	<?php

    require_once 'config/db.php';
    require_once 'models/pedido.php';
    require_once 'models/comanda_cabecera.php';
    require_once 'vendor/autoload.php';
    use Spipu\Html2Pdf\Html2Pdf;
	if (isset($_GET['mesa'])){
		$objcomanda=new Comanda_cabecera();
		$objcomanda->setMesa($_GET['mesa']);
		$comanda=$objcomanda->obtenerultimacomanda();
		$pedido= new Pedido();
		$pedido->setComanda($comanda);
		$pedidos= $pedido->obtenerpedidococina($comanda);
	$pdf= new html2pdf('H','A4','es', false, 'UTF-8');
	$html="<div class=\"row\"><div class=\"col-12\">MESA:".$pedidos[0]['mesa']."<br>FECHA APERTURA:".$pedidos[0]['fecha_apertura']."</div></div><div class=\"row\"><div class=\"col-12\"><table><thead>
	<tr style=\"background:#98ab80; \">
	<th style=\"vertical-align: middle;padding:8px;text-align:center;\">PRODUCTO</th>
   <th style=\"vertical-align: middle;padding:8px;text-align:center;\">CANTIDAD</th>
   <th style=\"vertical-align: middle;padding:8px;text-align:center;\">NOTA</th>
   <th style=\"vertical-align: middle;padding:8px;text-align:center;\">CLIENTE</th>

  </tr></thead><tbody>";
	foreach ($pedidos as $key => $value) {
	$html.="<tr style=\"background:white;vertical-align: middle;\"><td style=\"padding:4px;\">".$value['producto']."</td><td style=\"padding:4px;\">".$value['cantidad']."</td><td style=\"padding:4px;\">".$value['nota']."</td><td style=\"padding:4px;\">".$value['cliente']."</td></tr>";
	}
	$html.="</tbody></table></div></div>";
	$pdf->writeHTML($html);
	ob_end_clean (); 
  
	$pdf->output('recibo.pdf');
}
