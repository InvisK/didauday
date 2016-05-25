<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PromotionUnit;

class LocationCodeController extends Controller
{
    public function getPromotionUnitList(){
        return PromotionUnit::all();
    }
}
