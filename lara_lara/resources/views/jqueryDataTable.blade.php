<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 

  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>


</head>
<body>
<div class="container">
 
 Total:  {{ $count }}  
  <table class="table" id="thanos">
    <thead>
      <tr>
        <th>id</th>
        <th>ct</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach ($data as $value)
      <tr>
        <td>{{ $value->id }}</td>
        <td>{{ $value->city }}</td>
      </tr>
    @endforeach
    </tbody>
    
  </table>

</div>

<script type="text/javascript">

$(document).ready(function(){
    // alert('thanos');
    $('#thanos').DataTable();

});

</script>

</body>
</html>