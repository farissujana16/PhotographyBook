@extends('back/main')

@section('konten')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <!-- DATA TABLE -->
                  <h3 class="title-5 m-b-35">Data Pesanan</h3>
                  <div class="row m-t-30">
                    <div class="col-md-12">
                      @if (session('status'))
                      <div class="alert alert-success">
                        {{ session('status') }}
                      </div>
                      @endif
                      <!-- DATA TABLE-->
                      <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                          <thead>
                            <tr>
                              <th>Nama</th>
                              <th>No Hp</th>
                              <th>Lokasi</th>
                              <th>Tanggal</th>
                              <th>Paket</th>
                              <th>Harga</th>
                              <th>Tim</th>
                              <th>Status</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach( $data as $pesan )
                            <tr>
                              <td>{{ $pesan->nama_cus }}</td>
                              <td>{{ $pesan->no_hp }}</td>
                              <td>{{ $pesan->lokasi }}</td>
                              <td>{{ $pesan->tanggal }}</td>
                              <td>{{ $pesan->nama_paket }}</td>
                              <td>{{ $pesan->harga_paket }}</td>
                              <td class="{{ $pesan->tim }}">{{ $pesan->tim }}</td>
                              <td class="{{ $pesan->status }}">{{ $pesan->status }}</td>
                              <td>
                                <div class="table-data-feature">
                                    <a href="{{ url("/pesan/$pesan->id_pesan") }}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                    <form class="" action="{{ url('/pesan') }}" method="post">
                                      @method('delete')
                                      @csrf
                                      <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                      </button>
                                      <input type="hidden" name="id" value="{{ $pesan->id_pesan }}">
                                    </form>
                                </div>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>

                      <!-- END DATA TABLE-->
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
