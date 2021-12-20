@extends('back/main')

@section('konten')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Dashboard Overview</h2>
                    </div>
                </div>
            </div>
            <div class="row m-t-25">
              <div class="col-lg-9">
                <div class="table-responsive table--no-card m-b-40">
                  <table class="table table-borderless table-data3 table-earning">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Paket</th>
                        <th>Harga</th>
                        <th>Tim</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach( $tampil as $data )
                      <tr>
                        <td>{{ $data->nama_cus }}</td>
                        <td>{{ $data->tanggal }}</td>
                        <td>{{ $data->nama_paket }}</td>
                        <td>{{ $data->harga_paket }}</td>
                        <td class="{{ $data->tim }}">{{ $data->tim }}</td>
                        <td class="berhasil">{{ $data->status }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                  <div class="overview-item overview-item--c1">
                      <div class="overview__inner">
                          <div class="overview-box clearfix">
                              <div class="icon">
                                  <i class="zmdi zmdi-account-o"></i>
                              </div>
                              <div class="text">
                                  <h2>Banyak</h2>
                                  <span>Pesanan Bulanan</span>
                              </div>
                          </div>
                          <div class="overview-chart">
                              <canvas id="widgetChart1"></canvas>
                          </div>
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

var ctx = document.getElementById("widgetChart1");
if (ctx) {
  ctx.height = 130;
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Agustus',
              'September', 'October', 'November', 'Desember'],
      type: 'line',
      datasets: [{
        data: [{{ $jum }}],
        label: 'Customer',
        backgroundColor: 'rgba(255,255,255,.1)',
        borderColor: 'rgba(255,255,255,.55)',
      },]
    },
    options: {
      maintainAspectRatio: true,
      legend: {
        display: false
      },
      layout: {
        padding: {
          left: 0,
          right: 0,
          top: 0,
          bottom: 0
        }
      },
      responsive: true,
      scales: {
        xAxes: [{
          gridLines: {
            color: 'transparent',
            zeroLineColor: 'transparent'
          },
          ticks: {
            fontSize: 2,
            fontColor: 'transparent'
          }
        }],
        yAxes: [{
          display: false,
          ticks: {
            display: false,
          }
        }]
      },
      title: {
        display: false,
      },
      elements: {
        line: {
          borderWidth: 0
        },
        point: {
          radius: 0,
          hitRadius: 10,
          hoverRadius: 4
        }
      }
    }
  });
}


@endsection('grafik')
