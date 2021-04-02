<?php
$title = 'Reporte de ventas';
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-type:   application/x-msexcel; charset=utf-8");
header("Content-Disposition: attachment; filename=$title.xls"); 
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false);
?>
<table border=1>
	<tr bgcolor=orange>
		<td>ID</td>
		<td>Nombre</td>
		<td>Precio</td>
		<td>Cantidad</td>
		<td>Total Venta</td>
		<td>Fecha Venta</td>
	</tr>
	<?php //$cont = 1; ?>
<?php foreach($this->model->ShowInnerjoin() as $w){ ?>	
	<tr>
		<td><?=$w->id_ventas?></td>
		<td><?=$w->nombre?></td>
		<td><?=$w->precio?></td>
		<td><?=$w->cantidad?></td>
		<td><?=$w->importe?></td>
		<td><?=$w->regist_auto?></td>
	</tr>	
<?php 
//$cont++;
} ?>	
</table>