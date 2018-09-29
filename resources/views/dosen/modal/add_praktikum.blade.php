<div class="modal" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="form-contact" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>
                </div>


                <div class="modal-body">
                    <div class="form-group">
                        <label for="praktikum" class="col-md-3 control-label">Praktikum</label>
                         <div class="col-md-6">
                            <select class="form-control" id="sel1">
                                <option>Algoritma PEmrograman</option>
                                <option>JAringan Komputer</option>
                                <option>Komputasi Numerik</option>
                                <option>Animasi </option>
                            </select>
                         </div>
                    </div>

                    <div class="form-group">
                        <label for="dosen" class="col-md-3 control-label">Dosen</label>
                         <div class="col-md-6">
                            <select class="form-control" id="sel1">
                                <option>Umar Taufik</option>
                                <option>Imam FAhrurozi</option>
                                <option>Muhammad FAkhrurrifqi</option>
                                <option>Firma Syahrian</option>
                            </select>
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
