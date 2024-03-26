<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sections extends Model
{
    protected $fillable =[

        "id" ,"name_en","name_ar","descripton_en","descripton_ar","status","sec_image","created_at","updated_at"

    ];}
