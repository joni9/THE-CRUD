<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $fillable=['nama_produk','id_categori', 'harga','stok'];
    public function category()
    {
        return $this->belongsTo('App\Category','id_categori');
    }

}
