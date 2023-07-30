<?php

namespace CodeChallenge\Domain\Model\ShoppingCart;

use CodeChallenge\Domain\Model\Product\Product;

class ShoppingCart
{
    private array $items = [];
    public function __construct()
    {
        $this->items = [];
    }

    public function addProduct(Product $product, int $quantity = 1): void
    {
        $productId = $product->Id();
        if (isset($this->items[$productId])) {
            $this->items[$productId] += $quantity;
        } else {
            $this->items[$productId] = $quantity;
        }
    }

    public function updateProduct(Product $product, int $quantity): void
    {
        $productId = $product->Id();

        if ($quantity <= 0) {
            $this->removeProduct($product);
        } else {
            if (isset($this->items[$productId])) {
                $this->items[$productId] = $quantity;
            } else {
                // Product not in cart, add it with the given quantity
                $this->items[$productId] = $quantity;
            }
        }
    }

    public function removeProduct(Product $product): void
    {
        $productId = $product->Id();

        if (isset($this->items[$productId])) {
            unset($this->items[$productId]);
        }
    }

    public function getTotalProducts(): int
    {
        $totalProducts = 0;

        foreach ($this->items as $quantity) {
            $totalProducts += $quantity;
        }

        return $totalProducts;
    }

    public function getItems(): array
    {
        return $this->items;
    }
}