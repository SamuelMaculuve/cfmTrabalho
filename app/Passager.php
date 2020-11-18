<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passager extends Model
{
    protected $table = 'passagers';
    protected $fillable = ['name', 'surname', 'occupation','user_id'];

}
