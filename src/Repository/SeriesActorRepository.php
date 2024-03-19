<?php

namespace App\Repository;

use App\Entity\SeriesActor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SeriesActor>
 *
 * @method SeriesActor|null find($id, $lockMode = null, $lockVersion = null)
 * @method SeriesActor|null findOneBy(array $criteria, array $orderBy = null)
 * @method SeriesActor[]    findAll()
 * @method SeriesActor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SeriesActorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SeriesActor::class);
    }

    //    /**
    //     * @return SeriesActor[] Returns an array of SeriesActor objects
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

    //    public function findOneBySomeField($value): ?SeriesActor
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
