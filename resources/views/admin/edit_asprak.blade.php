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
                      <form id="form-contact" method="post" class="form-horizontal" data-toggle="validator" action="{{url('admin/asprak/'.$asprak->id)}}">
                        
                    <div class="form-group">
                          
                        <label for="nama" class="col-md-3 control-label">Nama</label>
                         <div class="col-md-6">
                            <input type="text" name="nama" id="nama" class="form-control" required value="{{$asprak->nama}}">
                         </div>
                    </div>

                    <div class="form-group">
                        <label for="nim" class="col-md-3 control-label">NIM</label>
                         <div class="col-md-6">
                             <input type="text" name="nim" id="nim" class="form-control" required value="{{$asprak->nim}}">
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                         <div class="col-md-6">
                             <input type="email" name="email" id="email" class="form-control" required value="{{$asprak->email}}">
                         </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="put">
                        <input type="submit" value="Update" class="btn btn-danger">
                </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
@endsection
