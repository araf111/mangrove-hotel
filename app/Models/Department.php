<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'department_id');
    }

    public function designations()
    {
        return $this->hasMany('App\Models\Designation');
    }
}
