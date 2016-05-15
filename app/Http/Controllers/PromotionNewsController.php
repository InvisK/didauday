<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PromotionNews;

class PromotionNewsController extends Controller
{
    public function getList(){
        return PromotionNews::take(4)->get();
    }
}
