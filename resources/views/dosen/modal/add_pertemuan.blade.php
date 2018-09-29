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
                        <label for="praktikum" class="col-md-3 control-label">Mulai</label>
                         <div class="col-md-6">
                            <input type="time">
                         </div>
                    </div>

                    <div class="form-group">
                        <label for="dosen" class="col-md-3 control-label">Selesai</label>
                         <div class="col-md-6">
                             <input type="time">
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="dosen" class="col-md-3 control-label">Ruang</label>
                         <div class="col-md-6">
                            <select class="form-control" id="sel1">
                                <option>Lab 1</option>
                                <option>Lab 3</option>
                                <option>Lab 4</option>
                                <option>Lab 6</option>
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
