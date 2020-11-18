<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $table = 'travels';
    protected $fillable = ['duration', 'departure_place', 'destination', 'fax','user_id'];

}
