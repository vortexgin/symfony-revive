<?php

namespace Vortexgin\ReviveBundle\Model;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;
use Symfony\Component\DependencyInjection\ContainerInterface;

class AdZoneAssocManager extends AbstractManager
{
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @var EntityRepository
     */
    protected $repository;

    /**
     * Constructor.
     *
     * @param ContainerInterface $container
     * @param mixed $class
     */
    public function __construct(ContainerInterface $container, $class)
    {
        parent::__construct($container, $class);

        $this->em         = $this->getEntityManager();
        $this->repository = $this->em->getRepository('VortexginReviveBundle:AdZoneAssoc');
    }

    public function findActiveZones()
    {
        $query = $this->repository->createQueryBuilder('assoc')
            ->innerJoin('assoc.zone', 'zones')
            ->innerJoin('zones.affiliate', 'affiliates')
            ->innerJoin('assoc.banner', 'banners')
            ->innerJoin('banners.campaign', 'campaigns')
            ->where('assoc.toBeDelivered = :toBeDelivered')
            ->andWhere('banners.status = :bannerStatus')
            ->andWhere('affiliates.id = :affiliateId')
            ->setParameter('toBeDelivered', 1)
            ->setParameter('bannerStatus', 1)
            ->setParameter('affiliateId', 4)
            ->orderBy('assoc.id', 'ASC')
        ;

        return $this->getResult($query, Query::HYDRATE_OBJECT, true, 21600);
    }

}
