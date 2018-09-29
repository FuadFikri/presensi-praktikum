@extends('dosen/dashboard')
@section('konten')
    <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
                <div class="row">
    <a onclick="addPraktikum()">
        <button class="btn btn-primary" type="button" style="float:right; margin-right:20px;"><i class="fa fa-plus"></i>  Pertemuan</button>
    </a>
</div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Praktikum Algoritma</h2>

                    <div class="clearfix"></div>
                </div>
                  <div class="x_content">
                        <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Tanggal</th>
                          <th>Waktu mulai</th>
                          <th>Waktu selesai</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>27 September 2018</td>
                          <td>14.00</td>
                          <td>15.40</td>
                          <td><div class="x_content">
                            <button type="button" class="btn btn-info">Info</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
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
        <script type="text/javascript">
            function edit_profil(){
                $('#modal-form').modal('show');
            }
        </script>
@endsection
