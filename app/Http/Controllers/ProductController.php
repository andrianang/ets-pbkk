<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $file->storeAs('public/images', $fileName);

            $post = new Product();
            $post->nama = $request->nama;
            $post->deskripsi = $request->deskripsi;
            $post->kecacatan = $request->kecacatan;
            $post->kategori_id = $request->kategori_id;
            $post->kondisi_id = $request->kondisi_id;
            $post->jumlah = $request->jumlah;
            $post->image = $fileName;

            $post->save();

            return redirect()->route('dashboard')->with('success', 'Upload successful');
        } else {
            return back()->with('error', 'No file uploaded');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $file->storeAs('public/images', $fileName);

            $post = Product::find($request->id);
            $post->nama = $request->nama;
            $post->deskripsi = $request->deskripsi;
            $post->kecacatan = $request->kecacatan;
            $post->kategori_id = $request->kategori_id;
            $post->kondisi_id = $request->kondisi_id;
            $post->jumlah = $request->jumlah;
            $post->image = $fileName;
        }
      

        $post->update();
        return redirect()->route('dashboard')->with('success', 'Product edited');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->route('dashboard')->with('success', 'Post deleted successfully.');
    }
    
}
