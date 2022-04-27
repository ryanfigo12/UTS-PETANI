@extends('layout.template')
@section('title', 'TAMBAH PANEN')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="{{route('panen.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Produk</label>
                <input type="text" class="form-control" placeholder="Produk">
                <span class="text-sm">@error('productName') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Kelompoktani</label>
                <input type="text" class="form-control" placeholder="Kelompoktani">
                <span class="text-sm">@error('nama_kelompok') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Perkiraan Panen</label>
                <input type="date" class="form-control" placeholder="Perkiraan Panen">
                <span class="text-sm">@error('perkiraanPanendate') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Perkiraan Jumlah</label>
                <input type="text" class="form-control" placeholder="Perkiraan Jumlah">
                <span class="text-sm">@error('perkiraanPanenjumlah') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tanggal Panen</label>
                <input type="date" class="form-control" placeholder="Tanggal Panen">
                <span class="text-sm">@error('PanenDate') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Jumlah Panen</label>
                <input type="text" class="form-control" placeholder="Jumlah Panen">
                <span class="text-sm">@error('PanenJumlah') {{$message}} @enderror</span>
            </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
</div>
@endsection
