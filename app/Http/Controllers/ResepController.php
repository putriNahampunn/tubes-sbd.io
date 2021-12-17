<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        return view("profile.resep",compact('recipes'));
    }
    /**
     *  SELECT * FROM recipes;
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("profile.tulisresep");
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
            'judul_resep' => 'required',
            'deskripsi_resep' => 'required',
            'porsi' => 'required',
            'lama_memasak' => 'required',
            'bahan_bahan' => 'required',
            'langkah_langkah' => 'required',
            'gambar' => 'image|file|max:1024',
        ]);
        
        $resep = new Recipe();
        $resep->author_id = $request->author_id;
        $resep->judul_resep = $request->judul_resep;
        $resep->deskripsi_resep = $request->deskripsi_resep;
        $resep->excerpt = Str::limit(strip_tags($request->deskripsi_resep), 50, '...');
        $resep->porsi = $request->porsi;
        $resep->lama_memasak = $request->lama_memasak;
        $resep->bahan_bahan = $request->bahan_bahan;
        $resep->langkah_langkah = $request->langkah_langkah;
        if($request->file('gambar')) {
            $resep->gambar = $request->file('gambar')->store('gambar_resep');
        }
      
        $resep->save();

        return redirect('/resep')->with('success','Resep Anda Berhasil Ditambahkan');
    }

    /* INSERT INTO recipes(id, author_id, judul_resep, deskripsi_resep, porsi, lama_memasak, bahan_bahan, 
       langkah_langkah, gambar) VALUES($request->author_id, $request->judul_resep, $request->deskripsi_resep,
        $request->porsi, $request->lama_memasak, $request->bahan_bahan, $request->langkah_langkah, 
        $request->gambar );
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
        $recipe = DB::table('recipes')->where('id',$id)->first();
        return view('profile.editresep', compact('recipe'));
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
            'judul_resep' => 'required',
            'deskripsi_resep' => 'required',
            'porsi' => 'required',
            'lama_memasak' => 'required',
            'bahan_bahan' => 'required',
            'langkah_langkah' => 'required',
            'gambar' => 'image|file|max:1024',
        ]);

        DB::table('recipes')->where('id',$id)
        ->update([
            'author_id'=> $request->author_id,
            'judul_resep' => $request->judul_resep,
            'deskripsi_resep' => $request->deskripsi_resep,
            'excerpt' => Str::limit(strip_tags($request->deskripsi_resep), 50, '...'),
            'porsi' => $request->porsi,
            'lama_memasak' => $request->lama_memasak,
            'bahan_bahan' => $request->bahan_bahan,
            'langkah_langkah' => $request->langkah_langkah,
        ]);       

         if($request->file('gambar')) {
            DB::table('recipes')->where('id',$id)
            ->update([
            'gambar' => $request->file('gambar')->store('gambar_resep'),  
            ]);
        }

        return redirect('/resep')->with('success','Update Berhasil');
    }

    /**
     *  UPDATE recipes SET judul_resep = $request->judul_resep, deskripsi_resep = $request->deskripsi_resep,
     *      porsi = $request->porsi, lama_memasak = $request->lama_memasak, bahan_bahan = $request->bahan_bahan,
     *      langkah_langkah = $request->langkah_langkah, gambar = $request->file('gambar')
     * WHERE id = $id;
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('recipes')->where('id',$id)->delete();
        return redirect('/resep')->with('success','Resep Anda Berhasil Dihapus');
    }
}
    //  DELETE FROM recipes WHERE id = $id;