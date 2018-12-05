@extends('admin/dashboard')
@section('konten')
  <div class="right_col" role="main">
<div class="row">
    {{-- <a onclick="addPraktikum()">
        <button class="btn btn-primary" type="button" style="float:right;"><i class="fa fa-plus"></i>  Tambah Praktikum</button>
    </a> --}}
</div>
<div class="row">
@foreach ($praktikums as $item)
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-book"></i>
            </div>
        <div class="count"># {{ count($item->jadwals) }}</div>
        <h4>{{ $item->matkul->nama }} <b>{{ $item->kelas }}</b> </h4>
                <p>{{ $item->dosen->nama }}</p>
                <p>Asisten : {{ App\User::where('id',$item->created_by)->first()->nama }}</p>
            </div>
        </div>
@endforeach


</div>
  </div>
  {{-- @include('asprak/modal/add_praktikum') --}}
<style>
h4{
    margin: 8px;
}
</style>
<script type="text/javascript">
    function addPraktikum() {
        $('#modal-form').modal('show');

    }
</script>
@endsection
