@extends('layout/app')

@section('title','Daftar Barang')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Barang</h1>
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <table class="table table-dark">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">kode</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga Awal</th>
                    <th scope="col">Harga Jual</th>                    
                    <th scope="col">Aksi</th>                
                  </tr>
                </thead> 
                <tbody>
            @foreach( $selections as $selections )
                   <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $selections->kode }}</td>
                    <td>{{ $selections->nama }}</td>
                    <td>{{ $selections->awal }}</td>
                    <td>{{ $selections->jual }}</td>   
                    <td>
                    <a href="/selections/{{ $selections->id }}" class="badge badge-info">Detail</a>
                    </td>
                    </tr>
            @endforeach
        </tbody>
    </table>
            
        

            <a href="/selections/create" class="btn btn-primary my-3">create</a>

        </div>
    </div>
</div>
@endsection
   