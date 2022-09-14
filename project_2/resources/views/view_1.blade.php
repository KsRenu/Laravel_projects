<html>
<h1>Enter details</h1>
<!-- CSS only -->
@if(Session::has('success'))
<div class=alert alert-success" role="alert">
{{Session::get("success")}}
@endif
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<form method="post" action="{{url('view_store')}}" class="form-control">
@csrf
<br>
<label>Name:    </label><input type="text" name="name" placeholder="enter name"><br><br>
<label>Email:   </label><input type="email" name="email" placeholder="enter email"><br>
<br>
<button class="btn btn-primary">SUBMIT</button>
</form>
</html>