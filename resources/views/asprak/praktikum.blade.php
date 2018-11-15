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
                  <h2>{{ $praktikum->nama }} <b>{{$praktikum->kelas}}</b> </h2>

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
                          <th>Materi</th>
                          {{-- <th></th> --}}
                        </tr>
                      </thead>
                      <tbody>
                       
                          @foreach ($jadwals as $item)
                           <tr>
                              <td></td>
                              <td>  {{ $item->tanggal}} </td>
                              <td> {{$item->mulai}} </td>
                              <td> {{$item->selesai}} </td>
                              <td> {{$item->materi}} </td>
                              <td>
                                 
                                  <a href="{{url('asprak/'. $item->id .'/presensi')}}">
                                    <button type="button" class="btn btn-success  btn-sm" >Presensi</button>
                                  </a>
                                  <a href="{{url('asprak/feedback')}}">
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
        </script>
@endsection
