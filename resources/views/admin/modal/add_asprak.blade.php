<div class="modal" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <form id="form-contact" method="post" class="form-horizontal" data-toggle="validator" action="{{route('asprak.store')}}">
                {{ csrf_field() }} {{ method_field('POST') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>
                </div>


                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama" class="col-md-3 control-label">Nama</label>
                         <div class="col-md-6">
                            <input type="text" name="nama" id="nama" class="form-control" required>
                         </div>
                    </div>

                    <div class="form-group">
                        <label for="nim" class="col-md-3 control-label">NIM</label>
                         <div class="col-md-6">
                             <input type="text" name="nim" id="nim" class="form-control" required>
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                         <div class="col-md-6">
                             <input type="email" name="email" id="email" class="form-control" required>
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>
                         <div class="col-md-6">
                             <input type="text" name="password" id="password" class="form-control" required>
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
