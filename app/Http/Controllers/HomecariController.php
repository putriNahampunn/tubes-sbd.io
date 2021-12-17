<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Recipe;
use App\Models\Tip;
use App\Models\Bahanpilihan;

class HomecariController extends Controller
{
    public function index(Request $request)
    {
        $key = trim($request->get('search'));

        $recipes = Recipe::query()
            ->where('judul_resep', 'like', "%{$key}%")
            ->orWhere('deskripsi_resep', 'like', "%{$key}%")
            ->get();

        $bahanpilihans = Bahanpilihan::query()
            ->where('judul_bahanpilihan', 'like', "%{$key}%")
            ->orWhere('deskripsi_bahanpilihan', 'like', "%{$key}%")
            ->get();

        $tips = Tip::query()
            ->where('judul_tips', 'like', "%{$key}%")
            ->get();


        return view('homecari', [
            'recipes' => $recipes,
            'bahanpilihans' => $bahanpilihans,
            'tips' => $tips
        ]);
    }

        
}
