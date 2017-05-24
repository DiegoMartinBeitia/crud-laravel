@extends('layouts')
@section('content')
	<div class="col-sm-8">
		<h2>
		<label for="name"></label> 
		<input type="text" name="name" value="{{$product->name}}">
			
		</h2>
		<div class="row">
		  <label for="short"></label> 
		  <input type="text" name="short" value="{{$product->short}}">
		</div>
		<div class="row">
		  <label for="body"></label> 
		 	<input type="text" name="short" value="{{$product->body}}">
		</div>
	</div>
@endsection

