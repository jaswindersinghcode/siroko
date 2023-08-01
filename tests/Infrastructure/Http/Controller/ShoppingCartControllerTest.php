<?php

namespace CodeChallenge\Tests\Infrastructure\Http\Controller;

use CodeChallenge\Application\Service\Cart\CartService;
use CodeChallenge\Application\Service\Product\SearchProduct;
use CodeChallenge\Domain\Model\CartAggregate\CartAggregate;
use CodeChallenge\Domain\Model\Product\Product;
use CodeChallenge\Infrastructure\Domain\Model\Product\DoctrineProductRepository;
use CodeChallenge\Infrastructure\Http\Controller\ShoppingCartController;
use Symfony\Component\HttpFoundation\Request;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ShoppingCartControllerTest extends TestBase
{


    private $searchProductMock;
    private $cartServiceMock;
    private $sessionMock;
    private $controller;

    public function setUp(): void
    {
        $this->searchProductMock = $this->createMock(SearchProduct::class);
        $this->cartServiceMock = $this->createMock(CartService::class);
        $this->sessionMock = $this->createMock(SessionInterface::class);

        $this->controller = new ShoppingCartController(
            $this->searchProductMock,
            $this->cartServiceMock
        );
    }
    public function testAddProducts()
    {
        $this->client->request(
            'POST',
            '/api/add_to_shopping_cart',
            [],
            [],
            [],
            json_encode([
                'productId' => 1,
                'quantity' => 2
            ])
        );
       $this->assertResponseIsOk();
    }
    public function testAddProduct(): void
    {
        $productMock = $this->createMock(Product::class);
        $requestMock = $this->createMock(Request::class);

        $this->searchProductMock->method('execute')
            ->with(123) // Replace with your test productId
            ->willReturn($productMock);

        $this->sessionMock->method('get')
            ->with('cart')
            ->willReturn(new CartAggregate());

        $this->cartServiceMock->expects($this->once())
            ->method('save');

        $this->sessionMock->expects($this->once())
            ->method('remove')
            ->with('cart');

        $this->controller->add($requestMock, $this->sessionMock);
    }
}