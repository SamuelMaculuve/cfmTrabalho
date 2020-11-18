<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipient extends Model
{
    protected $table = 'person_contacts';
    protected $fillable = ['name', 'email', 'fax', 'telephone', 'user_id'];

}
