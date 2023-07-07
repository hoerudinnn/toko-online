<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // controller action
    public function showAll () {
        // Kode logika untuk mengambil dan menampilkan semua data
        $dataProductDariModel = Product::all(); //method all() berfungsi untuk mengambil seluruh data pada model tertentu.
        return view ('product.display', ["products" =>
        $dataProductDariModel ]); 
        //Setelah mengambil data dengan Product::all() kita assign ke variable $dataProductDariModel, lalu, kita 
        // perintahkan action showAll untuk mengembalikan sebuah view yang terletak pada folder
        // resources/views/product/display.blade.php, tapi kita cukup menuliskan product/display saja,
        // karena semua views terletak pada folder resources/views 
    }

    public function saveNew (Request $request) {
        // Kode logika untuk menyimpan product baru
    }
}
