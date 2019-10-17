<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Framework_tag extends Model
{
    protected $table = 'Framework_tag';
    protected $fillable = ['id','framework_id','tag_id'];
    protected $hidden = [];
    protected $casts = [];
    protected $dates = [];

}
