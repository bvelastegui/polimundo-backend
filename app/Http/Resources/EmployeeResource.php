<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
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
            'lastname' => $this->lastname,
            'address' => explode(chr(10), $this->address),
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'birth_date' => $this->birth_date->format('Y-m-d'),
            'hiring_date' => $this->hiring_date->format('Y-m-d'),
            'salary' => $this->salary,
            'company' => new CompanyResource($this->whenLoaded('company'))
        ];
    }
}
