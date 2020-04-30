@extends('layout/app')

@section('title','Detail Barang')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Detail Barang</h1>
            <div class="row no-gutters">
    
  
    <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title"><b>{{ $selections->kode }}</b></h4>
              <p class="card-text">{{ $selections->nama }}</p>              
              <p class="card-text">{{ $selections->awal }}</p>
              <p class="card-text">{{ $selections->jual }}</p>
              
              <a href="{{ $selections->id }}/edit" class="btn btn-primary">Edit</a>
              
              <form action="{{ $selections->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              <a href="/selections" class="card-link">back<<</a>
            </div>
          </div>

        </div>
    </div>
</div>
@endsection
   