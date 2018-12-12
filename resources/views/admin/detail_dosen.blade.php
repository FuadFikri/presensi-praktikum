@extends('admin/dashboard')
@section('konten')

    <div class="right_col" role="main">
      
          <div class="">

            <div class="clearfix"></div>
                <div class="row">
                <a href="{{route('index')}}">
        <button class="btn btn-primary" type="button" style="float:left; margin-left:20px;"><i class="fa fa-back"></i> Kembali</button>
    </a>
</div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="clearfix"></div>
                </div>
                  <div class="x_content">
                    <table class="table table-hover ">
                      <tr>
                          <td>NIP</td>
                          <td>{{$dosen->nip}}</td>
                      </tr>
                      <tr>
                          <td>Nama</td>
                          <td>{{$dosen->nama}}</td>
                      </tr>
                      <tr>
                          <td>Telp</td>
                          <td>{{$dosen->telp}}</td>
                      </tr>
                      <tr>
                          <td>Mengajar mata kuliah</td>
                          <td>
                            @php
                                $matkuls = App\Matkul::get();
                            @endphp
                            @foreach ($matkuls as $m)
                                <li>
                                    {{ $m->nama}}  {{$m->kode_vmk}}
                                </li>
                            @endforeach
                          </td>
                      </tr>
                    </table>
                    
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
@endsection
