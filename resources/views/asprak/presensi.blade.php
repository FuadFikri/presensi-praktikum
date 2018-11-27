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
                                      @if(count($presensi) == 0)
                                            <a id="a-presensi{{ $praktikan->id}}" onclick="presensi{{ $praktikan->id}}({{ $praktikan->id}},{{ $jadwal->id}})">
                                              <button type="submit" id="presensi{{ $praktikan->id}}" class="btn btn-sm btn-danger"><i class="fa fa-close"></i></button>
                                            </a>   
                                      @else
                                            @foreach ($presensi as $p)
                                              @if($praktikan->id == $p->user_id)
                                                  @if ($p->status == 0)
                                                      <a id="a-presensi{{ $praktikan->id}}" onclick="presensi{{ $praktikan->id}}({{ $praktikan->id}},{{ $jadwal->id}})">
                                                        <button type="submit" id="presensi{{ $praktikan->id}}" class="btn btn-sm btn-danger"><i class="fa fa-close"></i></button>
                                                      </a>
                                                  @elseif ($p->status == 1)
                                                      <a id="a-presensi" onclick="">
                                                        <button type="submit" id="presensi" class="btn btn-sm btn-info">  <strong><i class="fa fa-check"></i> </strong></button>
                                                      </a>
                                                @endif
                                              @endif
                                            @endforeach
                                      @endif
                                </td>
                          </tr>
                        
                        <script type="text/javascript">
                          function presensi{{ $praktikan->id}}(praktikan,jadwal){
                            $.ajax({
                              url : "{{ url('asprak/check-presensi') }}",
                              type : "get",
                              data : {'praktikan' : praktikan, 'jadwal' : jadwal},
                              success : function(data) {
                                  
                                  $('#presensi{{ $praktikan->id}}').attr('class','btn btn-sm btn-info').html('<strong><i class="fa fa-check"></i> </strong>');
                                  $('#a-presensi{{ $praktikan->id}}').attr('onclick','#');
                                  console.log(praktikan,jadwal);
                              },
                              error : function () {
                                alert('ada error bung');
                              }
                        });
                          }
                            
                        </script>
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
        
        
@endsection
