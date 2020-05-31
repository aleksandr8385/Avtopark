<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class AvtoCars extends Model
{
    protected $fillable 
        = [
            'number',
            'name_driver',
            'park_id',
            'user_id'
        ];

    public function parks()
    {
        return $this->belongsTo(AvtoPark::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
