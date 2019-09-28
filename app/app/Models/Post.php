<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $fillable = ['id','post','framework','genre','member','access'];
    protected $hidden = [];
    protected $casts = [];
    protected $dates = [];

}
