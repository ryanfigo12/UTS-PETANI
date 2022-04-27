@extends('layout.template')
@section('title', 'tambah')

@section('content')
<form role="form">
            <div class="box-body">
                <div class="form-group">
                <label for="">Masukan Nama Jajan Bali</label>
                <input type="text" class="form-control" id="" placeholder="Nama">
                </div>
                <div class="form-group">
                <label for="">Masukan Harga Jajan Bali</label>
                <input type="number" class="form-control" id="" placeholder="Harga">
                </div>
                <div class="form-group">
                <label for="">Masukan Jumlah Jajan Bali</label>
                <input type="text" class="form-control" id="" placeholder="Jenis">
                </div>
                <div class="form-group">
                    <label>Masukan Jajan Bali</label>
                    <select class="form-control" style="width: 100%;">
                        <option>Laklak</option>
                    </select>
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
@endsection