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
                            <select class="form-control" id="sel1" name="nama">
                                    <option value="Algoritma Pemrograman">Algoritma Pemrograman</option>
                                    <option value="Pemrograman Berorientasi Objek">Pemrograman Berorientasi Objek</option>
                                    <option value="Desain Elementer">Desain Elementer </option>
                                    <option value="Pemrograman Web ">Pemrograman Web </option>
                                    <option value="Jaringan Komputer">Jaringan Komputer </option>
                                    <option value="Animasi 3D">Animasi 3D</option>
                            </select>
                         </div>
                    </div>

                    <div class="form-group">
                        <label for="asprak" class="col-md-3 control-label">Dosen</label>
                         <div class="col-md-6">
                            <select class="form-control" id="sel1" name="dosen">
                                @foreach ($dosen as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="asprak" class="col-md-3 control-label">Kelas</label>
                         <div class="col-md-6">
                            <select class="form-control" id="sel1" name="kelas">
                                <option>A1</option>
                                <option>A2</option>
                                <option>B1</option>
                                <option>B2</option>
                            </select>
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="asprak" class="col-md-3 control-label">SKS</label>
                         <div class="col-md-6">
                            <input type="number" name="sks" id="sks" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="asprak" class="col-md-3 control-label">Kode VMK</label>
                         <div class="col-md-6">
                            <input type="text" name="kode_vmk" id="kode_vmk" class="form-control" >
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
