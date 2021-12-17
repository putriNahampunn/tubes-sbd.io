<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aktivitas;
use App\Models\Komentar;

class PostCommentController extends Controller
{
    public function store(Request $request, Aktivitas $aktivitas)
    {
        Komentar::create([
            'user_id' => Auth()->id(),
            'aktivitas_id' => $aktivitas->id,
            'komentar' => $request->komentar,

        ]);

        return redirect()->back()->with('success','Komentar berhasil dikirim');
    }

     /* INSERT INTO komentars(id, user_id, aktivitas_id, komentar) 
        VALUES($request->user_id, $request->aktivitas_id, $request->komentar );
    */
}
