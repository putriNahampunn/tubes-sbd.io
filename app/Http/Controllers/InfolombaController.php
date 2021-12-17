<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Infolomba;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InfolombaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lombas = Infolomba::all();
        return view('admin.infolomba', compact('lombas'));
    }

    /**
     *  SELECT * FROM infolombas;
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambahinfo');
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
            'judul_lomba' => 'required',
            'deskripsi_lomba' => 'required',
            'gambar' => 'image|file|max:1024',
        ]);
        
        $infolomba = new Infolomba();
        $infolomba->id = $request->id;
        $infolomba->author_id = $request->author_id;
        $infolomba->judul_lomba = $request->judul_lomba;
        $infolomba->deskripsi_lomba = $request->deskripsi_lomba;
        $infolomba->excerpt = Str::limit(strip_tags($request->deskripsi_lomba), 100);
        if($request->file('gambar')) {
            $infolomba->gambar = $request->file('gambar')->store('gambar_infolomba');
        }
      
        $infolomba->save();

        return redirect('/infolomba')->with('success','Resep Anda Berhasil Ditambahkan');
    }

    /* INSERT INTO infolombas(id, author_id, judul_lomba,deskripsi_lomba, gambar) 
       VALUES($request->author_id, $request->judul_lomba,$request->deskripsi_lomba, 
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
        DB::table('infolombas')->where('id',$id)->delete();
        return redirect('/infolomba')->with('toast_success','Info Lomba Berhasil Dihapus');
    }

    //  DELETE FROM infolombas WHERE id = $id;
}
