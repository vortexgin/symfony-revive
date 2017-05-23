<?php

namespace Vortexgin\ReviveBundle\Model;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\DependencyInjection\Container;

class ClientsManager extends AbstractManager
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
        $this->repository = $this->em->getRepository('VortexginReviveBundle:Clients');
    }

}
