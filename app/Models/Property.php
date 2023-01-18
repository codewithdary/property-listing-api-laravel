<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'broker_id', 'address', 'listing_type', 'city', 'zip_code', 'description', 'build_year',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function characteristic()
    {
        return $this->hasOne(PropertyCharacteristic::class);
    }
}
