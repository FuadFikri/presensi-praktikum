@extends('asprak/dashboard')
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
                          <th>Masuk</th>
                          <th>Tidak</th>
                          <th>Izin</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($praktikans as $praktikan)
                          <tr>
                            <th> {{ $praktikan->nama}} </th>
                            <td> {{ $praktikan->nim}} </td>
                            
                              <form action="" method="post" >
                              <td><input type="radio" name="masuk" id="masuk" style="margin-right:29px;"></td>
                              <td> <input type="radio" name="masuk" id="masuk" style="margin-right:29px;"> </td>
                              <td><input type="radio" name="masuk" id="masuk" style="margin-right:29px;"></td>
                                 </form> 
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>

                    <input type="submit" value="simpan" class="btn btn-success pull-right">
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- @include('asprak/modal/add_pertemuan')
        <script type="text/javascript">
            function addPertemuan(){
                $('#modal-form').modal('show');
            }
        </script> --}}
@endsection
