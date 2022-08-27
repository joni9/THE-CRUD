<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Category;

class ProductController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        return view ('create', compact('categories'));
    }

    public function store(Request $request)//membaca text input dalam from di halaman create
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required'
        ]);//memvalidasi agar inputan tidak kosong

        produk::create([
            'nama_produk' => $request->nama_produk,
            'id_categori' => $request->id_categori,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]);//memasukkan isi table dari create ke tabel produk  
        return redirect('/products');
    }

    Public function Products()
    {
        $products=Produk::all();//mengambil data di tabel mysql/dayabase        
        return view('products', compact('products'));
    }

    public function edit($id)
    {
        $product = Produk::where('id',$id)->first();//memilih edit berdasarkan id dan menampilkannya
        return view ('edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        Produk::where('id',$id)->update([
            'nama_produk'=>$request->nama_produk,
            'harga'=>$request->harga,
            'stok'=>$request->stok
        ]);
        return redirect('/products');
    }
    public function delete($id)
    {
        Produk::destroy($id);
        return back();
    }
}
