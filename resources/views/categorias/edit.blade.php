@extends('layouts.app')
@section('content')



<script src="{{asset('js/categorias.js')}}"> </script>

<div class="container col-md-4" >
	<div class="col-md-12" style="margin-top: 25%;">
		<h1 style="font-family:algeria;text-align: center-left;"><img src="http://corazondigital.digitalheart.mx/wp-content/uploads/2018/03/icono-buyer-persona-estrategias-digitales-de-redes-sociales-digital-heart-mexico.png" width="60px"> Ingreso de Categorias</h1>	 
		<form action="{{route('categoria.store')}}" method="POST" onsubmit="return validar(













		) ">
			@csrf

				<div class="form-group">
                    
					<div></div>
					<label for="">Detalle Categoria:</label>
				    <input type="text" value="{{$categoria->cat_detalle}}" name="cat_detalle" id="cat_detalle" class="form-control" placeholder="Realice los cambio que desea">
  				</div>
  				
				<div class="form-group">
					<button class="btn btn-outline-info"><img src="https://cdn.pixabay.com/photo/2020/07/24/12/58/save-5433916_960_720.png" width="30x"> Registrar</button>
				</div>
		</form>
	</div>
</div>	
@endsection