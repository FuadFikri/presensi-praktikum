<div class="modal" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="form-contact" action="{{route('asprak.editprofile',[Auth()->user()->id])}}" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('PUT') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>
                </div>


                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label for="name" class="col-md-3 control-label">Nama</label>
                        <div class="col-md-6">
                            <input type="text" id="name" name="name" class="form-control" autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nip" class="col-md-3 control-label">NIM</label>
                        <div class="col-md-6">
                            <input type="text" id="name" name="nim" class="form-control" autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label for="tgl" class="col-md-3 control-label">Tanggal Lahir</label>
                        <div class="col-md-6">
                            <input type="date" id="tgl" name="tgl" class="form-control" autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label for="nip" class="col-md-3 control-label">HP</label>
                        <div class="col-md-6">
                            <input type="text" id="hp" name="hp"  class="form-control" autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-save">Simpan</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                </div>

            </form>
        </div>
    </div>
</div>
