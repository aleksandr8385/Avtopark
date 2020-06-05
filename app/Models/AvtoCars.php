<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class AvtoCars extends Model
{
    protected $fillable 
        = [
            'id',
            'number',
            'name_driver',
                   
        ];

    public function parks()
    {
    
        return $this->belongsToMany('App\Models\AvtoPark');
            
    }

    public static function carsNames()
    {
     
        return AvtoCars::all();
        
    }

  
}
