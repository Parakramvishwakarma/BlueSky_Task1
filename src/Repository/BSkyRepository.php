<?php

namespace App\Repository;

use App\Entity\BSky;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BSky|null find($id, $lockMode = null, $lockVersion = null)
 * @method BSky|null findOneBy(array $criteria, array $orderBy = null)
 * @method BSky[]    findAll()
 * @method BSky[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BSkyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BSky::class);
    }

    // /**
    //  * @return BSky[] Returns an array of BSky objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BSky
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
