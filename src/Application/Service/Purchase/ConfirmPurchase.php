<?php

namespace CodeChallenge\Application\Service\Purchase;

use CodeChallenge\Domain\Model\Product\ProductRepository;
use CodeChallenge\Domain\Model\Purchase\Purchase;
use CodeChallenge\Domain\Model\Purchase\PurchaseRepository;
use CodeChallenge\Domain\Model\ShoppingCart\ShoppingCart;

class ConfirmPurchase
{
    private ProductRepository $productRepository;
    private PurchaseRepository $purchaseRepository;
    private Purchase $purchase;

    public function __construct(ProductRepository $productRepository,
                                PurchaseRepository $purchaseRepository,
                                Purchase $purchase
    )
    {
        $this->productRepository = $productRepository;
        $this->purchaseRepository = $purchaseRepository;
        $this->purchase = $purchase;
    }

    public function execute(ShoppingCart $cart): void
    {
        foreach ($cart->getItems() as $productId => $quantity) {
            $product = $this->productRepository->getById($productId);
            if ($product) {
                $this->purchase->addCartItems($product, $quantity);
            }
        }
        $this->purchaseRepository->add($this->purchase);
    }
}