<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
        'fullname',
        'nickname',
        'gender',
        'date_of_birth',
        'job_position',
        'country_id',
        'description',
    ];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }
}
