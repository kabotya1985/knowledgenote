<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Case extends Model
{
    protected $table = 'case';
    protected $fillable = ['id','case','genre','company','URL','access'];
    protected $hidden = [];
    protected $casts = [];
    protected $dates = [];

}
