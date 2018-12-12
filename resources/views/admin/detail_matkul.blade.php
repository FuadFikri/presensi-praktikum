@extends('admin/dashboard')
@section('konten')

    <div class="right_col" role="main">
      
          <div class="">

            <div class="clearfix"></div>
                <div class="row">
                <a href="{{route('index.matkul')}}">
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
                          <td>Nama</td>
                          <td>{{$matkul->nama}}</td>
                      </tr>
                      <tr>
                          <td>Kode VMK</td>
                          <td>{{$matkul->kode_vmk}}</td>
                      </tr>
                      <tr>
                          <td>sks</td>
                          <td>{{$matkul->sks}}</td>
                      </tr>
                      
                    </table>
                    
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
@endsection
