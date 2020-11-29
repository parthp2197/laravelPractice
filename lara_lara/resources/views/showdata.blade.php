@if(session('Message'))

{{ session('Message') }}
@endif
<table border="2">
<tr>
<th>name</th>
<th>email</th>
<th colspan= "2"> Action </th>
</tr>

@foreach($akash as $key => $val)

<tr>
<td> {{ $val->name }} </td>
<td> {{ $val->email }} </td>
<td> 
<form method="POST" action="{{url('delete',$val->id)}}">
{{ method_field('DELETE') }}
{{ csrf_field() }}
    <input type="submit" name="delete" value="DELETE">
</form>
 </td>
 <td> <a href = "update/{{Crypt::encryptString($val->id)}}"> UPDATE </a>    </td>
</tr>

@endforeach



</table>