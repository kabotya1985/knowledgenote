<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag';
    protected $fillable = ['id','tag'];
    protected $hidden = [];
    protected $casts = [];
    protected $dates = [];

    public function framework()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

}
