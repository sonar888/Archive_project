<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kudos extends Model
{
    use HasFactory;

    public function work()
    {
        return $this -> belongsTo(Work::class);
    }
}
