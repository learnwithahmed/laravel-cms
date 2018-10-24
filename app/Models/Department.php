<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed id
 */
class Department extends Model
{
    protected $fillable = [
        'name', 'detail'
    ];
}
