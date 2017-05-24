@if(Session::has('descripcion'))
	<div class ="alert alert-info">
		{{Session::get('descripcion')}}
	</div>
@else
	<div class ="alert alert-info">
		Desde aqui podremos crear, editar borrar poductos	
	</div>
@endif