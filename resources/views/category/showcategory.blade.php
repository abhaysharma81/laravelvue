@extends('home')
@section('category')
@if($message=Session::get('message'))
<div class="alert alert-danger">{{$message}}</div>
@endif
Your categories
<table class="table">
  <thead>
    <tr>
      <th scope="col">Checkbox</th>
      <th scope="col">No.</th>
      <th scope="col">Cate_name</th>
      <th scope="col">created_at</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($category as $category)
    <tr>
	    <td><input type="Checkbox" name="checkbox"></td>
	    <td>{{$category->id}}</td>
	    <td>{{$category->cate_name}}</td>
	    <td>{{$category->created_at}}</td>
	    <td><a href="deletecategory/{{$category->id}}">Delete</a></td>
      <td><a href="editcategory/{{$category->id}}">Edit</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection