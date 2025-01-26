<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $fillable = [
        'name',
        'description',
        'release_date',
    ];

    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
