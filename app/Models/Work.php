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

    public function rating()
    {
        return $this->belongsToMany(Rating::class);
    }

    public function warnings()
    {
        return $this->belongsToMany(ArchiveWarning::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function chapters()

    {
        return $this->hasMany(Chapter::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function kudos()
    {
        return $this->hasMany(Kudos::class);
    }
}
