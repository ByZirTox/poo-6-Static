<?php

class Speedometer
{
    private const CONVERSION_MILES = 0.621;
    private const CONVERSION_KM = 1.621;

    public static function convertToMiles(int $km)
    {
        return $km * self::CONVERSION_MILES;
    }

    public static function convertToKm(int $miles)
    {
        return $miles * self::CONVERSION_KM;
    }
}


echo Speedometer::convertToMiles('10'); ?> <br>

<?= Speedometer::convertToKm('10');
