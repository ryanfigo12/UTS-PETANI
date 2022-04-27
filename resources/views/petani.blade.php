@extends('layout.template')
@section('title')

@section('content')
<div class="col-xs-12">
    <h1>{{$title}}</h1>
    <div class="box">
        <div class="box-header">
            <div class="table-responsive">
                    <a href="inputpetani"class="btn btn-primary btn-sm">Tambah</a>
                
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
                    <th>NAMA</th>
                    <th>KELOMPOK TANI</th>
                    <th>NIK</th>
                    <th>ALAMAT</th>
                    <th>TELP</th>
                    <th>FOTO</th>
                    <th>STATUS</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($petanis as $item)
                <tr>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->kelompoktani->nama_kelompok}}</td>
                    <td>{{$item->nik}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->telp}}</td>
                    <td><img src="{{ url ('foto_petani/'.$item->foto) }}" width="100px" alt="">
                    </td>
                    <td>{{$item->status}}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-success">Edit</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#delete{{ $item->id_kelompok_tani }}"> Delete 
                                </button>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @foreach ($petanis as $item)
                <div class="modal modal-danger fade" id="delete{{ $item->id_kelompok_tani }}">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah anda yakin ingin menghapus data ini...?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                                <a href="/petani/destroy/{{$item->id_kelompok_tani}}" class="btn btn-outline">Yes</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endsection
