<?php

namespace CodeChallenge\Domain\Model\Product;

use CodeChallenge\Domain\Model\Product\Product;

interface ProductRepository
{
    public function findById(int $productId): ?Product;
}
