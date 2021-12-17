<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentarresep extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'recipe_id',
        'komentar',
    ];

    public function post()
    {
        return $this->belongsTo(Recipe::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
