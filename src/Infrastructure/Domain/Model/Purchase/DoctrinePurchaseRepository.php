<?php

namespace CodeChallenge\Infrastructure\Domain\Model\Purchase;

use CodeChallenge\Domain\Model\Product\Product;
use CodeChallenge\Domain\Model\Product\ProductRepository;
use CodeChallenge\Domain\Model\Purchase\Purchase;
use CodeChallenge\Domain\Model\Purchase\PurchaseRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

class DoctrinePurchaseRepository extends ServiceEntityRepository implements PurchaseRepository
{
    private $entityManager;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $entityManager)
    {
        parent::__construct($registry, Product::class);
        $this->entityManager = $entityManager;
    }
    public function add(Purchase $purchase): bool
    {
        $this->getEntityManager()->persist($purchase);
        $this->getEntityManager()->flush();
        return true;
    }
}