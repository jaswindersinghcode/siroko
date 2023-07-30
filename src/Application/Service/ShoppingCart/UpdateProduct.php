<?php

namespace CodeChallenge\Application\Service\ShoppingCart;

use CodeChallenge\Domain\Model\Product\Product;
use CodeChallenge\Domain\Model\ShoppingCart\ShoppingCart;
class UpdateProduct
{
    private ShoppingCart $shoppingCart;
    public function __construct(ShoppingCart $shoppingCart)
    {
        $this->shoppingCart = $shoppingCart;
    }
    public function execute(Product $product, int $quantity = 1): void
    {
        $this->shoppingCart->updateProduct($product, $quantity);
    }
}