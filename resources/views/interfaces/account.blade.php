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
                               <div class="h5 mb-0 font-weight-bold text-gray-800"><span>₱</span>{{$data['income']}}</div>
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
                               <div class="h5 mb-0 font-weight-bold text-gray-800"><span>₱</span>{{$data['savings']}}</div>
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
                               <div class="h5 mb-0 font-weight-bold text-gray-800"><span>₱</span>{{$data['expense']}}</div>
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
                            <canvas id="dashboardChart"></canvas>
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

@section('scriptDashboard')
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

var ctxDash = document.getElementById("dashboardChart");
var dashboardChart = new Chart(ctxDash, {
  type: 'bar',
  data: {
    labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
    datasets: [{
      label: "Savings",
      backgroundColor: "rgba(28, 200, 138, 0.5)",
      hoverBackgroundColor: "rgba(28, 200, 138, 1)",
      borderColor: "rgba(28, 200, 138, 1)",
      
    },{
      label: "Expenses",
      backgroundColor: "rgba(231, 74, 59, 0.5)",
      hoverBackgroundColor: "rgba(231, 74, 59, 1)",
      borderColor: "rgba(231, 74, 59, 1)",
    }],
    
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },  
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 12
        }
      }],
      yAxes: [{
        ticks: {
           beginAtZero:true,
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return '₱' + number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': ₱' + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});

$(document).ready(function() {
   var expenseData = [];
   var incomeData = [];
   for(i=0;i<12;i++){
      incomeData.push(0);
      expenseData.push(0);
   }
   @foreach($data['ledger'] as $ledger)
      @foreach($data['category'] as $category)
      if("{{$ledger->category}}" == "{{$category->description}}" && "{{$category->type}}" == "Expense"){
         expenseData[new Date("{{$ledger->date}}").getMonth()] += {{$ledger->amount}}; 
      }else if("{{$ledger->category}}" == "{{$category->description}}" && "{{$category->type}}" == "Income"){
         incomeData[new Date("{{$ledger->date}}").getMonth()] += {{$ledger->amount}}; 
      }
      @endforeach
   @endforeach

   dashboardChart.data.datasets[0].data = incomeData;
   dashboardChart.data.datasets[1].data = expenseData;
   dashboardChart.update();
});

</script>
@endsection
    
