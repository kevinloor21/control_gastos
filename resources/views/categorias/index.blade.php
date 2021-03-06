@extends('layouts.app')
@section('content')

<h1 class="" class="bg-info text-dark">𝘓𝘪𝘴𝘵𝘢 𝘥𝘦 𝘤𝘢𝘵𝘦𝘨𝘰𝘳𝘪𝘢𝘴</h1>

<a href="{{route('categorias.create')}}" class="btn btn-primary">Nuevo</a>

<p class="text-white"></p>



<table class="table text-black">

<th class="text-black">#</th>
<th class="text-black">Detalle</th>
<th class="text-black">Acciones</th>

@foreach($categorias as $cat)

<tr>
	<td class="text-black ">{{$loop->iteration}}</td>
	<td class="text-black ">{{$cat->cat_detalle}}</td>
	<td>
		
		<div class="row"> 
		<a href="{{route('categorias.edit',$cat->cat_id)}}" class="btn btn-info ">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15px"> <path d="M373.1 24.97C401.2-3.147 446.8-3.147 474.9 24.97L487 37.09C515.1 65.21 515.1 110.8 487 138.9L289.8 336.2C281.1 344.8 270.4 351.1 258.6 354.5L158.6 383.1C150.2 385.5 141.2 383.1 135 376.1C128.9 370.8 126.5 361.8 128.9 353.4L157.5 253.4C160.9 241.6 167.2 230.9 175.8 222.2L373.1 24.97zM440.1 58.91C431.6 49.54 416.4 49.54 407 58.91L377.9 88L424 134.1L453.1 104.1C462.5 95.6 462.5 80.4 453.1 71.03L440.1 58.91zM203.7 266.6L186.9 325.1L245.4 308.3C249.4 307.2 252.9 305.1 255.8 302.2L390.1 168L344 121.9L209.8 256.2C206.9 259.1 204.8 262.6 203.7 266.6zM200 64C213.3 64 224 74.75 224 88C224 101.3 213.3 112 200 112H88C65.91 112 48 129.9 48 152V424C48 446.1 65.91 464 88 464H360C382.1 464 400 446.1 400 424V312C400 298.7 410.7 288 424 288C437.3 288 448 298.7 448 312V424C448 472.6 408.6 512 360 512H88C39.4 512 0 472.6 0 424V152C0 103.4 39.4 64 88 64H200z"/></svg>
	</a>
	<form action="{{route('categoria.destroy',$cat->cat_id)}}" method="POST" onsubmit="return confirm ('Desea eliminar esta categoria?') ">
  	@csrf
  	<button class="btn btn-danger"> <img src="https://iconarchive.com/download/i83718/custom-icon-design/mono-general-4/trash.ico" width="15px"></button>
</div>

</div>
  </form>
</td>

</tr>


@endforeach	


</table>
@endsection