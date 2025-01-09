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
        'position_job', 
        'description',
    ];
}
