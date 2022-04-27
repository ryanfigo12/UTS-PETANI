@extends('layout.template')
@section('title', 'Tambah')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form enctype='multipart/form-data' action="{{(isset($petani))?route('petani.update', $petani->id_petani):route('petani.store')}}" method="POST">
        @csrf
        @if(isset($petani))@method('PUT')@endif
        <div class="box-body">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Nama Petani" required value="{{( isset($petani))?$petani->nama:old('nama')}}" 
                class="form-control">@error('nama') {{$message}} @enderror
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label for="kelompok">Kelompok Tani</label>
                    <select id="kelompok" name="id_kelompok_tani" class="form-control">
                        <option value="">Pilih Kelompok Tani</option>
                        @foreach ($kelompoks as $item)<option value="{{$item->id_kelompok_tani}}"{{((isset($petani)&&$petani->id_kelompok_tani==$item->id_kelompok_tani) || old('id_kelompok_tani')==$item->id_kelompok_tani)?'selected':''}}> {{$item->nama_kelompok}}</option> 
                        @endforeach
                    </select>
                    @error('id_kelompok_tani')
                    <span class="text-sm">{{$message}} @enderror</span>
                </div>
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="number" name="nik" id="nik" placeholder="NIK Anggota Tani" required value="{{(isset($petani))?$petani->nik:old('nik')}}"
                class="form-control">@error('nik') {{$message}} @enderror
            </div>
            <div class="form-group">
                <label for="alamat">ALAMAT</label>
                <textarea name="alamat" id="alamat" cols="30" rows="2"
                class="form-control">
                {{(isset($petani))?$petani->alamat:old('alamat')}}
            </textarea>
            </div>
            <div class="form-group">
                <label for="telp">TELEPON</label>
                <input type="text" name="telp" placeholder="Telepon" id="telp" value="{{(isset($petani))?$petani->telp:old('telp')}}"
                class="form-control">@error('telp') {{$message}} @enderror
            </div>
            <div class="form-group">
                <label for="foto">FOTO</label>
                <input type="file" name="foto" id="foto"
                class="form-control">
                @error('foto') {{$message}} @enderror
            <div class="form-group">
                <br>
                <label for="status">STATUS</label>
                <div>
                    <input type="radio" checked {{((isset($petani)&&$petani->status=='Y') || old('status')=='Y')?'checked':''}} name="status" value="Aktif" class="text-sm"> Aktif &nbsp;&nbsp; 
                    <input type="radio" {{((isset($petani)&&$petani->status=='N') || old('status')=='N')?'checked':''}} name="status" value="Tidak AKtif" class="text-sm"> Non-Aktif
                </div>
                <div
                class="text-sm">@error('status') {{$message}} @enderror
            </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
</div>
@endsection
