<?php

namespace App\Repository;

use App\Entity\AddUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AddUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method AddUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method AddUser[]    findAll()
 * @method AddUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AddUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AddUser::class);
    }

    // /**
    //  * @return AddUser[] Returns an array of AddUser objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AddUser
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
