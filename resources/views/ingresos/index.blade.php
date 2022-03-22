@extends('layouts.app')
@section('content')


<a href=" {{route('ingresos.create')}} " class="btn-pimary btn">Nuevo</a>
<table>
	<th>#</th>
	<th>Fecha</th>
	<th>Tipo</th>
	<th>Detalle</th>
	<th>Cantidad</th>


</table>



@endsection