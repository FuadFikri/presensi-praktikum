<div class="modal" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <form action="{{ route('create.praktikum') }}" method="post" class="form-horizontal" data-toggle="validator">
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
                            <select class="form-control" id="sel1" name="matkul">
                                    @foreach ($matkuls as $item)
                                        <option value="{{ $item->id }}"> {{ $item->nama }} </option>
                                    @endforeach
                            </select>
                         </div>
                    </div>

                    <div class="form-group">
                        <label for="asprak" class="col-md-3 control-label">Dosen</label>
                         <div class="col-md-6">
                            <select class="form-control" id="sel1" name="dosen">
                                @foreach ($dosens as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="asprak" class="col-md-3 control-label">Kelas</label>
                         <div class="col-md-6">
                            <select class="form-control" id="sel1" name="kelas">
                               <option value="A1">A1</option>
                               <option value="A1">A2</option>
                               <option value="A1">B1</option>
                               <option value="A1">B2</option>
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
