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
    public function toArray(Request $request)
    {
        $data = parent::toArray($request);
        $data['price_format'] = number_format($this->price);
        $data['category_name']  = $this->category->name ?? '';
        return $data;
    }
}
