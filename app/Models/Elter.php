<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elter extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->morphOne(User::class, 'usable');
    }

    public function  children()
    {
        return $this->belongsToMany(Pupil::class);
    }


}
