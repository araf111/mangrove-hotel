<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvestorShare extends Model
{
    protected $guarded = ['id'];

    public function payments()
    {
        return $this->hasMany(InvestorSharePayment::class, 'investor_share_id');
    }
}
