<?php
namespace AppBundle\Model;
use Symfony\Component\Validator\Constraints as Assert;

class Product
{
    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=40)
     */
    public $name;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min=1)
     */

    private $price;

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = (float)$price;
    }

}