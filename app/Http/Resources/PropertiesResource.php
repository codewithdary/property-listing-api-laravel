<?php

namespace App\Http\Resources;

use App\Models\Broker;
use Illuminate\Http\Resources\Json\JsonResource;

class PropertiesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $broker = Broker::find($this->broker_id);

        return [
            'id' => (string)$this->id,
            'type' => 'Properties',
            'attributes' => [
                'addresss' => $this->address,
                'listing_type' => $this->listing_type,
                'city' => $this->city,
                'zip_code' => $this->zip_code,
                'description' => $this->description,
                'build_year' => $this->build_year,
            ],
            'relationships' => [
                'characteristics' => [
                    new CharacteristicsResource($this->characteristic)
                ],
                'broker' => [
                    'name' => $broker->name,
                    'address' => $broker->address,
                    'phone_number' => $broker->phone_number,
                ]
            ],
        ];
    }
}
