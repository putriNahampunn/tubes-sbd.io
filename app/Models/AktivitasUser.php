<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktivitass extends Model
{
    use HasFactory;
    public function author()
    {
        return $this->belongsTo(Admin::class);
    }

}
