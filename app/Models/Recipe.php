<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Komentarresep::class);
    }

    public function cooksnap()
    {
        return $this->hasMany(Cooksnap::class);
    }
    

   
}
