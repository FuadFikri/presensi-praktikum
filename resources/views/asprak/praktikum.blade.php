@extends('asprak/dashboard')
@section('konten')
    <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
                <div class="row">
    <a onclick="addPertemuan()">
        <button class="btn btn-primary" type="button" style="float:right; margin-right:20px;"><i class="fa fa-plus"></i>  Pertemuan</button>
    </a>
</div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>{{ $praktikum->matkul->nama }} <b>{{$praktikum->kelas}}</b> </h2>
                    <div class="clearfix"></div>
                    <button onclick="kode()" id="kode" class="btn btn-sm btn-primary"> kode masuk</button>  <p id="kode_masuk" style="display:none">{{$praktikum->kode_masuk }}</p>  
                </div>
                  <div class="x_content">
                        <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Tanggal</th>
                          <th>Waktu mulai</th>
                          <th>Waktu selesai</th>
                          <th>Materi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                            $i = 1;
                        @endphp
                          @foreach ($jadwals as $item)
                          <tr>
                              <td>{{$i++}}</td>
                              <td>  {{date('j-n-Y', strtotime($item->tanggal))}}  </td>
                              <td> {{date('g : i', strtotime($item->mulai))}} </td>
                              <td> {{date('g : i', strtotime($item->selesai))}} </td>
                              <td> {{$item->materi}} </td>
                              <td>
                                  <a href="{{url('asprak/'. $item->id .'/presensi')}}">
                                    <button type="button" class="btn btn-success  btn-sm" >Presensi</button>
                                  </a>
                                  <a href="{{url('asprak/get_feedback/'.$praktikum->id.'/'.$item->id)}}">
                                    <button type="button" class="btn btn-info  btn-sm">Feedback</button>
                                  </a>
                                  <a href="{{url('asprak/praktikum/jadwal/'.$item->id.'/edit')}}">
                                    <button type="button" class="btn btn-warning  btn-sm">Edit</button>
                                  </a>
                          
                                <form action="{{ url('asprak/praktikum/jadwal/'.$item->id) }}" method="POST" class="" style="display:inline-table;"  onsubmit="return confirm('Hapus data ini?')" >
                                      @csrf
                                      <input type="hidden" value="DELETE" name="_method">
                                      <input type="hidden" value="{{$praktikum->id}}" name="praktikum_id">
                                      <button type="submit" class="btn btn-danger  btn-sm">Hapus</button>
                                  </form>

                          </td>
                          </tr>
                          @endforeach
                          
                        
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @include('asprak/modal/add_jadwal')
        <script type="text/javascript">
            function addPertemuan(){
                $('#modal-form').modal('show');
            }

            function kode(){
                $('#kode_masuk').css('display','inline');
                $("#kode").click(function(){
                    $("p").toggle();
                });
            }
        </script>
        
@endsection
