<?php

namespace App\Repository;

use App\Entity\Eval6;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Eval6|null find($id, $lockMode = null, $lockVersion = null)
 * @method Eval6|null findOneBy(array $criteria, array $orderBy = null)
 * @method Eval6[]    findAll()
 * @method Eval6[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Eval6Repository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Eval6::class);
    }

    // /**
    //  * @return Eval6[] Returns an array of Eval6 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Eval6
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
