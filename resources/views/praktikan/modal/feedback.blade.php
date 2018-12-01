<div class="modal" id="modal-feedback" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
            <form action="{{ url('praktikan/store_feedback') }}" method="post" class="form-horizontal" data-toggle="validator">
                    {{ csrf_field() }} {{ method_field('POST') }}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"> &times; </span>
                        </button>
                        <h3 class="modal-title"></h3>
                    </div>
    
    
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" id="jadwal_id" name="jadwal_id" value="">
                            <input type="hidden" name="user_id" value="4"> 
                            {{-- TODO : user yg aktif --}}
                            <textarea class="form-control" name="feedback" id="feedback" cols="10" rows="10" placeholder="Bagaimana Praktikum Hari Ini"></textarea>
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
    