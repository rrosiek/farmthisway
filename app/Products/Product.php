<?php

namespace App\Products;

abstract class Product
{
    /**
     * Get the product id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the product label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Get the product price
     *
     * @return int
     */
    public function getPrice()
    {
        return static::price;
    }

    /**
     * Get the price in currency format
     * 
     * @return float
     */
    public function getPriceFormatted()
    {
        return sprintf('$%G.00', static::price / 100);
    }

    /**
     * Convert properties to array
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'id' => $this->id,
            'label' => $this->label,
            'price' => static::price,
            'priceFormatted' => $this->getPriceFormatted(),
        ];
    }
}