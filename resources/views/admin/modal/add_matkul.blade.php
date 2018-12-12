<div class="modal" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <form id="form-contact" method="post" class="form-horizontal" data-toggle="validator" action="{{route('store.matkul')}}">
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
                            <input type="text" value="{{old('nama')}}" name="nama" id="nama" class="form-control {{$errors->first('name') ? "is-invalid" : ""}}" required>
                            <div class="invalid-feedback">
                                {{ ($errors->has('nama')) ? $errors->first('nama') : " "  }}
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="kode_vmk" class="col-md-3 control-label">Kode VMK </label>
                         <div class="col-md-6">
                             <input type="text" name="kode_vmk" id="kode_vmk" class="form-control" required>
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="sks" class="col-md-3 control-label">SKS</label>
                         <div class="col-md-6">
                             <input type="text" name="sks" id="sks" class="form-control" required>
                         </div>
                    </div>
                    
                </div>

                <div class="modal-footer">
                    <input type="submit" id="submit" class="btn btn-primary btn-save" value="simpan">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
