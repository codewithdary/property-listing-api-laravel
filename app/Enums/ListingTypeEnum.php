<?php

namespace App\Enums;

enum ListingTypeEnum : string {
    case OPEN = 'Open Listing';
    case SELL = 'Sell Listing';
    case EXCLUSIVE = 'Exclusive Agency Listing';
    case NET = 'Net Listing';
}
