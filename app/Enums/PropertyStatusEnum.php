<?php

namespace App\Enums;

enum PropertyStatusEnum : string {
    case SOLD = 'Sold';
    case SALE = 'On Sale';
    case HOLD = 'On Hold';
}

