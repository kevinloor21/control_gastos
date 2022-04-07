@extends('layouts.app')
@section('content')

<h1 class="text-black" class="bg-info">𝘓𝘪𝘴𝘵𝘢 𝘥𝘦 𝘶𝘴𝘶𝘢𝘳𝘪𝘰𝘴</h1>

<a href="{{route('usuarios.create')}}" class="btn btn-primary">Nuevo Usuario</a>

<table class="table text-black">
<th>#</th>
<th>Nombre</th>
<th>Cedula</th>

@foreach($users as $u)
<tr>

<td>{{$loop->iteration}} </td>
<td>{{$u->usu_name}} </td>
<td>{{$u->usu_cedula}} </td>


</tr>
@endforeach
</table>
@endsection

