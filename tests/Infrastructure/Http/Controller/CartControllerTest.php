<?php

namespace CodeChallenge\Tests\Infrastructure\Http\Controller;

class CartControllerTest extends TestBase
{

    public function setUp(): void
    {
        parent::setUp();
    }
    public function testAddProducts()
    {
        $this->client->request(
            'POST',
            '/api/cart/add',
            [],
            [],
            [],
            json_encode([
                'productId' => 1,
                'quantity' => 2
            ])
        );
       $this->assertResponseIsOk();
       $cart =  $this->responseObject()->data;
       $cartItems = $cart->cart_items;
       $quantity = $cartItems->{"1"};
       $this->assertEquals(2, $quantity);
    }
    public function testUpdateProducts()
    {
        $this->client->request(
            'PUT',
            '/api/cart/update',
            [],
            [],
            [],
            json_encode([
                'productId' => 2,
                'quantity' => 25
            ])
        );
        $this->assertResponseIsOk();
        $cart =  $this->responseObject()->data;
        $cartItems = $cart->cart_items;
        $quantity = $cartItems->{"2"};
        $this->assertEquals(25, $quantity);
    }
    public function testDeleteProducts()
    {
        $this->client->request(
            'DELETE',
            '/api/cart/delete',
            [],
            [],
            [],
            json_encode([
                'productId' => 2
            ])
        );
        $this->assertResponseIsOk();
        $cart = $this->responseObject()->data;
        $cartItems = (array) $cart->cart_items;
        $this->assertNotContains(25, $cartItems);
    }
    public function testCountProductsInCart()
    {
        //delete the items in cart, so we can have empty
        $this->client->request(
            'DELETE',
            '/api/cart/delete',
            [],
            [],
            [],
            json_encode([
                'productId' => 1
            ])
        );
        //add a product to cart with quantity 2, so the total products should be 2
        $this->client->request(
            'POST',
            '/api/cart/add',
            [],
            [],
            [],
            json_encode([
                'productId' => 1,
                'quantity' => 2
            ])
        );

        $this->client->request(
            'GET',
            '/api/cart/count',
            [],
            [],
            [],
            json_encode([
            ])
        );
        $this->assertResponseIsOk();
        $cart = $this->responseObject()->data;
        $number_of_products = $cart->number_of_products;
        $this->assertEquals(2, $number_of_products);
    }
    public function testConfirmPurchase()
    {
        $this->client->request(
            'POST',
            '/api/cart/confirm',
            [],
            [],
            [],
            json_encode([
            ])
        );
        $this->assertResponseIsOk();
        $cart = $this->responseObject()->data;
        $cartItems = (array) $cart->cart_items;
        $this->assertContains(2, $cartItems);
    }
}