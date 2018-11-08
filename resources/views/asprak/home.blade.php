@extends('asprak/dashboard')
@section('konten')
  <div class="right_col" role="main">
<div class="row">
    <a onclick="addPraktikum()">
        <button class="btn btn-primary" type="button" style="float:right;"><i class="fa fa-plus"></i>  Tambah Praktikum</button>
    </a>
</div>
<div class="row">
<a href="{{ url('/asprak/praktikum/id') }}">
 <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
     <div class="tile-stats">
        <div class="icon"><i class="fa fa-book"></i>
     </div>
     <div class="count">#4</div>
        <h4>Praktikum Algortima</h4>
        <p>Muhammad Fakhrurrifqi</p>
     </div>
</div>
</a>

 <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
     <div class="tile-stats">
        <div class="icon"><i class="fa fa-book"></i>
     </div>
     <div class="count">#2</div>
        <h4>Praktikum Basis Data</h4>
        <p>Imam Fahrurrozi</p>
     </div>
     </div>

<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
     <div class="tile-stats">
        <div class="icon"><i class="fa fa-book"></i>
     </div>
     <div class="count">#4</div>
        <h4>Praktikum Animasi</h4>
        <p>YUsron FUadi</p>
     </div>
     </div>
     <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
     <div class="tile-stats">
        <div class="icon"><i class="fa fa-book"></i>
     </div>
     <div class="count">#4</div>
        <h4>Praktikum Animasi</h4>
        <p>YUsron FUadi</p>
     </div>
     </div>
     <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
     <div class="tile-stats">
        <div class="icon"><i class="fa fa-book"></i>
     </div>
     <div class="count">#4</div>
        <h4>Praktikum Animasi</h4>
        <p>YUsron FUadi</p>
     </div>
     </div>
</div>
  </div>
  @include('asprak/modal/add_praktikum')
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
