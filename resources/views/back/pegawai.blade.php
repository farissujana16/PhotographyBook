@extends('back/main')

@section('konten')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <!-- DATA TABLE -->
                  <h3 class="title-5 m-b-35">data table</h3>
                  <div class="table-data__tool">
                      <div class="table-data__tool-right">
                          <a href="{{ url("/pegawai/tambah") }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                              <i class="zmdi zmdi-plus"></i>add item</a>
                      </div>
                  </div>
                  @if (session('status'))
                  <div class="alert alert-success">
                    {{ session('status') }}
                  </div>
                  @endif
                  <div class="row m-t-30">
                    <div class="col-md-12">
                      <!-- DATA TABLE-->
                      <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                          <thead>
                            <tr>
                              <th>Nama</th>
                              <th>Tgl Lahir</th>
                              <th>E-Mail</th>
                              <th>Posisi</th>
                              <th>Alamat</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach( $isi as $data )
                            <tr>
                              <td>{{ $data->nama_peg }}</td>
                              <td>{{ $data->tgl_lahir }}</td>
                              <td>{{ $data->email }}</td>
                              <td class="{{ $data->tim }}">{{ $data->tim }}</td>
                              <td>{{ $data->alamat }}</td>
                              <td>
                                <div class="table-data-feature">
                                  <form class="" action="{{ url('/pegawai') }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                      <i class="zmdi zmdi-delete"></i>
                                    </button>
                                    <input type="hidden" name="id" value="{{ $data->id_peg }}">
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
