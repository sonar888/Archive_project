<?php

namespace App\Models;

use App\Models\Work;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'additional-tags';

    public function works()
    {
        return $this -> belongsToMany(Work::class); // change the name here if needed belongsToMany(Work::class, "job_listing_id" )
    }
}
