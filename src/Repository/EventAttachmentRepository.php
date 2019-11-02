<?php

namespace App\Repository;

use App\Entity\EventAttachment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EventAttachment|null find($id, $lockMode = null, $lockVersion = null)
 * @method EventAttachment|null findOneBy(array $criteria, array $orderBy = null)
 * @method EventAttachment[]    findAll()
 * @method EventAttachment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EventAttachmentRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, EventAttachment::class);
    }

    // /**
    //  * @return EventAttachment[] Returns an array of EventAttachment objects
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
    public function findOneBySomeField($value): ?EventAttachment
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