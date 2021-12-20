@extends('back/main')

@section('jadwal')
<style type="text/css">
/* force class color to override the bootstrap base rule
   NOTE: adding 'url: #' to calendar makes this unneeded
 */
.fc-event, .fc-event:hover {
      color: #fff !important;
      text-decoration: none;
}
</style>

@endsection('jadwal')

@section('konten')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <div class="au-card m-b-30">
                      <div class="au-card-inner">
                          <h3 class="title-2 m-b-40">Tambah Pegawai</h3>
                      </div>
                      <form action="{{ url('/pegawai') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                          <div class="row form-group">
                              <div class="col col-md-3">
                                  <label for="text-input" class=" form-control-label">Nama Lengkap</label>
                              </div>
                              <div class="col-12 col-md-9">
                                  <input type="text" id="text-input" name="nama" placeholder="Nama Lengkap" class="form-control">
                              </div>
                          </div>
                          <div class="row form-group">
                              <div class="col col-md-3">
                                  <label for="text-input" class=" form-control-label">Tanggal Lahir</label>
                              </div>
                              <div class="col-12 col-md-9">
                                  <input type="text" id="text-input" name="tanggal" placeholder="Tanggal Lahir" class="form-control">
                              </div>
                          </div>
                          <div class="row form-group">
                              <div class="col col-md-3">
                                  <label for="email-input" class=" form-control-label">Email</label>
                              </div>
                              <div class="col-12 col-md-9">
                                  <input type="email" id="email-input" name="email" placeholder="Enter Email" class="form-control">
                              </div>
                          </div>
                          <div class="row form-group">
                              <div class="col col-md-3">
                                  <label for="password-input" class=" form-control-label">Password</label>
                              </div>
                              <div class="col-12 col-md-9">
                                  <input type="password" id="password-input" name="password" placeholder="Password" class="form-control">
                              </div>
                          </div>
                          <div class="row form-group">
                              <div class="col col-md-3">
                                  <label for="select" class=" form-control-label">Tim</label>
                              </div>
                              <div class="col-12 col-md-9">
                                  <select name="tim" id="select" class="form-control">
                                      <option value="0">Pilih Tim</option>
                                      <option value="Hikari">Hikari</option>
                                      <option value="Iro">Iro</option>
                                      <option value="Uta">Uta</option>
                                  </select>
                              </div>
                          </div>
                          <div class="row form-group">
                              <div class="col col-md-3">
                                  <label for="text-input" class=" form-control-label">Alamat</label>
                              </div>
                              <div class="col-12 col-md-9">
                                  <input type="text" id="text-input" name="alamat" placeholder="Nama Lengkap" class="form-control">
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
                      </form>
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
