<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use App\Http\Resources\CategoryCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            "title" => $this->title,
            // "registeredAt"=> $this->created_at->toDateTimeString(),
            "product" => CategoryCollection::collection($this->prices),
            "totalProduct" => count($this->prices)
        ];
    }
}
