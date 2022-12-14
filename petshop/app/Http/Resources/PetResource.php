<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public static $wrap ="pet"; //ovo predstavlja naziv objekta
    public function toArray($request)
    {
       // return parent::toArray($request);
       
        return [
            'id'=>$this->resource->id,
            'vrsta'=>$this->resource->vrsta,
            'rasa'=>$this->resource->rasa,
            'ime'=>$this->resource->ime,
            'owner'=>new OwnerResource($this->resource->owner),
        ];
    }
}
