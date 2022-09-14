<html>
<h2>Data Retrieval</h2>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<div style="margin-right:2%;float:right;">
<button><a href="view_add">ADD</a></button><br>
</div>
@if(Session::has('success'))
<div class=alert alert-success" role="alert">
{{Session::get("success")}}
@endif

<table border=10 width=100% margin=3% >
<thead>
    <th>
<td>Name</td>
<td>Email</td>
<td>Action</td>
</th>
</thead>
@foreach($data as $datum)
<tr>
<td>{{$datum->id}}</td>
<td>{{$datum->name}}</td>
<td>{{$datum->email}}</td>
<td><button class="btn btn-danger"><a href="{{url('view_edit/'.$datum->id)}}">Edit</a></button>||
<button class="btn btn-danger"><a href="{{url('view_delete/'.$datum->id)}}">Delete</a></button></td>
</tr>
@endforeach
</table>
</html>