@extends('layouts.app')
@section('content')

<div class="container">
	<div class="col-md-12">
		<h1 style="font-family:algeria">Lista De Movimientos
<a href=" {{route('movimientos.create')}} " class="btn-primary btn">Nuevo<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkknsKjVZuT67PNzpKml_VWXZ4HWowTI0cNQ&usqp=CAU" width="20px"></a>
		</h1>

			<form class="" action="{{route('movimientos.search')}}" method="POST">
			@csrf
			Desde:<input type="date" name="desde" value="{{$desde}}">
			Hasta:<input type="date" name="hasta" value="{{$hasta}}">
			<button class="btn btn-success btn-sm" title="Buscar" value="btn_buscar" name="btn_buscar">
BUSCAR</button>
				
			<button class="btn btn-danger btn-sm" title="PDF" value="btn_pdf" name="btn_pdf">PDF</button>

			</form>


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

				<td style="text-align:center;">
					



<div class="row"> 


	<ul> </ul>
  <form action="{{route('movimiento.destroy',$mov->mov_id)}}" method="POST" onsubmit="return confirm ('Desea eliminar esta categoria?') ">
  	@csrf

  	<button class="btn btn-danger">  	<img src="https://cdn-icons-png.flaticon.com/512/58/58326.png" width="15px"></button>
  </form>
  <div class="col-1">
		<a href="{{route('movimientos.edit',$mov->mov_id)}}" class="btn btn-success ">

	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="10px"> <path d="M373.1 24.97C401.2-3.147 446.8-3.147 474.9 24.97L487 37.09C515.1 65.21 515.1 110.8 487 138.9L289.8 336.2C281.1 344.8 270.4 351.1 258.6 354.5L158.6 383.1C150.2 385.5 141.2 383.1 135 376.1C128.9 370.8 126.5 361.8 128.9 353.4L157.5 253.4C160.9 241.6 167.2 230.9 175.8 222.2L373.1 24.97zM440.1 58.91C431.6 49.54 416.4 49.54 407 58.91L377.9 88L424 134.1L453.1 104.1C462.5 95.6 462.5 80.4 453.1 71.03L440.1 58.91zM203.7 266.6L186.9 325.1L245.4 308.3C249.4 307.2 252.9 305.1 255.8 302.2L390.1 168L344 121.9L209.8 256.2C206.9 259.1 204.8 262.6 203.7 266.6zM200 64C213.3 64 224 74.75 224 88C224 101.3 213.3 112 200 112H88C65.91 112 48 129.9 48 152V424C48 446.1 65.91 464 88 464H360C382.1 464 400 446.1 400 424V312C400 298.7 410.7 288 424 288C437.3 288 448 298.7 448 312V424C448 472.6 408.6 512 360 512H88C39.4 512 0 472.6 0 424V152C0 103.4 39.4 64 88 64H200z"/></svg>
	</a> 
  </div>

</div>
				</td>

				

</div>

</td>


			</tr>
			
	@endforeach
	<tr style="margin-top: 8%;">
		
        <th>Ingresos: {{$t_ing}}$ </th>
        <th>Egresos: {{$t_egr}}$ </th>
        <th>Saldo: {{$t_saldo}}$ </th>


	</tr>
	
	</div>
</div>	
@endsection