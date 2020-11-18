<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $table = 'trains';
    protected $fillable = ['name', 'max_speed', 'user_id'];

}
