<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'mobile', 'email','download_token'];


    /**
     * Get the user that owns the inquiry.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
