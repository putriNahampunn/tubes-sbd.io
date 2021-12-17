<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktivitas extends Model
{
    use HasFactory;
    public function author()
    {
        return $this->belongsTo(Admin::class);
    }

    public function comments()
    {
        return $this->hasMany(Komentar::class);
    }
}
