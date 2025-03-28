<?php

namespace App\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Offer;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * @extends ServiceEntityRepository<Product>
 *
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OfferRepository extends ServiceEntityRepository
{
	public function __construct(ManagerRegistry $registry, private ParameterBagInterface $parameterBag)
	{
		parent::__construct($registry, Offer::class);
	}

	public function getOffersByMember(int $memberId):Query
	{
		return $this->createQueryBuilder('offer')
				->where('offer.member = :member_id')
				->setParameter('member_id', $memberId)
	           	->getQuery()
		;
	}

	//    /**
	//     * @return Product[] Returns an array of Offers objects
	//     */
	//    public function findByExampleField($value): array
	//    {
	//        return $this->createQueryBuilder('p')
	//            ->andWhere('p.exampleField = :val')
	//            ->setParameter('val', $value)
	//            ->orderBy('p.id', 'ASC')
	//            ->setMaxResults(10)
	//            ->getQuery()
	//            ->getResult()
	//        ;
	//    }

	//    public function findOneBySomeField($value): ?Offer
	//    {
	//        return $this->createQueryBuilder('p')
	//            ->andWhere('p.exampleField = :val')
	//            ->setParameter('val', $value)
	//            ->getQuery()
	//            ->getOneOrNullResult()
	//        ;
	//    }
}
