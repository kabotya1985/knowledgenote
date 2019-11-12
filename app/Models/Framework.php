<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Framework extends Model
{
    protected $table = 'framework';
    protected $fillable = ['id','framework','description','URL'];
    protected $hidden = [];
    protected $casts = [];
    protected $dates = [];

    public function tag()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

}
