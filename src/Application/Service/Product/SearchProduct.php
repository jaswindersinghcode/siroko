<?php

namespace CodeChallenge\Application\Service\Product;

use CodeChallenge\Domain\Model\Product\Product;
use CodeChallenge\Domain\Model\Product\ProductRepository;

class SearchProduct
{
    private ProductRepository $productRepository;
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function execute(int $productId): ?Product
    {
        return $this->productRepository->findById($productId);
    }
}