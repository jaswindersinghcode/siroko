<?php

namespace CodeChallenge\Domain\Model\ShoppingCart;

use CodeChallenge\Domain\Model\Product\Product;

class CartItem
{
    private Product $product;
    private int $quantity;
    // Add more properties like price, total price, etc. if needed

    public function __construct(Product $product, int $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }
}