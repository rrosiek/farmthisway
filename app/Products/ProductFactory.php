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

        return [
            $ten->getId() => $ten->toArray(),
        ];
    }
}
