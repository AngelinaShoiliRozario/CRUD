<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Database extends Model
{
    protected $fillable =['id', 'name', 'email', 'password','isaAdmin']; 
}
