<html>
<h1>Enter details</h1>
<!-- CSS only -->
@if(Session::has('success'))
<div class=alert alert-success" role="alert">
{{Session::get("success")}}
@endif
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<form method="post" action="{{url('updateData')}}" class="form-control">
@csrf
<input type="hidden" name="id" value= "{{$data->id}}">
<label>Name:    </label><input type="text" value= "{{$data->name}}" name="name" placeholder="enter name"><br><br>
<label>Email:   </label><input type="email" value= "{{$data->email}}" name="email" placeholder="enter email"><br>
<br>
<button class="btn btn-primary">SUBMIT</button>
</form>
</html>