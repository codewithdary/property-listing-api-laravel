<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BrokersResource extends JsonResource
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
            'id' => (string) $this->id,
            'type' => 'Brokers',
            'attributes' => [
                'name' => $this->name,
                'address' => $this->address,
                'city' => $this->city,
                'zip_code' => $this->zip_code,
                'phone_number' => $this->phone_number,
                'logo_path' => $this->logo_path
            ],
        ];
    }
}
