<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use Illuminate\Http\Request;

class AktivitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aktivitass = Aktivitas::all();
        return view('admin.aktivitas', compact('aktivitass'));
    }

    /**
     *  SELECT * FROM aktivitas;
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kirimpesan');
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
            'pesan' => 'required',
        ]);
        
        $aktivitas = new Aktivitas();
        $aktivitas->id= $request->id;
        $aktivitas->author_id = $request->author_id;
        $aktivitas->pesan = $request->pesan;
      
        $aktivitas->save();

        return redirect('/aktivitas')->with('toast_success','Pesan berhasil dikirim');
    }

    /* INSERT INTO aktivitas(id, author_id, pesan) VALUES($request->author_id, $request->pesan );
    /**

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
