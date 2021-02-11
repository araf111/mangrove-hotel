<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
	protected $guarded = ['id'];

	public function project()
	{
		return $this->belongsTo('App\Models\Project');
	}
	public function investorProfile()
	{
		return $this->hasOne('App\Models\InvestorProfile');
	}

	public function shares()
	{
		return $this->hasMany('App\Models\InvestorShare');
	}
    public function sharePayments()
    {
        return $this->hasMany('App\Models\InvestorSharePayment');
	}
	public function OfficeUseOnly()
    {
        return $this->hasMany('App\Models\OfficeUseOnly');
    }
}
