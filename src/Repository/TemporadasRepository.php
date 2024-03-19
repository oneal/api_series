<?php

namespace App\Repository;

use App\Entity\Temporadas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Temporadas>
 *
 * @method Temporadas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Temporadas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Temporadas[]    findAll()
 * @method Temporadas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TemporadasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Temporadas::class);
    }

    //    /**
    //     * @return Temporadas[] Returns an array of Temporadas objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('t.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Temporadas
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
