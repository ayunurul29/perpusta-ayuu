<!DOCTYPE html>
<html lang="en">
<head>

<title>Perpus</title>

  @include('includes.style')


</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    @include('includes.header')

    @include('includes.sidebar')
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          @yield('content')
        </div>
        
      </div> 

   </div>

   <!-- /.content -->
   <!-- /.content-wrapper -->
   @include('includes.footer')

   <!-- Control Sidebar -->
   <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>


  <!-- /.control-sidebar -->
      
        @include('sweetalert::alert')
</div>
</body>
</html>