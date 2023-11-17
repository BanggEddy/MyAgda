<?php

namespace App\Repository;

use App\Entity\Contacttest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Contacttest>
 *
 * @method Contacttest|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contacttest|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contacttest[]    findAll()
 * @method Contacttest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContacttestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Contacttest::class);
    }

//    /**
//     * @return Contacttest[] Returns an array of Contacttest objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Contacttest
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
