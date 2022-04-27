@extends('layout.template')
@section('title')

@section('content')
<div class="col-xs-12">
    <h1>{{$title}}</h1>
    <div class="box">
        <div class="box-header">
            <div class="table-responsive">
                    <a href="addPanen"class="btn btn-primary btn-sm">Tambah</a>
                    <a href=""class="btn btn-sm btn-warning">Hapus</a>
                    <a href=""class="btn btn-sm btn-success">Post</a>
                
            </div>
            <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Kelompok Tani</th>
                    <th>Tanggal Panen</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($panens as $item)
                <tr>
                    <!--Query Builder-->
                    {{-- <td>{{$item->productName}}</td> --}}
                    <!--eloquen-->
                    <td>{{$item->product->productName}}</td>
                    <td></td>
                    <td>{{$item->PanenDate}}</td>
                    <td>{{$item->PanenJumlah}}</td>
                    <td>{{$item->satuan}}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-success">Detail</a>
                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                        <a href="" class="btn btn-sm btn-danger"> Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @endsection
