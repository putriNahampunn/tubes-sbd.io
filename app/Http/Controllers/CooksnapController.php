<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cooksnap;
use App\Models\Recipe;

class CooksnapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cooksnaps = Cooksnap::all();
        return view("profile.cooksnap",compact('cooksnaps'));
    }
    /**
     *  SELECT * FROM cooksnaps;
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storecooksnap(Request $request, Recipe $recipes)
    {
        Cooksnap::create([
            'user_id' => Auth()->id(),
            'recipe_id' => $recipes->id,
            'komentar' => $request->komentar,
            'gambar' => $request->file('gambar')->store('gambar_cooksnap'),
        ]);

        return redirect('/cardresep');
    }
     /* INSERT INTO cooksnaps(user_id, recipe_id, komentar, gambar) 
        VALUES(Auth()_id, $recipes->id, $request->komentar , $request->gambar);*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipes = Recipe::findOrFail($id);
        return view('home.halamancooksnap', compact('recipes'));
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
