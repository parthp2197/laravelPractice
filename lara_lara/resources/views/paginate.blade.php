<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
  <table class="table">
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
    {{ $data->links() }}
  </table>
  <!-- {{ $data->links() }} -->
</div>
</body>
</html>
