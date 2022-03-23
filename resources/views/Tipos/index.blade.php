@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-12">
		<h1 style="font-family:algeria">Tipos
		<a href="{{route('tipos.create')}}" class="btn btn-success text-dark">Nuevo❌</a>
		</h1>
	<table class="table table-sm table-bordered table-hover  ">
		  <thead class="">
		<th style="text-align:center;">#</th>
		<th style="text-align:center;">Detalle</th>
		<th style="text-align:center;"></th>

		@foreach($tipos as $t)
			<tr>
				<td style="text-align:center;">{{$loop->iteration}}</td>

				<td style="text-align:center;">{{$t->tip_detalles}}</td>
				<td>
<div class="row-2"> 
		

		<a href="{{route('tipos.edit',$t->tip_id)}}" class="btn btn-success ">

Editar
	</a> 
	<ul> </ul>
  <form action="{{route('tipos.destroy',$t->tip_id)}}" method="POST" onsubmit="return confirm ('Desea eliminar esta categoria?') ">
  	@csrf

  	<button class="btn btn-danger">  	Eliminar</button>
  </form>
  

</div>

</td>


			</tr>
			
		@endforeach
	</table>
	</div>
</div>	
@endsection