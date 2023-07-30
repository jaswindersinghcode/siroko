<?php

namespace CodeChallenge\Domain\Model\Purchase;

use CodeChallenge\Domain\Model\Product\Product;
use DateTime;

class Purchase
{
    private int $id;
    private DateTime $created;
    private array $items;
    private float $price;
    public function __construct()
    {
        $this->created = new DateTime();
        $this->items = [];
        $this->price = 0;
    }
    public function addCartItems(Product $product, int $quantity): void
    {
        $this->items[] = ['product' => $product, 'quantity' => $quantity];
    }
}