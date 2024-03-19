<?php

namespace App\Repository;

use App\Entity\Actores;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Actores>
 *
 * @method Actores|null find($id, $lockMode = null, $lockVersion = null)
 * @method Actores|null findOneBy(array $criteria, array $orderBy = null)
 * @method Actores[]    findAll()
 * @method Actores[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActoresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Actores::class);
    }

    //    /**
    //     * @return Actores[] Returns an array of Actores objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('a.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Actores
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
