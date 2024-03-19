<?php

namespace App\Repository;

use App\Entity\SeriesDirector;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SeriesDirector>
 *
 * @method SeriesDirector|null find($id, $lockMode = null, $lockVersion = null)
 * @method SeriesDirector|null findOneBy(array $criteria, array $orderBy = null)
 * @method SeriesDirector[]    findAll()
 * @method SeriesDirector[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SeriesDirectorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SeriesDirector::class);
    }

    //    /**
    //     * @return SeriesDirector[] Returns an array of SeriesDirector objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('s.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?SeriesDirector
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
