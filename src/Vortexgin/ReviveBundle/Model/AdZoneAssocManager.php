<?php

namespace Vortexgin\ReviveBundle\Model;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\DependencyInjection\Container;
use Doctrine\ORM\Query;

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
     * @param EntityManager $em
     */
    public function __construct(Container $container, $class)
    {
        parent::__construct($container, $class);

        $this->em         = $this->getEntityManager();
        $this->repository = $this->em->getRepository('VortexginReviveBundle:AdZoneAssoc');
    }

    public function findActiveZones()
    {
        $query = $this->repository->createQueryBuilder('assoc')
            ->innerJoin('assoc.zone', 'zones')
            ->innerJoin('assoc.banner', 'banners')
            ->innerJoin('banners.campaign', 'campaigns')
            ->where('assoc.toBeDelivered = :toBeDelivered')
            ->andWhere('banners.status = :bannerStatus')
            ->setParameter('toBeDelivered', 1)
            ->setParameter('bannerStatus', 1)
            ->orderBy('id ASC')
        ;

        return $this->getResult($query, Query::HYDRATE_OBJECT, true, 21600);
    }

}
