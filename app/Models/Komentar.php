<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'aktivitas_id',
        'komentar',
    ];

    public function post()
    {
        return $this->belongsTo(Aktivitas::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
