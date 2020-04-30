@extends('layout/app')

@section('title','Tambah Barang')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Tambah Barang</h1>
            
    <form method="post" action="/selections">
    @csrf
        <div class="form-group">
            <label for="kode">Kode Barang</label>
            <input type="text" class="form-control" id="kode" placeholder="Masukan kode" name="kode" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama Barang</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama">
        </div>
        <div class="form-group">
            <label for="awal">Harga awal</label>
            <input type="text" class="form-control" id="awal" placeholder="Masukan awal" name="awal">
        </div>
        <div class="form-group">
            <label for="jual">Harga jual</label>
            <input type="text" class="form-control" id="jual" placeholder="Masukan jual" name="jual">
        </div>        
        <button type="submit" class="btn btn-primary">create</button>
    </form>

        </div>
    </div>
</div>
@endsection
   