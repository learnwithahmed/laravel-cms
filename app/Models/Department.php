<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

//TODO connect with model Employee
/**
 * @property mixed id
 */
class Department extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'detail'
    ];
}
