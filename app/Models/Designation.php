<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'departmant_id', 'top_designation_id'];


    public function user()
    {
        
        return $this->belongsTo('App\Models\User', 'designation_id');
    }

    public function department()
    {
        
        return $this->belongsTo('App\Models\Department');
    }
}
