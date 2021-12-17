<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infolomba;
use App\Models\Recipe;
use App\Models\Tip;
use App\Models\Bahanpilihan;

class IndexController extends Controller
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
        return view('index', compact('recipes','infolombas'));
    }
    /**
     * SELECT * FROM recipes;
     * SELECT * FROM infolombas;
     */
    public function cardresep()
    {
        $recipes = Recipe::all();
        $infolombas = Infolomba::all();
        return view('index.cardresep',compact('recipes','infolombas'));
    }
    /**
     * SELECT * FROM recipes;
     * SELECT * FROM infolombas;
     */

    public function cardtip()
    {
        $infolombas = Infolomba::all();
        $tips = Tip::all();
        return view('index.cardtip',compact('infolombas','tips'));
    }

    /**
     * SELECT * FROM tips;
     * SELECT * FROM infolombas;
     */

    public function cardbahanpilihan()
    {
        $infolombas = Infolomba::all();
        $bahanpilihans = Bahanpilihan::all();
        return view('index.cardbahanpilihan',compact('infolombas','bahanpilihans'));
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
