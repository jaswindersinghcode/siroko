<?php

namespace CodeChallenge\Domain\Model\Cart;

use CodeChallenge\Domain\Model\Product\Product;

interface CartRepository
{
    public function save(Cart $cart): void;

    public function findById(string $shoppingCartId): array;
}