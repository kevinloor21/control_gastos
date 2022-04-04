<h3 style="color:red">Hola</h3>


	<table class="table table-striped table-danger table-sm table-bordered table-hover  ">
		  <thead class="thead-dark">
		<th style="text-align:center;">#</th>
		<th style="text-align:center;">Fecha</th>
		<th style="text-align:center;">Tipo</th>
		<th style="text-align:center;">Cantidad</th>
		<th style="text-align:center;">Detalle</th>
		<th style="text-align:center;">Tipo</th>
		<th style="text-align:center;">Usuario</th>
		<th style="text-align:center;"></th>
	<?php
$t_ing=0;
$t_egr=0;
$t_saldo=0;


	?>
		
@foreach($movimientos as $mov)

	<?php

	if ($mov->mov_tipo==1){
		$t_ing+=$mov->mov_cantidad;
		
	}else{
		$t_egr+=$mov->mov_cantidad;
	}



	?>
	
			<tr>
				<td style="text-align:center;">{{$loop->iteration}}</td>
				<td style="text-align:center;">{{$mov->mov_fecha}}</td>


@if($mov->mov_tipo==1)

<td style="text-align:center;">Ingreso</td>

 @else

<td style="text-align:center;">Egreso</td>

  @endif


				<td style="text-align:center;">${{number_format($mov->mov_cantidad,2)}}</td>

				<td style="text-align:center;">{{$mov->mov_detalle}}</td>

				<td style="text-align:center;">{{$mov->tip_detalles}}</td>

				<td style="text-align:center;">{{$mov->usu_name}}</td>


				

</div>

</td>


			</tr>
			
	@endforeach
	<tr style="margin-top: 8%;">
		
        <th>Ingresos: {{$t_ing}}$ </th>
        <th>Egresos: {{$t_egr}}$ </th>
        <th>Saldo: {{$t_saldo}}$ </th>


	</tr>