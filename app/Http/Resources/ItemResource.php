<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
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
            'item_id' => $this->id,
            'item_codeno' => $this->name,
            'item_price' => $this->price,
            'item_discount' => $this->discount,
            'item_description' => $this->description,
            'item_brandid' => $this->brandid,
            'item_subcategoryid' => $this->subcategoryid,
            'photo' => url($this->photo),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
