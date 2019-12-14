@extends('home')
@section('category')
<form action="/updatecategory/{{$category->id}}" method="post">
	@csrf
	<div>
		<input type="text" name="cate_name" class="form-control" value="{{$category->cate_name}}">
	</div><br>
	<input type="submit" value="update" class="btn btn-primary">
</form>
@endsection