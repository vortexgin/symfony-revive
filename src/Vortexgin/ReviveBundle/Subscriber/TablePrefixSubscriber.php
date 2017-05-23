<?php

namespace Vortexgin\ReviveBundle\Subscriber;

use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LoadClassMetadataEventArgs;
use Doctrine\Common\Annotations\AnnotationReader;
use Vortexgin\ReviveBundle\Annotation\OXTable;

class TablePrefixSubscriber implements EventSubscriber
{
    protected $prefix = '';

    public function __construct($prefix)
    {
        $this->prefix = (string) $prefix;
    }

    public function getSubscribedEvents()
    {
        return array('loadClassMetadata');
    }

    public function loadClassMetadata(LoadClassMetadataEventArgs $args)
    {
        $classMetadata = $args->getClassMetadata();

        // Get class annotations
        $reader = new AnnotationReader();
        $classAnnotations = $reader->getClassAnnotations($classMetadata->getReflectionClass());

        // Search for OXTable annotation
        $found = false;
        foreach ($classAnnotations as $classAnnotation) {
            if ($classAnnotation instanceof OXTable) {
                $found = true;
                break;
            }
        }

        // Only apply to classes having OXTable annotation
        if (!$found) {
            return;
        }

        $classMetadata->setPrimaryTable(array(
            'name' => $this->prefix . $classMetadata->getTableName()
        ));

        // set table prefix to associated entity
        // TODO: make sure prefix won't apply to user table
        foreach ($classMetadata->associationMappings as &$mapping) {
            if (isset($mapping['joinTable']) && !empty($mapping['joinTable'])) {
                $mapping['joinTable']['name'] = $this->prefix . $mapping['joinTable']['name'];
            }
        }
    }
}
