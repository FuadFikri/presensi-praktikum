@extends('asprak/dashboard')
@section('konten')
<div class="right_col" role="">
    
              <div class="col-md-12 col-sm-12 col-xs-12">
                
        <form action="{{ url('/asprak/praktikum/jadwal/'.$jadwal->id.'/update') }}" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('PUT') }}
              


                <div class="modal-body">
                <input type="hidden" name="praktikum_id" value="{{ $jadwal->praktikum_id }}">
                    <div class="form-group">
                        <label for="praktikum" class="col-md-3 control-label">Tanggal</label>
                         <div class="col-md-6">
                         <input type="date" class="form-control" name="tanggal"  value="{{ $jadwal->tanggal }}" required>
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="praktikum" class="col-md-3 control-label">Mulai</label>
                         <div class="col-md-6">
                         <input type="time" class="form-control" value="{{ $jadwal->mulai }}" name="mulai" required>
                            <small>contoh : 11.00 AM</small>
                            
                         </div>
                    </div>

                    <div class="form-group">
                        <label for="asprak" class="col-md-3 control-label">Selesai</label>
                         <div class="col-md-6">
                         <input type="time" class="form-control"  value="{{ $jadwal->selesai }}" name="selesai" required>
                             <small>contoh : 02.00 PM</small>
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="asprak" class="col-md-3 control-label">Materi</label>
                         <div class="col-md-6">
                         <input type="text" class="form-control"  value="{{ $jadwal->materi }}" name="materi" required>
                         </div>
                    </div>
                   
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-save">Simpan</button>
                <a href="{{url('asprak/praktikum/'.$jadwal->praktikum_id)}}">
                    <button type="button" class="btn btn-default" >Batal</button>
                </a>
                </div>

            </form>

                </div>
    
    
</div>


@endsection