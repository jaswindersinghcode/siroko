<?php

namespace CodeChallenge\Tests\Infrastructure\Http\Controller;

use CodeChallenge\Application\Service\Doctor\DoctorSlotsSynchronizer;
use CodeChallenge\Application\Service\Doctor\DoctorSynchronizerRequest;
use CodeChallenge\Application\Service\Product\SearchProduct;
use CodeChallenge\Application\Service\Slot\SlotSynchronizerRequest;
use CodeChallenge\Infrastructure\Domain\Model\Doctor\InMemoryDoctorRepository;
use CodeChallenge\Infrastructure\Domain\Model\Product\DoctrineProductRepository;
use CodeChallenge\Infrastructure\Domain\Model\Slot\InMemorySlotRepository;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class ShoppingCartControllerTest extends TestBase
{
    public function setUp(): void
    {
        parent::setUp();
    }
    public function testAddProducts()
    {
        $this->client->request(
            'POST',
            '/api/add_to_shopping_cart/2/1',
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
}