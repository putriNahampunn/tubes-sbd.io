<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cooksnap extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'recipe_id',
        'komentar',
        'gambar',
    ];

    public function recipes()
    {
        return $this->belongsTo('App\Models\Recipe','recipe_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
