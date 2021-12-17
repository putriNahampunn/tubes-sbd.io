<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    use HasFactory;
    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function komen()
    {
        return $this->hasMany(Komentartip::class);
    }
}
