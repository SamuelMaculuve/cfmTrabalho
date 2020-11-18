<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonContact extends Model
{
    protected $table = 'person_contacts';
    protected $fillable = ['name', 'email', 'telephone', 'fax','user_id'];
}
