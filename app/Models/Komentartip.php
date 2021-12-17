<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentartip extends Model
{
    use HasFactory;

    protected $table = 'komentartips';
    protected $fillable = [
        'user_id',
        'tip_id',
        'komentar',
    ];

    public function tip()
    {
        return $this->belongsTo(Tip::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
