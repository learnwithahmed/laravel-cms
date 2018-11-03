<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=[
        'name' ,'title','gender','email','phone','city'
    ];
   
}


