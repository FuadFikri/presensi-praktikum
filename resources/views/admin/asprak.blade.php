@extends('admin/dashboard')
@section('konten')
<script src="js/sweetalert.min.js"></script>
    <div class="right_col" role="main">
      
          <div class="">

            <div class="clearfix"></div>
                <div class="row">
    <a onclick="addPertemuan()">
        <button class="btn btn-primary" type="button" style="float:right; margin-right:20px;"><i class="fa fa-plus"></i>  Tambah Akun</button>
    </a>
</div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar Asisten</h2>

                    <div class="clearfix"></div>
                </div>
                  <div class="x_content">
                        <table class="table table-hover ">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nim</th>
                          <th>Nama</th>
                          <th></th>
                          
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                        @php
                           $i=1;    
                        @endphp
                        @foreach ($aspraks as $asprak)
                          <tr>
                          <td>{{$i++}}</td>
                            <td>{{$asprak->nim}}</td>
                            <td>{{$asprak->nama}}td>
                            <td>
                                 <a href="{{url('admin/asprak/'.$asprak->id)}}" class="btn btn-warning">
                                    Detail
                                 </a>
                                  <a href="{{url('admin/asprak/'.$asprak->id.'/edit')}}" class="btn btn-info">
                                   Sunting
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
        @include('admin/modal/add_asprak')
        <script type="text/javascript">
            function addPertemuan(){
                $('#modal-form').modal('show');
            }
        </script>
@endsection
