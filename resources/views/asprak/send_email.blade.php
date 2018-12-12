@extends('asprak.dashboard')
@section('konten')
<div class="right_col" role="main">
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            @if(\Session::has('alert-failed'))
                <div class="alert alert-failed">
                    <div>{{Session::get('alert-failed')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
            <form action="{{ url('/asprak/sendEmail') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="pid" value="{{$praktikum->id}}"/>
                <input type="hidden" name="jid" value="{{$jadwal->id}}"/>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Dosen:</label>
                <input type="text" class="form-control" id="name" name="nama" readonly value="{{ $praktikum->dosen->nama }}"/>
                </div>
                <div class="form-group">
                    <label for="judul">Subject:</label>
                    <input type="text" class="form-control" id="judul" readonly value="Praktikum {{$praktikum->matkul->nama}}" name="judul" />
                </div>
                <div class="form-group">
                    <label for="pesan">Pesan:</label>
                    <textarea class="form-control" id="pesan" name="pesan" >
                    </textarea>
                </div>
                
                    {{-- <label for="document">Document:</label>
                    <input type="file" class="" name="document"> --}}
                
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Send Email</button>
                </div>
            </form>
            {{-- {{Request::get()}} --}}
    
            
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
</div>
@endsection