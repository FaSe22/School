<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Task extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    public function pupils(): BelongsToMany
    {
        return $this->belongsToMany(Pupil::class,);
    }


}
