<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Notebook</title>
    <!-- Styles -->
    <!-- Custom fonts for this template-->
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/img/favicon.ico') }}" />
    
    <link href="{{ URL::asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    
    <link href="{{ URL::asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ URL::asset('vendor/datatables/dataTables.bootstrap4.min.css') }}">
    
    <!-- Styles -->
</head>
<body id="page-top">
 
<!-- Content -->
@yield('content')
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- End Content -->

<!-- Bootstrap core JavaScript-->
<script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ URL::asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ URL::asset('js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ URL::asset('vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
  
  <!-- Page level custom scripts -->
  <script src="{{ URL::asset('js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ URL::asset('js/demo/chart-pie-demo.js') }}"></script>
  <script src="{{ URL::asset('js/demo/datatables-demo.js') }}"></script>
  <!-- Dasboard script -->
  <script>
    $(document).ready(function() {
        $('#categoryList').DataTable({
            ordering: false,
            lengthMenu:[[5,10,25,50,-1],[5,10,25,50,'All']],
            searching: false
        });    
    });
    $(document).ready(function() {
        $('#ledgerList').DataTable({
            ordering: false,
            lengthMenu:[[5,10,25,50,-1],[5,10,25,50,'All']],
            searching: false
        });    
    });
  </script>
  <!-- Category script -->
  <script>
   $(document).ready(function() {
       $('#categoryTable').DataTable({
           ordering: false,
           lengthMenu:[[5,10,25,50,-1],[5,10,25,50,'All']],
           searching: false
       });    
   });
   $('#editBtn').click(function(){
       $('#closeBtn').show();
       $('#editBtn').hide();
       $('.optionRow').show();
   });
   $('#closeBtn').click(function(){
       $('#closeBtn').hide();
       $('#editBtn').show();
       $('.optionRow').hide();
   });
</script>
<!-- Ledger script -->
<script>
   $(document).ready(function() {
      $('#ledgerTable').DataTable({
          ordering: false,
          lengthMenu:[[5,10,25,50,-1],[5,10,25,50,'All']],
          searching: false
      });    
   });
   $('.datepicker').datepicker();
</script>
  
  
</body>
</html>