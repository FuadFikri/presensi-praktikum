@extends('admin/dashboard')
@section('konten')
<script src="js/sweetalert.min.js"></script>
    <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
                <div class="row">
    <a onclick="addMatkul()">
        <button class="btn btn-primary" type="button" style="float:right; margin-right:20px;"><i class="fa fa-plus"></i>  Tambah Mata Kuliah </button>
    </a>
</div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar Mata Kuliah</h2>

                    <div class="clearfix"></div>
                </div>
                  <div class="x_content">
                        <table class="table table-hover ">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama</th>
                          <th>Kode VMK</th>
                          <th>sks</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                           $i=1;    
                        @endphp
                        @foreach ($matkuls as $matkul)
                          <tr>
                          <td>{{$i++}}</td>
                            <td>{{$matkul->id}}</td>
                            <td>{{$matkul->nama}}</td>
                            <td>{{$matkul->kode_vmk}}</td>
                            <td>{{$matkul->sks}}</td>
                            <td>
                                 <a href="{{url('admin/matkul/'.$matkul->id)}}" class="btn btn-warning">
                                    Detail
                                 </a>
                                  <a href="{{url('admin/matkul/'.$matkul->id.'/edit')}}" class="btn btn-info">
                                   Sunting
                                  </a>
                                  <a href="{{url('admin/matkul/'.$matkul->id.'/delete')}}" class="btn btn-danger">
                                   Hapus
                                  </a>  
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
        @include('admin/modal/add_matkul')
        <script type="text/javascript">
            function addMatkul(){
                $('#modal-form').modal('show');
            }
        </script>
@endsection
