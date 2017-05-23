<?php

namespace Vortexgin\ReviveBundle\Model;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\DependencyInjection\Container;

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
    public function __construct(Container $container)
    {
        parent::__construct($container);

        $this->em         = $this->getEntityManager();
        $this->repository = $this->em->getRepository('VortexginReviveBundle:AdZoneAssoc');
    }

    public function findActiveZones()
    {
        $query = $this->repository->createQueryBuilder('assoc')
            ->select('zones.id, zones.zoneName, zones.width, zones.height, banners')
            ->innerJoin('assoc.zone', 'zones')
            ->innerJoin('assoc.banner', 'banners')
            ->innerJoin('banners.campaign', 'campaigns')
            ->where('assoc.toBeDelivered = :toBeDelivered')
            ->andWhere('banner.status = :bannerStatus')
            ->andWhere('campaigns.activateTime = :campaignActivateTime')
            ->setParameter('toBeDelivered', 1)
            ->setParameter('bannerStatus', 1)
            ->setParameter('campaignActivateTime', date('Y-m-d G:i:s'));

        return $this->getResult($query, Query::HYDRATE_OBJECT, true, 21600);
    }

}
