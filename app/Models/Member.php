<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';

    protected $fillable = [
      'name',
      'email',
      'password',
    ];

    protected $hidden = [
    ];

    protected $casts = [
    ];

    protected $dates = [
    ];


}
