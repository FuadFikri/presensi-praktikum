@extends('praktikan/dashboard')
@section('konten')
    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>
                <div class="row">
    <a onclick="addPertemuan()">
        <button class="btn btn-primary" type="button" style="float:right; margin-right:20px;"><i class="fa fa-check"></i>  Presensi</button>
    </a>
</div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                <div class="x_title">
                <h2>{{ $praktikum->matkul->nama }} <b>{{$praktikum->kelas}}</b> </h2>
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
                            </tr>
                        </thead>
                        <tbody> @php
                                    $i =1;
                                @endphp
                                @foreach ($jadwals as $jadwal)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>  {{date('j-n-Y', strtotime($jadwal->tanggal))}}  </td>
                                        <td> {{date('g : i', strtotime($jadwal->mulai))}} </td>
                                        <td> {{date('g : i', strtotime($jadwal->selesai))}} </td>
                                        <td> {{$jadwal->materi}} </td>
                                        <td>
                                            @php
                                                $p = $jadwal->presensis->where('user_id',4)->first(); //TODO ganti user yg aktif
                                            @endphp
                                            
                                            @empty($p->feedback)
                                                @if ($p->status == 0)
                                                    <i class="fa fa-close"></i>    
                                                @else
                                                {{-- TODO : ganti user yg sedang aktif --}}
                                                    <a onclick="create_feedback({{$jadwal->id}})">  
                                                        <button type="submit" id=""  class="btn btn-sm btn-danger"><i class="fa fa-close"></i></button>    
                                                    </a>
                                                @endif    
                                                @endempty
                                            @isset($p->feedback)
                                                <button type="submit" id="presensi"  disabled class="btn btn-sm btn-info">  <strong><i class="fa fa-check"></i> </strong></button>
                                            @endisset
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
    @include('praktikan/modal/feedback')
    <script type="text/javascript">
        function create_feedback(jadwal_id){
            $('#modal-feedback').modal('show');
            $('#jadwal_id').attr('value',jadwal_id);
        }
    </script>
@endsection
