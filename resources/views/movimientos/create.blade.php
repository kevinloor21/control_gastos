@extends('layouts.app')
@section('content')
<div class="container col-md-4" >
	<div class="col-md-12" style="margin-top: 2%;">
		<h3 style="font-family:algeria;text-align: center;"><img src="https://salarios.trabajo.gob.ec/imagenes/registroTrabajo.png" width="40px"> Formulario de registro de Movimientos</h3>

<form action="{{route('movimientos.store')}}" method="POST">
	@csrf
				<div class="form-group">

	<label for="">Cantidad:</label>
	<input class="form-control" name="mov_cantidad" id="mov_cantidad">
  				</div>
				<div class="form-group">
<label for="">Detalle:</label>
	<input class="form-control" name="mov_detalle" id="mov_detalle">
  				</div>

	  			<div class="form-group">
					<label for="">Tipo:	
		</label>
<div class="form-group form-inline">
  <input class="form-check-input" type="radio" name="mov_tipo" value="1">
  <label class="form-check-label" for="inlineRadio1">Ingreso</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="mov_tipo" value="0">
  <label class="form-check-label" for="inlineRadio2">Egreso</label>
</div>	  			</div>

	  			<div class="form-group">
		<label for="">Fecha</label>
	<input type="date" class="form-control" name="mov_fecha" id="mov_fecha">
	  			</div>
<div class="form-group">
	<label for="">Concepto</label>
	<select name="tip_id" id="tip_id" class="form-control">
<option  disabled>Elija una opcion</option>
         
         @foreach($tipos as $t)
         <option value=" {{$t->tip_id}} "> {{$t->tip_detalles}} </option>
         @endforeach

		</select>
</div>


				<div class="form-group">
					<button type="submit" class="btn btn-success">Guardar</button>
</form>
				</div>
		</form> 
	</div>
</div>	
@endsection