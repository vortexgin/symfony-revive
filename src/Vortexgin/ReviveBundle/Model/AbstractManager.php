<?php

namespace Vortexgin\ReviveBundle\Model;

use Doctrine\ORM\Query;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\PersistentCollection;
use Doctrine\Common\Cache\ArrayCache;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerInterface;

abstract class AbstractManager
{

    /**
     * @var Container
     */
    protected $container;

    /**
     * @var \Doctrine\Common\Cache\Cache
     */
    protected $cache;

    /**
     * @var EntityManager
     */
    protected $entityManager;

    /**
     * @var mixed
     */
    protected $class;

    /**
     * @param ContainerInterface $container
     * @param mixed $class
     */
    public function __construct(ContainerInterface $container, $class)
    {
        $this->container = $container;
        $this->class = $class;
        $entityManagerName = $this->container->getParameter('vortexgin.revive.entity_manager');
        $this->entityManager = $this->container->get('doctrine.orm.'.$entityManagerName.'_entity_manager');

        $cache = $this->entityManager->getConfiguration()->getHydrationCacheImpl();
        $this->cache = $cache ?: new ArrayCache();
    }

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getEntityManager()
    {
        return $this->entityManager;
    }

    public function isSupportedObject($object)
    {
        if($object instanceof $this->class){
            return true;
        }

        return false;
    }

    public function serialize($object)
    {
        if(!$this->isSupportedObject($object)){
            return false;
        }

        $return = array();
        $reflectionClass = new \ReflectionClass($this->class);
        $properties = $reflectionClass->getProperties(\ReflectionProperty::IS_PUBLIC | \ReflectionProperty::IS_PROTECTED);
        if(count($properties) > 0){
            foreach ($properties as $property){
                $function = 'get'.ucfirst($property->getName());
                if($object->$function() instanceof \DateTime) {
                    $return[$property->getName()] = $object->$function()->format('Y-m-d G:i:s');
                }elseif($object->$function() instanceof PersistentCollection) {
                }elseif(is_object($object->$function())){
                    $reflectionEntity = new \ReflectionClass($object->$function());
                    $nameEntity = $reflectionEntity->getShortName();
                    $managerEntity = $this->container->get('vortexgin.manager.revive.'.strtolower($nameEntity));
                    $return[$property->getName()] = $managerEntity->serialize($object->$function());
                }else{
                    $return[$property->getName()] = $object->$function();
                }
            }
        }

        return $return;
    }

    public function find($id)
    {
        $cacheId = sprintf('%s_%s', $this->getEntityShortName(), $id);
        $object = $this->fetchFromCache($cacheId);

        if (!$object) {
            $object = $this->repository->find($id);
            $this->saveCache($cacheId, $object);
        }

        return $object;
    }

    public function findArray($id)
    {
        $cacheId = sprintf('%s_%s', $this->getEntityShortName(), $id);
        $result = $this->fetchFromCache($cacheId);

        if (!$result) {
            $queryBuilder = $this->repository->createQueryBuilder('o');
            $queryBuilder->andWhere($queryBuilder->expr()->eq('o.id', $id));
            $result = $this->getOneOrNullResult(Query::HYDRATE_ARRAY);

            $this->saveCache($cacheId, $result);
        }

        return $result;
    }

    public function findByArray(array $criteria)
    {
        $queryBuilder = $this->repository->createQueryBuilder('o');
        foreach ($criteria as $key => $value) {
            $queryBuilder->andWhere($queryBuilder->expr()->eq(sprintf('o.%s', $key), sprintf(':%s', $key)));
            $queryBuilder->setParameter($key, $value);
        }

        return $this->getResult($queryBuilder, Query::HYDRATE_ARRAY);
    }

    public function findBy(array $criteria)
    {
        $cacheId = sprintf('%s_%s', $this->getEntityShortName(), serialize($criteria));
        $result = $this->fetchFromCache($cacheId);
        if ($result) {
            $result = $this->repository->findBy($criteria);
            $this->saveCache($cacheId, $result);
        }

        return $result;
    }

    public function findOneBy(array $criteria)
    {
        $cacheId = sprintf('%s_%s', $this->getEntityShortName(), serialize($criteria));
        $result = $this->fetchFromCache($cacheId);
        if ($result) {
            $result = $this->repository->findOneBy($criteria);
            $this->saveCache($cacheId, $result);
        }

        return $result;
    }

    protected function getResult($queryBuilder, $hydration = Query::HYDRATE_OBJECT, $useCache = true, $lifetime = 5)
    {
        $query = $queryBuilder->getQuery();
        $query->useResultCache($useCache, $lifetime, sprintf('%s_%s', $this->class, serialize($query->getParameters())));
        $query->useQueryCache($useCache);
        $result = $query->getResult($hydration);

        return $result;
    }

    protected function getOneOrNullResult($queryBuilder, $hydration = Query::HYDRATE_OBJECT, $useCache = true, $lifetime = 5)
    {
        $query = $queryBuilder->getQuery();
        $query->useResultCache($useCache, $lifetime, sprintf('%s_%s', $this->class, serialize($query->getParameters())));
        $query->useQueryCache($useCache);
        $result = $query->getOneOrNullResult($hydration);

        return $result;
    }

    protected function getSingleScalarResult(QueryBuilder $queryBuilder, $useCache = true, $lifetime = 5)
    {
        $query = $queryBuilder->getQuery();
        $query->useResultCache($useCache, $lifetime, sprintf('%s_%s', $this->class, serialize($query->getParameters())));
        $query->useQueryCache($useCache);
        $result = $query->getSingleScalarResult();

        return $result;
    }

    protected function getEntityShortName()
    {
        $reflectionClass = new \ReflectionClass($this->class);

        return $reflectionClass->getShortName();
    }

    protected function generateCacheKey($value)
    {
        return md5($value);
    }

    protected function saveCache($id, $object, $lifetime = 2700)
    {
        $this->cache->save($this->generateCacheKey($id), $object, $lifetime);
    }

    protected function fetchFromCache($id)
    {
        $object = $this->cache->fetch($this->generateCacheKey($id));

        if (! $object) {
            return null;
        }

        if (is_object($object)) {
            return $this->entityManager->merge($object);
        }

        return $object;
    }

    protected function isExistCache($id)
    {
        return $this->cache->contains($this->generateCacheKey($id));
    }

    protected function deleteCache($id)
    {
        $this->cache->delete($this->generateCacheKey($id));
    }

}
