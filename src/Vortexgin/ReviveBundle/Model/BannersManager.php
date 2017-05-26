<?php

namespace Vortexgin\ReviveBundle\Model;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\DependencyInjection\ContainerInterface;

class BannersManager extends AbstractManager
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
        $this->repository = $this->em->getRepository('VortexginReviveBundle:Banners');
    }

}
