<?php

namespace CodeChallenge\Application\Service\ShoppingCart;

use CodeChallenge\Domain\Model\Product\Product;
use CodeChallenge\Domain\Model\ShoppingCart\ShoppingCart;
class RemoveProduct
{
    private ShoppingCart $shoppingCart;
    public function __construct(ShoppingCart $shoppingCart)
    {
        $this->shoppingCart = $shoppingCart;
    }
    public function execute(Product $product): void
    {
        $this->shoppingCart->removeProduct($product);
    }
}