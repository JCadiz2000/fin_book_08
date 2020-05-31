@extends('layouts.accountlayout')
@section('content')
<!-- Start -->

   
   <!-- Content Wrapper -->
   <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
         <!-- Topbar -->
         @include('interfaces.topbar')
         <!-- End of Topbar -->
         <!-- Begin Page Content -->
         <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Monthly Report</h1>
            <p class="mb-4">View your Monthly Expenses, Savings and Income here!</p>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Month Chart</h6>
                            <div class="d-flex flex-row align-items-center">
                                <label for="date">Date:</label>
                                <select name="" id="" class="form-control">
                                    <option selected disabled>Select Month</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                                <button type="button" class="btn btn-primary btn-sm"><i class="far fa-calendar-plus"></i> Generate</button>
                            </div>

                            
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="monthChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         
         <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
         <div class="container my-auto">
            <div class="copyright text-center my-auto">
               <span>Copyright &copy; WebDev2 2020</span>
            </div>
         </div>
      </footer>
      <!-- End of Footer -->
   </div>
   <!-- End of Content Wrapper -->

<!-- End -->

@endsection