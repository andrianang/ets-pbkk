<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Kategori;
use App\Models\Kondisi;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $post = Product::all();
        return view('dashboard', ['posts' => $post]);
    }
    
    public function create(){
        
        $kategoris = Kategori::all();
        $kondisis = Kondisi::all();
        return view('create', [ 'kategoris' => $kategoris, 'kondisis' => $kondisis]);
    }

    public function edit($postId){
        $post = Product::find($postId);
        $kategoris = Kategori::all();
        $kondisis = Kondisi::all();
        return view('edit', ['post' => $post, 'kategoris' => $kategoris, 'kondisis' => $kondisis]);
    }

}
