@extends('praktikan/dashboard')

@section('konten')
	<div class="right_col" role="main">
<div class="row">
    
    <a onclick="addPraktikum()">
        <button class="btn btn-primary" type="button" style="float:right;"><i class="fa fa-plus"></i>  Tambah Praktikum</button>
    </a>
    
</div>
<div class="row">
    @if(session('message'))
        <div class="alert alert-danger">
        <strong>{{session('message')}}</strong>
        </div>
    @endif
   
        @foreach ($praktikums as $praktikum)
            <a href="{{ url('/praktikan/jadwal/'.$praktikum->id) }}">
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-book"></i>
                </div>
                <div class="count"># {{ count($praktikum->jadwals) }}</div>
                    <h4>{{ $praktikum->matkul->nama }} <b>{{ $praktikum->kelas }}</b> </h4>
                <p>{{ $praktikum->dosen->nama }}</p>
                </div>
                </div>
            </a>
        @endforeach
        



</div>
  </div>
  @include('praktikan/modal/add_praktikum')
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
