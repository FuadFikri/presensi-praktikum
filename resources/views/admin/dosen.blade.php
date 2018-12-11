@extends('admin/dashboard')
@section('konten')
<script src="js/sweetalert.min.js"></script>
    <div class="right_col" role="main">
      
          <div class="">

            <div class="clearfix"></div>
                <div class="row">
    <a onclick="addDosen()">
        <button class="btn btn-primary" type="button" style="float:right; margin-right:20px;"><i class="fa fa-plus"></i>  Tambah Dosen</button>
    </a>
</div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar Dosen</h2>

                    <div class="clearfix"></div>
                </div>
                  <div class="x_content">
                        <table class="table table-hover ">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nip</th>
                          <th>Nama</th>
                          <th>No Telepon</th>
                          <th></th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($dosens as $dosen)
                          <tr>
                          <td>{{$dosen->id}}</td>
                            <td>{{$dosen->nip}}</td>
                            <td>{{$dosen->nama}}</td>
                            <td>{{$dosen->telp}}</td>
                            <td>
                                 <a href="{{url('admin/dosen/'.$dosen->id)}}" class="btn btn-warning">
                                    Detail
                                 </a>
                                  <a href="{{url('admin/dosen/'.$dosen->id.'/edit')}}" class="btn btn-info">
                                   Sunting
                                  </a>
                                  <a href="{{url('admin/dosen/'.$dosen->id.'/delete')}}" class="btn btn-danger">
                                   Hapus
                                  </a>
                                
                          </td>
                        </tr>
                        @endforeach
                       
                      </tbody>
                    </table>
                      {{ $dosens->render() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @include('admin/modal/add_dosen')
        <script type="text/javascript">
            function addDosen(){
                $('#modal-form').modal('show');
            }
        </script>
@endsection
