<div class="modal" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <form action="{{ url('/asprak/praktikum/jadwal') }}" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>
                </div>


                <div class="modal-body">
                <input type="hidden" name="praktikum_id" value="{{$praktikum->id}}">
                    <div class="form-group">
                        <label for="praktikum" class="col-md-3 control-label">Tanggal</label>
                        <div class="col-md-6">
                            <input type="date" class="form-control" name="tanggal" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="praktikum" class="col-md-3 control-label">Mulai</label>
                        <div class="col-md-6">
                            <input type="time" class="form-control" name="mulai" required>
                            <small>contoh : 08.00 AM</small>
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="asprak" class="col-md-3 control-label">Selesai</label>
                        <div class="col-md-6">
                            <input type="time" class="form-control" name="selesai" required>
                            <small>contoh : 02.00 PM</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="asprak" class="col-md-3 control-label">Materi</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="materi" required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-save">Tambah</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                </div>

            </form>
        </div>
    </div>
</div>
