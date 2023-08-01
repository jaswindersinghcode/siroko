<?php

namespace CodeChallenge\Tests\Domain\Model\CartAggregate;

use CodeChallenge\Domain\Model\CartAggregate\CartAggregate;
use CodeChallenge\Domain\Model\Product\Product;
use CodeChallenge\Tests\Infrastructure\Http\Controller\TestBase;

class CartAggregateTest extends TestBase
{
    public function testAddCartItem()
    {
        $shoppingCart = new CartAggregate();
        $product = new Product(1, "Camiseta", 10);
        $this->assertCount(0, $shoppingCart->getItems());
        $shoppingCart->addProduct($product, 2);
        $this->assertCount(1, $shoppingCart->getItems());
        $this->assertEquals(2, $shoppingCart->getItems()[1]);
    }
    public function testDeleteCartItem()
    {
        $shoppingCart = new CartAggregate();
        $product1 = new Product(1, "Camiseta", 10);
        $product2 = new Product(2, "Pentalon", 20);
        $shoppingCart->addProduct($product1, 1);
        $shoppingCart->addProduct($product2, 3);

        $this->assertCount(2, $shoppingCart->getItems());

        $shoppingCart->deleteProduct($product1);
        $this->assertCount(1, $shoppingCart->getItems());
    }

    public function testUpdateCartItem()
    {
        $shoppingCart = new CartAggregate();
        $product = new Product(2, "Camiseta", 10);

        $shoppingCart->addProduct($product, 2);

        $this->assertCount(1, $shoppingCart->getItems());
        $shoppingCart->updateProduct($product, 5);

        $this->assertCount(1, $shoppingCart->getItems());
        $updatedCartItem = $shoppingCart->getItems()[2];
        $this->assertEquals(5, $updatedCartItem);

    }
}