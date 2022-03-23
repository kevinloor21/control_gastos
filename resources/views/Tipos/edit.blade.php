@extends('layouts.app')
@section('content')
<div class="container col-md-4" >
	<div class="col-md-12" style="margin-top: 25%;">
		<h1 style="font-family:algeria;text-align: center-left;"> Editar Tipos</h1>	 
<form action="{{route('tipo.uptade',$tipo->tip_id)}}" method="POST">
	@csrf

				<div class="form-group">
                    
					<div></div>
					<label for="">Detalle Tipo:</label>
				    <input type="text" value="{{$tipo->tip_detalles}}" name="tip_detalles" id="tip_detalles" class="form-control" placeholder="Realice los cambio que desea">
  				</div>
  				
				<div class="form-group">
					<button class="btn btn-outline-info"><img src="https://cdn.pixabay.com/photo/2020/07/24/12/58/save-5433916_960_720.png" width="30x"> Registrar</button>
				</div>
		</form>
	</div>
</div>	
@endsection