@extends('home')
@section('category')
<style>
</style>
<form action="/category" method="post">
	@csrf
	<div>
		<label for="cate">Create Category</label>
		<input type="text" name="cate_name" class="form-control col-5" id="cate" placeholder="Create your Category">
		@if($errors->any())
			@foreach($errors->all() as $error)
			<div style="color:red;">{{$error}}</div>
			@endforeach
		@endif
			</div><br>
	<input type="submit" class="btn btn-primary">
</form>
@endsection