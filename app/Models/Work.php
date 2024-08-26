<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Work extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function chapters()

    {
        return $this->hasMany(Chapter::class);
    }
}
