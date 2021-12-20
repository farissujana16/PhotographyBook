@extends('back/main')

@section('konten')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="au-card m-b-30">
                        <div class="au-card-inner">
                            <h3 class="title-2 m-b-40">Team Commits</h3>
                            <canvas id="team-chart"></canvas>
                        </div>
                    </div>
                </div>
              </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('konten')


@section('grafik')

var ctx = document.getElementById("team-chart");
if (ctx) {
  ctx.height = 150;
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["2020", "2021", "2022", "2023", "2024", "2025", "2026", "2027", "2028", "2029"],
      type: 'line',
      defaultFontFamily: 'Poppins',
      datasets: [{
        data: [{{ $tahun }}],
        label: "Expense",
        backgroundColor: 'rgba(0,103,255,.15)',
        borderColor: 'rgba(0,103,255,0.5)',
        borderWidth: 3.5,
        pointStyle: 'circle',
        pointRadius: 5,
        pointBorderColor: 'transparent',
        pointBackgroundColor: 'rgba(0,103,255,0.5)',
      },]
    },
    options: {
      responsive: true,
      tooltips: {
        mode: 'index',
        titleFontSize: 12,
        titleFontColor: '#000',
        bodyFontColor: '#000',
        backgroundColor: '#fff',
        titleFontFamily: 'Poppins',
        bodyFontFamily: 'Poppins',
        cornerRadius: 3,
        intersect: false,
      },
      legend: {
        display: false,
        position: 'top',
        labels: {
          usePointStyle: true,
          fontFamily: 'Poppins',
        },


      },
      scales: {
        xAxes: [{
          display: true,
          gridLines: {
            display: false,
            drawBorder: false
          },
          scaleLabel: {
            display: false,
            labelString: 'Month'
          },
          ticks: {
            fontFamily: "Poppins"
          }
        }],
        yAxes: [{
          display: true,
          gridLines: {
            display: false,
            drawBorder: false
          },
          scaleLabel: {
            display: true,
            labelString: 'Total',
            fontFamily: "Poppins"
          },
          ticks: {
            fontFamily: "Poppins"
          }
        }]
      },
      title: {
        display: false,
      }
    }
  });
}
@endsection('grafik')
