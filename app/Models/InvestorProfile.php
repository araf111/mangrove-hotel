<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvestorProfile extends Model
{
	protected $fillable = [
		'investor_id', 'phone', 'mobile', 'emergency_contact', 'email_primary', 'email_secondary', 'spouse_name', 'spouse_date_of_birth', 'date_of_birth', 'identification_number', 'nationality', 'religion', 'father_name', 'mother_name', 'occupation', 'designation', 'company_name',
	];
	public function investors()
	{
		return $this->hasOne('App\Models\Investor');
	}
}
