<table border="1">
<tr>
<th>Name</th>
<th>Email</th>
<th colspan="2">Action</th>
</tr>

@foreach($parth as $key => $val)

<tr>
<td>{{ $val->name }}</td>
<td>{{ $val->email }}</td>

<td>
<form method="POST" action="{{url('pdelete',$val->id)}}">
{{ method_field('DELETE')}}
{{ csrf_field() }}
<input type="submit" name="pdelete" value="Delete">
</form>

</td>
<td><a href="pupdate/{{Crypt::encryptString($val->id)}}">Update</a></td>
</tr>


@endforeach
</table>
