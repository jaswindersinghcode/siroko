<?php

namespace CodeChallenge\Domain\Model\Cart;

use CodeChallenge\Domain\Model\Product\Product;

class Cart
{
    private int $id;
    private string $shoppingCartId;
    private int $product_id;
    private int $quantity;
    private float $at_price;

    public function __construct(Product $product, int $quantity, string $shoppingCartId)
    {
        $this->product_id = $product->id();
        $this->quantity = $quantity;
        $this->shoppingCartId = $shoppingCartId;
        $this->at_price = $product->price();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getShoppingCartId(): string
    {
        return $this->shoppingCartId;
    }

    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->product_id;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return float
     */
    public function getAtPrice(): float
    {
        return $this->at_price;
    }

}