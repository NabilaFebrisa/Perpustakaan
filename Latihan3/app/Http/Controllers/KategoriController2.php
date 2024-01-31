<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

class KategoriController2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *  \Illuminate\Http\Response
     */
   
        public function index() {
            $kategori = Kategori::all();
            return view('kategori', ['kategori' =>$kategori]);
        }
    

    /**
     * Show the form for creating a new resource.
     *
     *  \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahkategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     *\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kategori::create([
            'nama_kategori' =>$request->nama_kategori,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     *
     *  \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     *\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view('editkategori', ['kategori' => $kategori]);
    }

    /**
     * Update the specified resource in storage.
     *
     * \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Kategori::find($id)->update([
            'nama_kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi
        ]);;
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kategori::find($id)->delete();
        return redirect()->route('kategori.index');
    }
}
