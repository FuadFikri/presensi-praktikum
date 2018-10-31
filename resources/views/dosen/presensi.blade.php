@extends('dosen/dashboard')
@section('konten')
    <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
                <div class="row">
    </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar Mahasiswa</h2>

                    <div class="clearfix"></div>
                </div>
                  <div class="x_content">
                        <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>NIM</th>
                          <th>Masuk | Izin/Sakit | Alpha</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>Bambang sutopo widarto cahyono</th>
                          <td>14/401/203/3j</td>
                          <td >
                            <form action="" method="post" >
                                <input type="radio" name="masuk" id="masuk" style="margin-right:29px;">      
                                <input type="radio" name="masuk" id="masuk" style="margin-right:29px;"> 
                                <input type="radio" name="masuk" id="masuk" style="margin-right:29px;"> 
                                                         
                          </td>
                        </tr>
                      </tbody>
                    </table>

                    <input type="submit" value="simpan" class="btn btn-success pull-right">
                    </form> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @include('dosen/modal/add_pertemuan')
        <script type="text/javascript">
            function addPertemuan(){
                $('#modal-form').modal('show');
            }
        </script>
@endsection
