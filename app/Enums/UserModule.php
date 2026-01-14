<?php

namespace App\Enums;

enum UserModule: string
{
    case FLIGHT = 'flight';
    case HOTEL = 'hotel';
    case STAY = 'stay';
    case CAR_RENTAL = 'car_rental';
    case tours = 'tour';

    // public static function values(): array
    // {
    //     return array_map(fn ($module) => $module->value);
    // }

    public function label(): string
    {
        return match ($this) {
            self::FLIGHT => 'Flight',
            self::HOTEL => 'Hotel',
            self::STAY => 'Stay',
            self::CAR_RENTAL => 'Car Rental',
        };
    }
}
