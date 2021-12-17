<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Tip;
use Illuminate\Http\Request;

class TipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tips = Tip::all();
        return view("profile.tips",compact('tips'));
    }

    /**
     *  SELECT * FROM tips;
     */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("profile.tulistips");
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
            'judul_tips' => 'required',
            'langkah_langkah_tips' => 'required',
            'gambar' => 'image|file|max:1024',
        ]);
        
        $tips = new Tip();
        $tips->author_id = $request->author_id;
        $tips->judul_tips = $request->judul_tips;
        $tips->langkah_langkah_tips = $request->langkah_langkah_tips;
        if($request->file('gambar')) {
            $tips->gambar = $request->file('gambar')->store('gambar_tips');
        }

        $tips->save();

        return redirect('/tips')->with('success','Tips Anda Berhasil Ditambahkan');
    }

    /* INSERT INTO tips(id, author_id, judul_tips,langkah_langkah_tips, gambar) 
       VALUES($request->author_id, $request->judul_tips,$request->langkah_langkah_tips, 
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
        $tip = DB::table('tips')->where('id',$id)->first();
        return view('profile.edittips', compact('tip'));
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
        $validatedData = $request->validate([
            'judul_tips' => 'required',
            'langkah_langkah_tips' => 'required',
            'gambar' => 'image|file|max:1024',
        ]);

        DB::table('tips')->where('id',$id)
        ->update([
            'author_id'=> $request->author_id,
            'judul_tips' => $request->judul_tips,
            'langkah_langkah_tips' => $request->langkah_langkah_tips,
        ]);       

        if($request->file('gambar')) {
            DB::table('tips')->where('id',$id)
            ->update([
            'gambar' => $request->file('gambar')->store('gambar_tips'),  
            ]);
        }

        return redirect('/tips')->with('success','Update Berhasil');
    }

    /**
     *  UPDATE tips SET judul_tips = $request->judul_tips, langkah_langkah_tips = $request->langkah_langkah_tips, gambar = $request->file('gambar')
     *      WHERE id = $id;
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tips')->where('id',$id)->delete();
        return redirect('/tips')->with('success','Tips Anda Berhasil Dihapus');
    }

     //  DELETE FROM tips WHERE id = $id;
}
