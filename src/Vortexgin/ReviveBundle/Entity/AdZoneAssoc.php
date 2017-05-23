<?php

namespace Vortexgin\ReviveBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vortexgin\ReviveBundle\Annotation as Vortexgin;
use Vortexgin\ReviveBundle\Model\AdZoneAssoc as ModelAdZoneAssoc;

/**
 * AdZoneAssoc
 *
 * @ORM\Table(name="ad_zone_assoc", indexes={
 *     @ORM\Index(name="ox_ad_zone_assoc_zone_id", columns={"zone_id"}),
 *     @ORM\Index(name="ox_ad_zone_assoc_ad_id", columns={"ad_id"})
 * })
 * @ORM\Entity
 * @Vortexgin\OXTable
 */
class AdZoneAssoc extends ModelAdZoneAssoc
{
    /**
     * @ORM\Column(name="ad_zone_assoc_id", type="integer", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Zones", inversedBy="zone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="zone_id", referencedColumnName="zoneid", columnDefinition="mediumint(9) DEFAULT NULL")
     * })
     */
    protected $zone;

    /**
     * @ORM\ManyToOne(targetEntity="Banners", inversedBy="banner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ad_id", referencedColumnName="bannerid", columnDefinition="mediumint(9) DEFAULT NULL")
     * })
     */
    protected $banner;

    /**
     * @ORM\Column(name="priority", columnDefinition="double DEFAULT '0'")
     */
    protected $priority;

    /**
     * @var int
     *
     * @ORM\Column(name="link_type", type="smallint",nullable=false, options={"default":"1"})
     */
    protected $linkType;

    /**
     * @var float
     *
     * @ORM\Column(name="priority_factor", columnDefinition="double DEFAULT '0'")
     */
    protected $priorityFactor;

    /**
     * @var string
     *
     * @ORM\Column(name="to_be_delivered", columnDefinition="tinyint(1) NOT NULL DEFAULT '1'")
     */
    protected $toBeDelivered;

}
