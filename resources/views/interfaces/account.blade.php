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
             <!-- Page Heading -->
             <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
             </div>
             <!-- Content Row -->
             <div class="row">
                <!-- Income (Monthly) Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                   <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                         <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                               <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Income (Monthly)</div>
                               <div class="h5 mb-0 font-weight-bold text-gray-800"><span>₱</span>30,000</div>
                            </div>
                            <div class="col-auto">
                               <i class="fas fa-calendar fa-2x text-primary"></i>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <!-- Savings (Monthly) Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                   <div class="card border-left-success shadow h-100 py-2">
                      <div class="card-body">
                         <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Savings (Monthly)</div>
                               <div class="h5 mb-0 font-weight-bold text-gray-800"><span>₱</span>5,000</div>
                            </div>
                            <div class="col-auto">
                               <i class="fas fa-wallet fa-2x text-success"></i>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <!-- Expenses (Monthly) Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                   <div class="card border-left-danger shadow h-100 py-2">
                      <div class="card-body">
                         <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                               <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Expenses (Monthly)</div>
                               <div class="h5 mb-0 font-weight-bold text-gray-800"><span>₱</span>25,000    </div>
                            </div>
                            <div class="col-auto">
                               <i class="fas fa-dollar-sign fa-2x text-danger"></i>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <!-- Content Row -->
             <div class="row">
                <!-- Area Chart -->
                <div class="col-xl-12 ">
                   <div class="card shadow mb-4">
                      <!-- Card Header - Dropdown -->
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                         <h6 class="m-0 font-weight-bold text-primary">Monthly Overview</h6>
                      </div>
                      <!-- Card Body -->
                      <div class="card-body">
                         <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <!-- Content Row -->
             <div class="row">
                <div class="col-xl-6">
                   <div class="card shadow mb-4">
                      <div class="card-header py-3">
                         <h6 class="m-0 font-weight-bold text-primary">My Categories</h6>
                      </div>
                      <div class="card-body">
                         <div class="table-responsive">
                            <table class="table table-bordered" id="categoryList" width="100%" cellspacing="0">
                               <thead>
                                  <tr>
                                     <th>Description</th>
                                     <th>Type</th>
                                  </tr>
                               </thead>
                               <tbody>
                                  @foreach($data['category'] as $category)
                                  <tr>
                                     <td>{{$category->description}}</td>
                                     <td>{{$category->type}}</td>
                                  </tr>
                                  @endforeach
                               </tbody>
                            </table>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xl-6">
                   <div class="card shadow mb-4">
                      <div class="card-header py-3">
                         <h6 class="m-0 font-weight-bold text-primary">My Ledgers</h6>
                      </div>
                      <div class="card-body">
                         <div class="table-responsive">
                            <table class="table table-bordered" id="ledgerList" width="100%" cellspacing="0">
                               <thead>
                                  <tr>
                                     <th>Date</th>
                                     <th>Desctiption</th>
                                     <th>Category</th>
                                     <th>Ammount</th>
                                  </tr>
                               </thead>
                               <tbody>
                                  @foreach($data['ledger'] as $ledger)
                                  <tr>
                                    <td>{{$ledger->date}}</td>
                                    <td>{{$ledger->description}}</td>
                                    <td>{{$ledger->category}}</td>
                                    @foreach($data['category'] as $category)
                                      @if($category->description == $ledger->category)
                                          @if($category->type == 'Income')
                                          <td class="text-success">₱{{$ledger->amount}}</td>
                                          @break
                                          @else
                                          <td class="text-danger">(₱{{$ledger->amount}})</td>
                                          @break
                                          @endif
                                      @endif                               
                                    @endforeach
                                  </tr>
                                  @endforeach
                               </tbody>
                            </table>
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

    
