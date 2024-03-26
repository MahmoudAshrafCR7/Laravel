<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id', 'title_en', 'title_ar', 'description_en', 'description_ar','ord_image','parent_id','created_at','updated_at'
    ];
}


