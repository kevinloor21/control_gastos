@extends('layouts.app')
@section('content')

<h4>FORMULARIO DE REGISTRO DE MOVIMIENTOS</h4>

	@csrf
	<div class="container">
		<div class="row">
	     <div class="col-md-4">
	<label for="" >CONCEPTO</label>
	<select name=" " id=" " class="form-control">
		<option value="">Elija una opcion</option>
		
		@foreach($tipos as $t)
		<option value="{{$t->tip_id}}">{{$t->tip_detalles}} </option>
		@endforeach

	</select>
    </div>
    </div>
</div>
</form>


@endsection