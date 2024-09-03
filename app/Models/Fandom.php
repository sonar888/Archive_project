<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fandom extends Model
{
    use HasFactory;

    protected $table = 'fandoms';

    public function works()
    {
        return $this->belongsToMany(Work::class);
    }
}
