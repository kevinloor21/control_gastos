@extends('layouts.app')
@section('content')
<script src="{{asset('js/tipos.js')}}"> </script>
<div class="container col-md-4" >
	<div class="col-md-12" style="margin-top: 25%;">
		<h1 style="font-family:algeria;text-align: center-left;"><img src="https://cdn-icons-png.flaticon.com/512/48/48746.png" width="60px"> Crear TIPO</h1>	 
		<form action="{{route('tipos.store')}}" method="POST" onsubmit="return valid() ">
			@csrf
				<div class="form-group">
                    
					<div></div>
					<label for="">Nuevo Tipo:</label>
				    <input type="text" name="tip_detalles" id="tip_detalles" class="form-control" placeholder="Escriba la categoria que pertenece">
  				</div>
				<div class="form-group">
					<button class="btn btn-outline-info"><img src="https://cdn.pixabay.com/photo/2020/07/24/12/58/save-5433916_960_720.png" width="30x"> Registrar</button>
				</div>
		</form>
	</div>
</div>	
@endsection