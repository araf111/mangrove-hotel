<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    protected $guarded = ['id'];

    protected $fillable = ['project_id', 'grand_total', 'booking_amount', 'installment_amount','installment_number','continue'];

    public function project(){
    	return $this->belongsTo('App\Models\Project');
    }
}
