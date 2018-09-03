<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class agenda_events extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'date' => $this->date,
            'title' => $this->title,
            'description_nl' => $this->description_nl,
            'description_fr' => $this->description_fr,
            'price' => $this->price,
        ] ;
    }
}
