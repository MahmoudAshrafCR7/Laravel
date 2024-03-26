<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{

    public function toArray($request)
    {
        return [

            "image_url"=>$this->ord_image,
            "ID"=>$this->id,
            "Title in English"=>$this->title_en,
            "Title in Arabic"=>$this->title_ar,
            "Discreption in English"=>$this->description_en,
            "Discreption in Arabic"=>$this->description_ar,
            "Parent ID"=>$this->parent_id,
            "Create Time"=>$this->created_at,


        ];
    }
}
