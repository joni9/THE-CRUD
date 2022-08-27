@extends('template.container')
@section('style')
@endsection
@section('content')
<h1>Product List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Kategori</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                  <td>{{$loop->iteration}}</td> <!-- membuat urutan nomor -->
                  <td>{{$product->nama_produk}}</td>
                  <td>{{$product->category->nama_kategori}}</td>
                  <td>{{$product->harga}}</td>
                  <td>{{$product->stok}}</td>
                  <td><a href="/edit/{{$product->id}}"  class="btn btn-success">EDIT</a>
                  <form action="/delete/{{$product->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection