<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Infolomba;
use App\Models\Tip;
use App\Models\Bahanpilihan;
use App\Models\Komentarresep;
use App\Models\Komentartip;
use App\Models\Cooksnap;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        $infolombas = Infolomba::all();
        $bahanpilihans = Bahanpilihan::all();
        return view('home', compact('recipes','infolombas','bahanpilihans'));
    }
    /**
     *  SELECT * FROM recipes;
     *  SELECT * FROM infolombas;
     *  SELECT * FROM bahanpilihans;
     */

    public function cardresep()
    {
        $recipes = Recipe::all();
        $infolombas = Infolomba::all();
        return view('home.cardresep',compact('recipes','infolombas'));
    }
    /**
     * SELECT * FROM recipes ;
     * SELECT * FROM infolombas;
     */
    public function cardtip()
    {
        $infolombas = Infolomba::all();
        $tips = Tip::all();
        return view('home.cardtip',compact('infolombas','tips'));
    }
    /**
     * SELECT * FROM tips;
     * SELECT * FROM infolombas;
     */

    public function cardbahanpilihan()
    {
        $infolombas = Infolomba::all();
        $bahanpilihans = Bahanpilihan::all();
        return view('home.cardbahanpilihan',compact('infolombas','bahanpilihans'));
    }
    /**
     * SELECT * FROM bahanpilihans;
     * SELECT * FROM infolombas;
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showresep($id)
    {
        $recipes = Recipe::findOrFail($id);
        $komentars = Komentarresep::all();
        $cooksnaps = Cooksnap::all();
        return view("home.halamanresep",compact('recipes', 'komentars','cooksnaps','id'));
    }

    /**
     *  SELECT * FROM recipes WHERE id = $id;
     *  SELECT * FROM komentarreseps;
     *  SELECT * FROM cooksnaps;  
     */

    public function storekomentarresep(Request $request, Recipe $recipes)
    {
        Komentarresep::create([
            'user_id' => Auth()->id(),
            'recipe_id' => $recipes->id,
            'komentar' => $request->komentar,

        ]);

        return redirect()->back();
    }
    /* INSERT INTO komentarreseps(user_id, recipe_id, komentar) 
        VALUES(Auth()_id, $recipes->id, $request->komentar );*/
    

    public function showtips($id)
    {
        $tips = Tip::findOrFail($id);
        $komentars = Komentartip::all();
        return view("home.halamantips",compact('tips','komentars','id'));
    }

    /**
     *  SELECT * FROM tips WHERE id = $id;
     *  SELECT * FROM komentartips;
     */

    public function storekomentartips(Request $request, Tip $tips)
    {
        Komentartip::create([
            'user_id' => Auth()->id(),
            'tip_id' => $tips->id,
            'komentar' => $request->komentar,

        ]);

        return redirect()->back();
    }

    /* INSERT INTO komentartips(user_id, tip_id, komentar) 
        VALUES(Auth()_id, $tips->id, $request->komentar );*/

    
    public function showbahanpilihan($id)
    {
        $bahanpilihans = Bahanpilihan::findOrFail($id);
        return view("home.halamanbahanpilihan",compact('bahanpilihans'));
    }
    /**
     *  SELECT * FROM bahanpilihans WHERE id=$id;
     */
    public function showinfolomba($id)
    {
        $infolombas = Infolomba::findOrFail($id);
        return view("home.halamaninfolomba",compact('infolombas'));
    }
    /**
     *  SELECT * FROM infolombas WHERE id = $id;
     */

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
