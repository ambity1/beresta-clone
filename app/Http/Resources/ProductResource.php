<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'category'=> $this->category->name,
            'material'=> $this->material->name,
            'height' => $this->height,
            'width'=> $this->width,
            'length'=> $this->length,

            'description' => $this->description,
            'image'=> $this->image,
            'constrictive'=> $this->constrictive,
            'roof' => $this->roof,
            'processing'=> $this->processing,
            'price'=> $this->price,
        ];
    }
}
