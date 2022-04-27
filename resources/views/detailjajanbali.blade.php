@extends('layout.template')
@section('title','DETAIL JAJANBALI')

@section('content')
<table class="table">
    <tr>
        <th width="100px">ID JAJAN</th>
        <th width="30px">:</th>
        <th>{{ $jajanbali->id_jajanbali }}</th>
    </tr>
    <tr>
        <th width="100px">NAMA JAJAN</th>
        <th width="30px">:</th>
        <th>{{ $jajanbali->nama_jajanbali }}</th>
    </tr>
    <tr>
        <th width="100px">HARGA</th>
        <th width="30px">:</th>
        <th>{{ $jajanbali->harga }}</th>
    </tr>
    <tr>
        <th width="100px">JUMLAH</th>
        <th width="30px">:</th>
        <th>{{ $jajanbali->jumlah }}</th>
    </tr>
    <tr>
        <th width="100px">FOTO</th>
        <th width="30px">:</th>
        <th><img src="{{ url('foto_jajanbali/'.$jajanbali->foto_jajanbali) }}" width="300px"></th>
    </tr>
    <tr>
        <a href="/jajanbali" class="btn btn-success tbn-sm">Kembali</a>
    </tr>
</table>
@endsection