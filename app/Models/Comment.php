<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use App\Models\User;
// use App\Models\Chapter;
// use App\Models\Work;

class Comment extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function author() 
    {
        return $this->hasOne(User::class);
    }

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }

    public function work()
    {
        return $this->belongsTo(Work::class);
    }
}
