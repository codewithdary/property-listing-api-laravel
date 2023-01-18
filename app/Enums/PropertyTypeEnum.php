<?php

namespace App\Enums;

enum PropertyTypeEnum : string {
    case SINGLE = 'Single-family Home';
    case TOWNHOUSE = 'Townhouse';
    case MULTIFAMILY = 'Multi-family Home';
    case BUNGALOW = 'Bungalow';
}
