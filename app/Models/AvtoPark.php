<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AvtoPark extends Model
{
    // use SoftDeletes;
    
    protected $fillable 
        = [
            'title',
            'address',
            'schedule',
            'avto_id'
        ];
    
        // public function parks()
        // {
        //     return $this->hasMany('App\Models\AvtoCars');
        // }
}
