@extends('template.container')
@section('style')
<link rel="stylesheet" href="{{asset('style/style.css')}}">
@endsection
@section('content')

<form class="mb-4" action="/store" method="POST">
  @csrf
    <h1 class="text-center mb-4">Create Product</h1>
    <div class="form-group">
        <label for="">Product Name</label>
        <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk">
        @error('nama_produk') <span class="text-danger">{{$message}}</span>@enderror {{-- menampilkan error agak inputan tidak kosong --}}
    </div>
    <div class="form-group">
        <label for="">Product Kategori</label>
        <select name="id_categori" class="form-control">
          @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->nama_kategori}}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Price</label>
        <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga">
        @error('harga') <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
        <label for="">Stock</label>
        <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok">
        @error('stok') <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
</form>
@endsection