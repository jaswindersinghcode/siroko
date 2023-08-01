<?php

namespace CodeChallenge\Application\Service\Cart;

use CodeChallenge\Domain\Model\Cart\Cart;
use CodeChallenge\Domain\Model\Cart\CartRepository;
use CodeChallenge\Domain\Model\CartAggregate\CartAggregate;
use CodeChallenge\Domain\Model\Product\ProductRepository;

class CartService
{
    private $cartRepository;
    private $productRepository;
    public $confirmedCart = false;

    public function __construct(CartRepository $cartRepository, ProductRepository $productRepository)
    {
        $this->cartRepository = $cartRepository;
        $this->productRepository = $productRepository;
    }
    public function save(CartAggregate $shoppingCart): void
    {
        foreach ($shoppingCart->getItems() as $productId => $quantity) {
            $id = $shoppingCart->id();
            $product = $this->productRepository->findById($productId);
            if ($product) {
                $cart = new Cart($product, $quantity, $id);
                //$this->purchase->addCartItems($product, $quantity);
                $this->cartRepository->save($cart);
            }
        }
        $this->confirmedCart = true;
    }

    public function getCartByShoppingCartId(string $shoppingCartId): array
    {
        return $this->cartRepository->findById($shoppingCartId);
    }
}