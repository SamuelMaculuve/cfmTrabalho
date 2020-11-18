<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    protected $table = 'merchandises';
    protected $fillable = ['name', 'description', 'category_id', 'wagon_id','user_id'];
}
