<?php

namespace App\Repository;

use App\Entity\PhpBlock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PhpBlock|null find($id, $lockMode = null, $lockVersion = null)
 * @method PhpBlock|null findOneBy(array $criteria, array $orderBy = null)
 * @method PhpBlock[]    findAll()
 * @method PhpBlock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PhpBlockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PhpBlock::class);
    }

    // /**
    //  * @return PhpBlock[] Returns an array of PhpBlock objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PhpBlock
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
