<?php

namespace App\Http\Controllers;

use App\Models\Bahanpilihan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BahanpilihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bahanpilihans = Bahanpilihan::all();
        return view('admin.bahanpilihan', compact('bahanpilihans'));
    }

    /**
     *  SELECT * FROM bahanpilihans;
     */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambahbahan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul_bahanpilihan' => 'required',
            'deskripsi_bahanpilihan' => 'required',
            'gambar' => 'image|file|max:1024',
        ]);
        
        $bahanpilihan = new Bahanpilihan();
        $bahanpilihan->id = $request->id;
        $bahanpilihan->author_id = $request->author_id;
        $bahanpilihan->judul_bahanpilihan = $request->judul_bahanpilihan;
        $bahanpilihan->deskripsi_bahanpilihan = $request->deskripsi_bahanpilihan;
        $bahanpilihan->excerpt = Str::limit(strip_tags($request->deskripsi_bahanpilihan), 50);
        if($request->file('gambar')) {
            $bahanpilihan->gambar = $request->file('gambar')->store('gambar_bahanpilihan');
        }
      
        $bahanpilihan->save();

        return redirect('/bahanpilihan')->with('success','Resep Anda Berhasil Ditambahkan');
    }

    /* INSERT INTO bahanpilihans(id, author_id, judul_bahanpilihan, deskripsi_bahanpilihan,gambar) 
        VALUES($request->author_id, $request->judul_bahanpilihan, $request->deskripsi_bahanpilihan,
        $request->gambar );
    /**

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
