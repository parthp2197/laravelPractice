
@if(session('message'))
<div class="alert alert-success" > 
{{ session('message') }}
</div>
@endif

<table border="2">
<tr>
<th>Name</th>
<th>Last name</th>
<th>Email</th>
<th>Password</th>
<th>Gender</th>
<th>DOB</th>
<th>Image</th>
<th>Hobbies</th>
<th colspan="2">Action</th>
</tr>


@foreach($data1 as $key => $val)
<tr>
<td>{{ $val->orm_fname }}</td>
<td>{{ $val->orm_lname }}</td>
<td>{{ $val->orm_email }}</td>
<td>{{ $val->orm_password }}</td>
<td>{{ $val->orm_gender }}</td>
<td>{{ $val->orm_dob }}</td>
<td>{{ $val->orm_image }}</td>
<td>{{ $val->orm_hobbies }}</td>

<td>
<form method="POST" action="{{url('orm_delete',$val->orm_id)}}">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<input type="submit" name="orm_delete" value="Delete">
</form>
</td>

</td>
<td><a href="orm_update/{{Crypt::encryptString($val->orm_id)}}">Update</a></td>
</tr>

@endforeach
</table>