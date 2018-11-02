@extends('admin/dashboard')
@section('konten')

    <div class="right_col" role="main">
      
          <div class="">

            <div class="clearfix"></div>
                <div class="row">
                <a href="{{route('asprak.index')}}">
        <button class="btn btn-primary" type="button" style="float:left; margin-left:20px;"><i class="fa fa-plus"></i> Kembali</button>
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
                         <td>NIM</td>
                         <td>{{$asprak->nim}}</td>
                     </tr>
                     <tr>
                        <td>Nama</td>
                        <td>{{$asprak->nama}}</td>
                     </tr>
                     <tr>
                         <td>Email</td>
                        <td>{{$asprak->email}}</td>
                     </tr>
                     <tr>
                         <td>Asisten dari</td>
                         <td></td>
                     </tr>
                    </table>
                    <form action="{{url('admin/asprak/'.$asprak->id)}}" style="float:right; margin-right:20px;">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="submit" value="Hapus" class="btn btn-danger">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
@endsection
