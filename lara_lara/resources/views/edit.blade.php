<h2>{{ 'EDit' }} </h2>
@foreach($edit as $key => $val)
<form method="POST" action="{{url('edit',$val->id)}}">
{{ csrf_field() }}
<label> name </label>
<input type="text" name="name" value="{{ $val->name}}"><br>
<label> lname</label>
<input type="text" name="lname" value="{{ $val->lname }}"><br>
<label> email</label>
<input type="email" name="email" value="{{ $val->email }}"  ><br>

<label>Gender </label>
<input type="radio" name="gender"  @if($val->gender  == 'male')  checked  @endif  value="male"> Male
<input type="radio" name="gender"  @if($val->gender == 'female')  checked  @endif value="female"> Female <br> 
<label> Dob </label>
<input type="date" name="dob" value="{{ $val->dob }}">
<input type="submit" name="submit" value="update">
</form>
@endforeach