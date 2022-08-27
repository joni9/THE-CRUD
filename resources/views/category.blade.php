@extends('template.container')<!-- memaggil template di folder template dengan nama file container -->
@section('content')<!-- memanggil code ynag diselecsi di file container dengan nama conten -->
<h1>Product List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$category->nama_kategori}}</td>
                    <td>
                      <form action="/category-delete/{{$category->id}}" method="POST">
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