<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pupil extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->morphOne(User::class, 'usable');
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }

    public function eltern()
    {
        return $this->belongsToMany(Elter::class);
    }

    public function classRoom()
    {
        return $this->belongsTo(ClassRoom::class);
    }
}
