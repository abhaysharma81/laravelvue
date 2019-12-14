@extends('home')
@section('category')
<div style="height:350px;">
<table>
  <tbody>
  	<tr>
  		<th>Your Messages:</th>
  	</tr>
  	@foreach($messageshow as $value)
    <tr>
      <td class="col-11">{{$value->message}}</td>
     <td><a href="messagedel">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
	<form method="post" action="/messagestore">
		@csrf
		<input type="text" name="message" class="col-10">
		<input type="submit" value="send" class="btn btn-primary">
	</form>	
@endsection
