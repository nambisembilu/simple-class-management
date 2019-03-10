<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'address'
    ];

    public function class()
    {
        return $this->hasMany('App\Classes');
    }

    public function getFullName()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
