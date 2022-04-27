@extends('layout.template')
@section('title')

@section('content')
<center>
    <h1>JAJAN BALI</h1>
</center>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="table-responsive">
                    <a href="/jajanbali/add" class="btn btn-primary btn-sm">Tambah</a>
                    @if (session('pesan'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i> success!</h4>
                        {{ session('pesan') }}.
                    </div>
                    @endif
                    <a href="" class="btn btn-sm btn-warning">Publish</a>
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
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA JAJAN</th>
                            <th>HARGA</th>
                            <th>JUMLAH</th>
                            <th>FOTO</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        @foreach ($jajanbali as $data)
                        <tr>
                            <td><input type="checkbox" class="flat-red">
                                {{$no++}}</td>
                            <td>{{$data->nama_jajanbali}}</td>
                            <td>{{$data->harga}}</td>
                            <td>{{$data->jumlah}}</td>
                            <td><img src="{{ url ('foto_jajanbali/'.$data->foto_jajanbali) }}" width="100px" alt="">
                            </td>
                            <td>
                                <a href="/jajanbali/detail/{{ $data->id_jajanbali }}"
                                    class="btn btn-sm btn-success">Detail</a>
                                <a href="/jajanbali/edit/{{ $data->id_jajanbali }}"
                                    class="btn btn-sm btn-warning">Edit</a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#delete{{ $data->id_jajanbali }}"> Delete 
                                </button>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @foreach ($jajanbali as $data)
                <div class="modal modal-danger fade" id="delete{{ $data->id_jajanbali }}">
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
                                <a href="/jajanbali/delete/{{$data->id_jajanbali}}" class="btn btn-outline">Yes</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endsection