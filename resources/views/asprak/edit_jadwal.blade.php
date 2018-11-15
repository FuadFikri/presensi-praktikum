@extends('asprak/dashboard')
@section('konten')
<div class="right_col" role="main">

        <form action="{{ url('/asprak/praktikum/jadwal/'.$jadwal->id.'/update') }}" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('PUT') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>
                </div>


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
                         <input type="text" class="form-control" value="{{ $jadwal->mulai }}" name="mulai" required>
                            <small>contoh : 14.00</small>
                            
                         </div>
                    </div>

                    <div class="form-group">
                        <label for="asprak" class="col-md-3 control-label">Selesai</label>
                         <div class="col-md-6">
                         <input type="text" class="form-control"  value="{{ $jadwal->selesai }}" name="selesai" required>
                             <small>contoh : 14.00</small>
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
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                </div>

            </form>
</div>

@endsection