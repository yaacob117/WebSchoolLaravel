<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Superhero extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'real_name', 'universe_id', 'gender_id', 'picture'];

    public function universe()
    {
        return $this->belongsTo(Universe::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
}