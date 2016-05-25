<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromotionUnit extends Model
{
    protected $table = 'promo_unit';

    protected $fillable = [
        'key', 'name'
    ];

}
