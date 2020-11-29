<style>
body{
    background-color: #525252;
}
.centered-form{
	margin-top: 60px;
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
</style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
@foreach($edit as $key => $val)

<?php
$h = explode(',',$val->orm_hobbies);
print_r($h);
?>

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please sign up for Bootsnipp <small>It's free!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" action="{{url('orm_edit',Crypt::encryptString($val->orm_id))}}" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" value="{{ $val->orm_fname }}">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" value="{{ $val->orm_lname }}">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" value="{{ $val->orm_email }}">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" value="{{ $val->orm_password }}">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="radio" name="gender" id="gender" @if($val->orm_gender == 'male' ) checked  @endif value="male"  >Male <br>
										<input type="radio" name="gender" id="gender"  @if($val->orm_gender == 'female' ) checked  @endif  value="female"  >Female
			    					</div>
			    				</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
									<input type="date" name="dob" id="dob" class="form-control input-sm" value="{{ $val->orm_dob }}">
			    					</div>
			    				</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
                                    <img src="../uploads/{{$val->orm_image}}">
                                    <input type="hidden" name="old_image" id="image" class="form-control input-sm" value="{{$val->orm_image}}">
									<input type="file" name="image" id="image" class="form-control input-sm" value="Upload file">
			    					</div>
			    				</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
									<input type="checkbox" name="hby[]" @if(in_array('java',$h)) checked @endif  id="hby" value="java" >java									<input type="checkbox" name="hby[]"  @if(in_array('python',$h)) checked @endif id="hby" value="python" >Python
									<input type="checkbox" name="hby[]" @if(in_array('php',$h)) checked @endif  id="hby" value="php" >Php
			    					</div>
			    				</div>

			    			</div>
			    			
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
    @endforeach