<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  

    protected $table = 'students';

   
    protected $fillable = [
        'first_name',
        'last_name',
        'class',
        'age',
        'roll_no',
    ];
}
