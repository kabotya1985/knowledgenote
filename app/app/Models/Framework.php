<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Framework extends Model
{
    protected $table = 'framework';
    protected $fillable = ['id','name','genre','etc','url'];
    protected $hidden = [];
    protected $casts = [];
    protected $dates = [];

}
