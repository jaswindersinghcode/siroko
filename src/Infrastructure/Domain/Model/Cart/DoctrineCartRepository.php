<?php

namespace CodeChallenge\Infrastructure\Domain\Model\Cart;

use CodeChallenge\Domain\Model\Cart\Cart;
use CodeChallenge\Domain\Model\Cart\CartRepository;
use CodeChallenge\Domain\Model\Product\Product;
use CodeChallenge\Domain\Model\Product\ProductRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

class DoctrineCartRepository extends ServiceEntityRepository implements CartRepository
{
    private $entityManager;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $entityManager)
    {
        parent::__construct($registry, Product::class);
        $this->entityManager = $entityManager;
    }
    public function save(Cart $cart): void
    {
        $this->getEntityManager()->persist($cart);
        $this->getEntityManager()->flush();
    }

    public function findById(string $shoppingCartId): array
    {
        $query = $this->entityManager->createQuery(
            'SELECT c FROM ' . Cart::class . ' c WHERE c.shoppingCartId = :shoppingCartId'
        )->setParameter('shoppingCartId', $shoppingCartId);
        return $query->getResult();
    }
}