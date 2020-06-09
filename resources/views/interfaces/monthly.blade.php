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
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col align-self-end d-flex align-items-center">
                    <label for="date">Date:</label>
                    <select name="" id="date" class="form-control">
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
                    <button type="button" class="btn btn-primary btn-sm" id="generate" onclick="updateChart()"><i class="far fa-calendar-plus"></i> Generate</button>
                </div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col align-slef-center">
                    <div class="alert alert-info" role="alert" id="notice">
                        Select a date to generate a report!
                    </div>
                    <div class="alert alert-danger" role="alert" id="warning" style="display:none;">
                        Please select a date first to generate a report!
                    </div>
                    <div class="alert alert-info" role="alert" id="notif" style="display:none;">
                        No record can be found for this date!
                    </div>
                </div>
                <div class="col"></div>
            </div>
            <div class="row charts" style="display:none;">
                <div class="col-xl-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Monthly Income and Expense Chart</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="monthChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Monthly Category Expense Chart</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="expenseChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Daily Expense Chart</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="dailyChart"></canvas>
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

@section('scriptMonthly')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js"></script>
<script>

var ctxMonth = document.getElementById("monthChart");
var barChart = new Chart(ctxMonth,{
    type:'bar',
    data: {
        datasets: [{
          label: "Income",
          backgroundColor: "rgba(28, 200, 138, 0.5)",
          hoverBackgroundColor: "rgba(231, 74, 59, 1)",
          borderColor: "rgba(231, 74, 59, 1)",

        },{
          label: "Expenses",
          backgroundColor: "rgba(231, 74, 59, 0.5)",
          hoverBackgroundColor: "rgba(231, 74, 59, 1)",
          borderColor: "rgba(231, 74, 59, 1)",

        }],
        
    },
    options: {
        title:{
            display:true,
            fontSize: 25,
        },
        maintainAspectRatio: false,
        layout: {
            padding: {
            left: 10,
            right: 25,
            top: 0,
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
                // maxTicksLimit: 10
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
function genBar(selectedDate,dateNum,months) {
    var days=[];
    var expenseData = [];
    var incomeData = [];
    var monthDays = new Date(2020,dateNum+1,0).getDate();
    for(i=1 ;i<=monthDays;i++){
        expenseData.push(0);
        incomeData.push(0);
        days.push(i);
    }
    @foreach($data['ledger'] as $ledger) 
        if(months[new Date("{{$ledger->date}}").getMonth()] == selectedDate){ 
        @foreach($data['category'] as $category)      
            if("{{$ledger->category}}" == "{{$category->description}}" && "{{$category->type}}" == "Expense"){
                expenseData[new Date("{{$ledger->date}}").getDate()-1] += {{$ledger->amount}}; 
            }else if("{{$ledger->category}}" == "{{$category->description}}" && "{{$category->type}}" == "Income"){
                incomeData[new Date("{{$ledger->date}}").getDate()-1] += {{$ledger->amount}}; 
            }
        @endforeach    
        }    
    @endforeach
    barChart.data.datasets[0].data = incomeData;
    barChart.data.datasets[1].data = expenseData;
    barChart.data.labels = days;
    barChart.options.title.text = selectedDate+" Report";
    barChart.update();
};
</script>
<script>

var ctxDaily = document.getElementById("dailyChart");

var lineChart = new Chart(ctxDaily,{
    type: 'line',
    data: {
        labels: ['12am','1am','2am','3am','4am','5am','6am','7am','8am','9am','10am','11am','12pm','1pm','2pm','3pm','4pm','5pm','6pm','7pm','8pm','9pm','10pm','11pm'],
        datasets: [{
            label: "Expenses",
            lineTension: 0.3,
            backgroundColor: "rgba(231, 74, 59, 0.5)",
            borderColor: "rgba(231, 74, 59, 1)",
            pointRadius: 3,
            pointBackgroundColor: "rgba(231, 74, 59, 1)",
            pointBorderColor: "rgba(231, 74, 59, 1)",
            pointHoverRadius: 6,
            pointHoverBackgroundColor: "rgba(231, 74, 59, 1)",
            pointHoverBorderColor: "rgba(231, 74, 59, 1)",
            pointHitRadius: 10,
            pointBorderWidth: 2,
        }]
    },
    options:{
        maintainAspectRatio: false,
        layout: {
            padding: {
            left: 10,
            right: 25,
            top: 0,
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
            }],
            yAxes: [{
            ticks: {
                beginAtZero: true,
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
function genLine(selectedDate,dateNum,months) {
    let data =[];
    for(i=0;i<24;i++){
        data.push(0);
    }
    @foreach($data['ledger'] as $ledger) 
        if(months[new Date("{{$ledger->date}}").getMonth()] == selectedDate){ 
        @foreach($data['category'] as $category)      
            if("{{$ledger->category}}" == "{{$category->description}}" && "{{$category->type}}" == "Expense"){
                data[new Date("{{$ledger->created_at}}").getHours()] += {{$ledger->amount}}; 
            }
        @endforeach    
        }    
    @endforeach
    lineChart.data.datasets[0].data= data;
    lineChart.update();
};
</script>
<script>
let labels=[];
let bgColor =[];

function getRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

var ctxExpense = document.getElementById("expenseChart");
    
var expenseChart = new Chart(ctxExpense,{
    type: 'pie',
  data: {
    datasets: [{
      borderColor: "rgba(0,0,0,0.01)",
      backgroundColor: bgColor,
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: true,
      position: 'bottom'
    },
  },
});   
function genPie(selectedDate,months) {
let data=[];
@foreach($data['category'] as $category)
    @if($category->type == "Expense")
        labels.push("{{$category->description}}")
        var count = 0;
        @foreach($data['ledger'] as $ledger)
            if("{{$ledger->category}}"=="{{$category->description}}" && months[new Date("{{$ledger->date}}").getMonth()]==selectedDate){
                count++;
            }
        @endforeach
        data.push(count);
        bgColor.push(getRandomColor());
    @endif
@endforeach
expenseChart.data.labels = labels;
expenseChart.data.datasets[0].data = data;
expenseChart.update();
labels=[];
}
</script>
<script>
let months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
function updateChart(){
    var set=0;
    if($("#date").val()==null){
        $("#warning").show();
        $("#notice").hide();
    }else{
        $("#warning").hide();
        $("#notice").hide();

        @foreach($data['ledger'] as $ledger)      
            if(months[new Date("{{$ledger->date}}").getMonth()]==$("#date").val()&& set!=1){
                set++
                $(".charts").show();
                $("#notif").hide();
                genPie($("#date").val(),months);
                genBar($("#date").val(),new Date("{{$ledger->date}}").getMonth(),months);
                genLine($("#date").val(),new Date("{{$ledger->date}}").getMonth(),months);
            }
        @endforeach
            else if(set==0){
                $("#notif").show();
                $(".charts").hide();
            }
    }
    
};
</script>
@endsection