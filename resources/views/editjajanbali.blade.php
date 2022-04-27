@extends('layout.template')
@section('title')

@section('content')

<form action="/jajanbali/update/{{ $jajanbali->id_jajanbali }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container" style="margin-top:20px">
		<center><font size="6">JAJAN BALI</font></center>
		<hr>
    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                
                <div class="form-group">                    
                    <label>NAMA JAJAN</label>
                    <input name="nama_jajanbali" class="form-control" value="{{ $jajanbali->nama_jajanbali }}">
                    <div class="text-danger">
                        @error('nama_jajanbali')
                        {{ $message }}
                        @enderror
                    </div>

                    <label>HARGA</label>
                    <input name="harga" class="form-control" value="{{ $jajanbali->harga }}">
                    <div class="text-danger">
                        @error('harga')
                        {{ $message }}
                        @enderror
                    </div>

                    <label>JUMLAH</label>
                    <input name="jumlah" class="form-control" value="{{ $jajanbali->jumlah }}">
                    <div class="text-danger">
                        @error('jumlah')
                        {{ $message }}
                        @enderror
                    </div>
                    <br>
                    <img src="{{ url ('foto_jajanbali/'.$jajanbali->foto_jajanbali) }}" width="150px">
                    <label>FOTO JAJANBALI</label>
                    <input type="file" name="foto_jajanbali" class="form-control" value="{{ $jajanbali->foto_jajanbali }}">
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