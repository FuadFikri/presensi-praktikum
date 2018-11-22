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
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($praktikans as $praktikan)
                          <tr>
                            <th> {{ $praktikan->nama}} </th>
                            <td> {{ $praktikan->nim}} </td>
                            
                                <td>
                                  @if ($presensi)
                                      @if($presensi->user_id === $praktikan->id)
                                      <a id="a-presensi" onclick="">
                                        <button type="submit" id="presensi" class="btn btn-sm btn-info"> <i class="fa fa-check"></i> <strong> Checked</strong></button>
                                      </a>
                                      @endif
                                  
                                  @else
                                      <a id="a-presensi" onclick="presensi({{ $praktikan->id}},{{ $jadwal->id}})">
                                    <button type="submit" id="presensi" class="btn btn-sm btn-dark">Check</button>
                                  </a>
                                  @endif
                                </td>
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
        
        <script type="text/javascript">
          function presensi(praktikan,jadwal){
             $.ajax({
                        url : "{{ url('asprak/check-presensi') }}",
                        type : "get",
                        data : {'praktikan' : praktikan, 'jadwal' : jadwal},
                        success : function(data) {
                            
                            $('#presensi').attr('class','btn btn-sm btn-info').html('checked');
                            $('#a-presensi').attr('onclick','');
                        },
                        error : function () {
                           alert('ada error bung');
                        }
                     });
          }
            
        </script>
@endsection
