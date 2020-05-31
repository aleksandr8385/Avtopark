<?php

namespace App\Http\Controllers\Avto\Admin;

use App\Http\Controllers\Avto\BaseController as GuestBaseController;

// use App\Models\AvtoPark;
use Illuminate\Http\Request;

abstract class BaseController extends  GuestBaseController
{
   public function __construct()
   {
       //Иницилизация общих моментов для админки
   }

}
