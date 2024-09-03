<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchiveWarning extends Model
{
    use HasFactory;

    protected $table='archive_warnings';

    public function works()
    {
        return $this->belongsToMany(Work::class);
    }


}
