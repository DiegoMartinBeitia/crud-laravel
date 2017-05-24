@extends('layouts')
@section('content')
	<div class="col-sm-8 text-center"" >
		<h2> 
			Listado de Productos
			<a href="{{route('products.create')}}" class="btn btn-primary pull-right">
				Nuevo
			</a>			
		</h2>
		@include ('products.fragments.info')
		<table class ="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">id</th>
					<th>Nombre del producto</th>
					<th colspan="3"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $product)
					<tr>
						<td>
							{{$product->id}}
							</td>
						<td> 
							<strong>{{$product->name}}</strong>
								<br>{{$product->short}}
						</td>
						<td>
							<a href="{{route('products.show',($product->id))}} ">
								Ver
							</a>
						</td>
						<td>
							<?php
							/* asi anda
							<a href="products/{{$product->id}}/edit">
								<button type="button" class="btn btn-warning">Editar
								</button>
							</a>
							pero es mas prolijo como pusimos abajo, en vez de poner la ruta, ponemos el NOMBRE DE LA RUTA!!!
							asi si cambia la ruta, el nombre permanece!!!
							*/
							?>
							<a href="{{route('products.edit',($product->id))}}"> 
								Editar								
							</a>
						</td>
						<td>
							<form action="{{route('products.destroy',($product->id))}}" method="POST">
								{{csrf_field()}}
								{{method_field('DELETE')}}
								<button type="submit" >Borrar
								</button>
							</form>
						</td>
					</tr>					
				@endforeach
			</tbody>
		</table>
		{{$products->render()}}
	</div>
	<div class="col-sm-4">
		@include ('products.fragments.aside')
	</div>
@endsection

