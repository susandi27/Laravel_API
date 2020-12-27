<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BrandResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'brand_id' => $this->id,
            'brand_name' => $this->name,
            'photo' => url($this->photo),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
