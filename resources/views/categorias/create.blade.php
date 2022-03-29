@extends('layouts.app')
@section('content')
<script src="{{asset('js/categorias.js')}}"> </script>

<div class="container col-md-4" >
	<div class="col-md-12" style="margin-top: 25%;">
		<h1 style="font-family:algeria;text-align: center-left;"><img src="http://corazondigital.digitalheart.mx/wp-content/uploads/2018/03/icono-buyer-persona-estrategias-digitales-de-redes-sociales-digital-heart-mexico.png" width="60px"> Ingreso de Categorias</h1>	 
		<form action="{{route('categoria.store')}}" method="POST" onsubmit="return validar()">
			@csrf
    <label class="text-" for="">Detalle De la Categoria</label>
    <input type="text" name="cat_detalle">
    <button type="submit" class="btn btn-success">Guardar</button>
</form>
@endsection