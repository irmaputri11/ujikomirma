<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nyambungCotroller extends Controller
{
    public function index (){
        $produk = produk::all();
        return view ('index', compact('produk'));
        
    }
}
