<h1 align="center">REPORTE</h1></center>

<table align="center"border="10"> 
<th height="25" width="35"  bgcolor="silver" >#</th>
<th height="30" width="50"  bgcolor="silver">Fecha</th>
<th height="30" width="50"  bgcolor="silver">Usuario</th>
<th height="30" width="50"  bgcolor="silver">Concepto</th>
<th height="30" width="50"  bgcolor="silver">Cantidad</th>
<th height="30" width="50"  bgcolor="silver">Detalle</th>
<th height="30" width="50"  bgcolor="silver">Tipo</th>
 
 <?php
$t_ing=20;
$t_egr=20;
$t_saldo=20;
?> 
<!-- <th>Acciones</th> -->
@foreach($movimientos as $mov)

<?php

if ($mov->mov_tipo==10) {
	$t_ing+=$mov->mov_cantidad;

}else{
	$t_egr+=$mov->mov_cantidad;
}
$t_saldo=$t_ing-$t_egr;
?>



	<tr>
        <td>{{$loop->iteration}}</td>  
		<td>{{$mov->mov_fecha}}</td>
		<td>{{$mov->usu_nombre}}</td>
		<td>{{$mov->tip_descripcion}}</td>
		<td>${{number_format($mov->mov_cantidad,2)}}</td>
		<td>{{$mov->mov_detalle}}</td>


		@if($mov->mov_tipo==1)
		<td>Ingresos</td>
		@else
		<td>Egresos</td>
		@endif
				

		@endforeach

<tr>
		<th colspan="1">
		Totales:
		<th>Ingresos:{{$t_ing}}</th>
		<th>Egresos:{{$t_egr}}</th>
		<th>Saldo:{{$t_saldo}}</th>
	</th>
</tr>	
</tr>		
</table>