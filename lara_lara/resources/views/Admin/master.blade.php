  

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.jeweltheme.com/hi5dash/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2019 05:30:18 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Hi5Dash - HTML5 Admin Template By Jewel Theme</title>
  <meta name="description" content="Hi5Dash - HTML5 Admin Template By Jewel Theme">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 @include ('Admin.Common.link')


</head>


<body class="index-01">


@include('Admin.Common.Header')


  <div class="content-wrapper container-fluid">
  @include('Admin.Common.Navbar')

  @yield('main_content')

    @include('Admin.Common.Footer')
  
</div>



  @include('Admin.Common.script')
  <script>
    $(function() {
      "use strict";

      $('#calendar').fullCalendar();

    });
  </script>

</body>

<!-- Mirrored from demos.jeweltheme.com/hi5dash/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2019 05:30:54 GMT -->
</html>