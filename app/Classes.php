<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable = [
        'name',
        'level',
        'year'
    ];

    public function teacher()
    {
        return $this->belongsTo('App\Teachers');
    }

    public function student()
    {
        return $this->hasMany('App\Students','class_id');
    }
}
