<?php

namespace App\Products;

use InvalidArgumentException;

class ProductFactory
{
    /**
     * Grab a new instance of desired product
     *
     * @param  string $week
     * @return \App\Products\ProductContract
     */
    public static function make($week)
    {
        switch ($week) {
            case '10':
                return new TenWeek();
                break;
            case '15':
                return new FifteenWeek();
                break;
            case '20':
                return new TwentyWeek();
                break;
            default:
                throw new InvalidArgumentException($week . ' is not a valid product type.');
        }
    }

    /**
     * Get all the products in an array, good for listing
     *
     * @return array
     */
    public static function all()
    {
        $ten = new TenWeek();
        $fifteen = new FifteenWeek();
        $twenty = new TwentyWeek();

        return [
            $ten->getId() => $ten->toArray(),
            $fifteen->getId() => $fifteen->toArray(),
            $twenty->getId() => $twenty->toArray(),
        ];
    }
}
