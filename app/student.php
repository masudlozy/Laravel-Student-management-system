<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = [
        'name', 'image', 'faname', 'email', 'mobile', 'Address', 'department', 'classes', 'Role', 'reg'
    ];
    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function classes()
    {
        return $this->belongsTo('App\Classes');
    }
}
