@extends('back/main')

@section('konten')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <!-- DATA TABLE -->
                  <h3 class="title-5 m-b-35">Update Pesanan</h3>
                </div>
          </div>
          <div class="row">
            <center>
            <div class="col-md-4 col-lg-8">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('backend/dashboard/images/bg-title-01.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Update</h4>
                        <form action="{{ url('/pesan') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                          @method('patch')
                          @csrf
                          @foreach( $update as $up )
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Nama Lengkap</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="disabled-input" name="nama" placeholder="Nama Lengkap" class="form-control" value="{{ $up->nama_cus }}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">No Hp</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="disabled-input" name="hp" placeholder="No Telephone" class="form-control" value="{{ $up->no_hp }}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Lokasi</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="disabled-input" name="lokasi" placeholder="Lokasi" class="form-control" value="{{ $up->lokasi }}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Tanggal</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="disabled-input" name="tanggal" placeholder="Tanggal" class="form-control" value="{{ $up->tanggal }}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="email-input" class=" form-control-label">Paket</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="disabled-input" name="paket" placeholder="Paket" class="form-control" value="{{ $up->nama_paket }}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="password-input" class=" form-control-label">Harga</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="disabled-input" name="harga" placeholder="Harga" class="form-control" value="{{ $up->harga_paket }}">
                                </div>
                            </div>
                            <input type="hidden" name="id" value="{{ $up->id_pesan }}">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Tim</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="tim" id="select" class="form-control">
                                        <option value="None">Pilih Tim</option>
                                        <option value="Hikari">Hikari</option>
                                        <option value="Iro">Iro</option>
                                        <option value="Uta">Uta</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Status</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="status" id="select" class="form-control">
                                        <option value="Pending">Pending</option>
                                        <option value="Success">Success</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-12 col-md-9">
                                  <button type="submit" class="btn btn-success btn-sm">
                                    <i class="fa fa-check"></i> Submit
                                  </button>
                                  <a  href="{{ url('/table') }}" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                  </a >
                                </div>
                            </div>
                            @endforeach
                            @foreach( $update2 as $up2 )
                            <input type="hidden" name="id_cus" value="{{ $up2->id_cus }}">
                            <input type="hidden" name="id_paket" value="{{ $up2->id_paket }}">
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
          </center>
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
