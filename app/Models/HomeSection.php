<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSection extends Model
{
    public $table='home_section';
    protected $fillable = ['parent_section_name','sectionName','content','section_type','content_type','title','description','email'];
}
