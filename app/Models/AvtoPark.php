<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AvtoPark extends Model
{
    // use SoftDeletes;
    
    protected $fillable 
        = [
            'id',
            'title',
            'address',
            'schedule',
     
         
            
        ];
    
        public function cars()
    {
     
       
        return $this->belongsToMany('App\Models\AvtoCars');
        
    }
  
}
