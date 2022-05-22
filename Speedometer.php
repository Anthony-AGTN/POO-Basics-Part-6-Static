<?php

class Speedometer
{
    private const MULTIPLIER_KM_TO_MILES = 0.621;
    private const MULTIPLIER_MILES_TO_KM = 1.609;


    public static function convertKmToMiles(int $km): float
    {
        return $km * self::MULTIPLIER_KM_TO_MILES;
    }

    public static function convertMilesToKm(int $miles): float
    {
        return $miles * self::MULTIPLIER_MILES_TO_KM;
    }
}
