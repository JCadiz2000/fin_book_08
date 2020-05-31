var ctx = document.getElementById("monthChart");

var barChart = new Chart(ctx,{
    type:'bar',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        datasets: [{
          label: "Savings",
          backgroundColor: "rgba(28, 200, 138, 0.5)",
          hoverBackgroundColor: "rgba(28, 200, 138, 1)",
          borderColor: "rgba(28, 200, 138, 1)",

          data: [20000,40000,20000,40000,20000,40000,20000,40000,20000,40000,20000,40000],
        },{
          label: "Expenses",
          lineTension: 0.3,
          backgroundColor: "rgba(231, 74, 59, 0.5)",
          hoverBackgroundColor: "rgba(231, 74, 59, 1)",
          borderColor: "rgba(231, 74, 59, 1)",

          data: [10000,5000,10000,5000,10000,5000,10000,5000,10000,5000,10000,5000],
        }],
        
    },
    options: {
        title:{
            display:true,
            text:'January Report',
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
                maxTicksLimit: 12
            }
            }],
            yAxes: [{
            ticks: {
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