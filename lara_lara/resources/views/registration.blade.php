<h2>{{ 'registration' }} </h2>
<form method="POST" action="{{url('insert')}}">
{{ csrf_field() }}
<label> name </label>
<input type="text" name="name"><br>
<label> lname</label>
<input type="text" name="lname"><br>
<label> email</label>
<input type="email" name="email"><br>
<label> password</label>
<input type="password" name="password"><br>
<label>Gender </label>
<input type="radio" name="gender" checked value="male"> Male
<input type="radio" name="gender" value="female"> Female <br> 
<label> Dob </label>
<input type="date" name="dob">
<input type="submit" name="submit" value="reg">
</form>