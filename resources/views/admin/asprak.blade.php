@extends('admin/dashboard')
@section('konten')
    <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
                <div class="row">
    <a onclick="addPertemuan()">
        <button class="btn btn-primary" type="button" style="float:right; margin-right:20px;"><i class="fa fa-plus"></i>  Tambah Akun</button>
    </a>
</div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar Asisten</h2>

                    <div class="clearfix"></div>
                </div>
                  <div class="x_content">
                        <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nim</th>
                          <th>Nama</th>
                          
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>12789172812h1</td>
                          <td>Parjio dsfdddddddddddsdfsdfs</td>
                          <td><div class="x_content">
                          <a href="{{url('dosen/presensi')}}">
                            <button type="button" class="btn btn-success" >Detail</button>
                          </a>
                          <a href="{{url('dosen/feedback')}}">
                            <button type="button" class="btn btn-info">Sunting</button>
                          </a>
                          <a href="{{url('dosen/hapus')}}">
                            <button type="button" class="btn btn-danger">Hapus</button>
                          </a>  
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @include('admin/modal/add_asprak')
        <script type="text/javascript">
            function addPertemuan(){
                $('#modal-form').modal('show');
            }
        </script>
@endsection
