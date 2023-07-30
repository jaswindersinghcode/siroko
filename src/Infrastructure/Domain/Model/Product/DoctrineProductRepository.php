<?php

namespace CodeChallenge\Infrastructure\Domain\Model\Product;

use CodeChallenge\Domain\Model\Product\Product;
use CodeChallenge\Domain\Model\Product\ProductRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

class DoctrineProductRepository extends ServiceEntityRepository implements ProductRepository
{
    private $entityManager;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $entityManager)
    {
        parent::__construct($registry, Product::class);
        $this->entityManager = $entityManager;
    }
    public function findById($id): ?Product
    {
        return $this->findOneBy(['id'=>$id]);
    }
}