<table border="2">
<tr>
<th>Name</th>
<th>Last name</th>
<th>Email</th>
<th>Password</th>
<th>Gender</th>
<th>DOB</th>
<th>Image</th>
<th>Bobbies</th>
<th colspan="2">Action</th>
</tr>

@foreach($disp as $key => $val)

<tr>
<td>{{ $val->name }}</td>
<td>{{ $val->lname }}</td>
<td>{{ $val->email }}</td>
<td>{{ $val->password }}</td>
<td>{{ $val->gender }}</td>
<td>{{ $val->DOB }}</td>
<td>{{ $val->image }}</td>
<td>{{ $val->Hobbies }}</td>

<td>

<form method="POST" action="{{url('tdelete',$val->id)}}">
{{ method_field('DELETE')}}
{{ csrf_field() }}
<input type="submit" name="pdelete" value="Delete">
</form>

</td>
<td><a href="tupdate/{{Crypt::encryptString($val->id)}}">Update</a></td>
</tr>


@endforeach
</table>
