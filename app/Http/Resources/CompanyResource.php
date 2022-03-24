<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'address' => explode("\n", $this->address),
            'support_email' => $this->support_email,
            'support_phone' => $this->support_phone,
            'foundation' => [
                'date' => $this->foundation_date->format('Y-m-d'),
                'age' => $this->foundation_date->age,
            ],
            'price' => $this->price,
        ];
    }
}
