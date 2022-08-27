@extends('template.container')
@section('style')
<link rel="stylesheet" href="{{asset('style/style.css')}}">
@endsection
@section('content')
<form class="mb-4" action="/update/{{$product->id}}" method="POST">
  @csrf <!-- Fungsi untuk input data -->
  @method('PATCH')<!-- Fungsi untuk update -->
    <h1 class="text-center mb-4">Edit Product</h1>
    <div class="form-group">
        <label for="">Product Name</label>
        <input value="{{$product->nama_produk}}" type="text" class="form-control" name="nama_produk">
    </div>
    <div class="form-group">
        <label for="">Price</label>
        <input value="{{$product->harga}}" type="number" class="form-control" name="harga">
    </div>
    <div class="form-group">
        <label for="">Stock</label>
        <input value="{{$product->stok}}" type="number" class="form-control" name="stok">
    </div>
    <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
</form>
@endsection