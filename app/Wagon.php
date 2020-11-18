<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wagon extends Model
{
    protected $table = 'wagons';
    protected $fillable = ['capacity', 'tara', 'gross_weight', 'train_id'];

}
