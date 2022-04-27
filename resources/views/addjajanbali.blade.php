@extends('layout.template')
@section('title')

@section('content')

<form action="/jajanbali/insert" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container" style="margin-top:20px">
		<center><font size="6">JAJAN BALI</font></center>
		<hr>
    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                
                <div class="form-group">                    
                    <label>NAMA JAJAN</label>
                    <input name="nama_jajanbali" class="form-control" value="{{ old('nama_jajanbali') }}">
                    <div class="text-danger">
                        @error('nama_jajanbali')
                        {{ $message }}
                        @enderror
                    </div>

                    <label>HARGA</label>
                    <input name="harga" class="form-control" value="{{ old('harga') }}">
                    <div class="text-danger">
                        @error('harga')
                        {{ $message }}
                        @enderror
                    </div>

                    <label>JUMLAH</label>
                    <input name="jumlah" class="form-control" value="{{ old('jumlah') }}">
                    <div class="text-danger">
                        @error('jumlah')
                        {{ $message }}
                        @enderror
                    </div>

                    <label>FOTO JAJANBALI</label>
                    <input type="file" name="foto_jajanbali" class="form-control" value="{{ old('foto_jajanbali') }}">
                    <div class="text-danger">
                        @error('foto_jajanbali')
                        {{ $message }}
                        @enderror
                    </div>

            <div class="form-group">
                <button class="btn btn-primary btn-sm">SIMPAN</button>
            </div>

        </div>
    </div>

</form>


@endsection