<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function character(){
        return $this->hasMany(Character::class);
    }
}
