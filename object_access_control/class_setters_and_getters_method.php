<?php


class Product
{
    private $price;

    /**
     * @return mixed
     */
    public function get_price()
    {
        return '$' .  number_format($this->price, 2);
    }

    /**
     * @param mixed $price
     */
    public function set_price($price)
    {
        $no_format = preg_replace('/[\$,]/', '', $price);
        $float = floatval($no_format);

        if ($float <= 0)
        {
            trigger_error('Price must be greater than zero.', E_USER_NOTICE);
            return;
        }

        $this->price = $price;
    }
}