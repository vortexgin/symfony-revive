<?php

namespace Vortexgin\ReviveBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Vortexgin\ReviveBundle\Annotation as Vortexgin;
use Vortexgin\ReviveBundle\Model\Zones as ModelZones;

/**
 * Zones
 *
 * @ORM\Table(name="zones", indexes={
 *     @ORM\Index(name="ox_zones_zonenameid", columns={"zonename", "zoneid"}),
 *     @ORM\Index(name="ox_zones_affiliateid", columns={"affiliateid"})
 * })
 * @ORM\Entity
 * @Vortexgin\OXTable
 */
class Zones extends ModelZones
{
    /**
     * @ORM\Column(name="zoneid", type="integer", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Affiliates", inversedBy="zones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="affiliateid", referencedColumnName="affiliateid")
     * })
     */
    protected $affiliate;

    /**
     * @ORM\Column(name="zonename", type="string", length=245, nullable=false, options={"default" : ""})
     */
    protected $zoneName;

    /**
     * @ORM\Column(name="description", type="string", length=255, nullable=false, options={"default" : ""})
     */
    protected $description;

    /**
     * @ORM\Column(name="delivery", type="smallint", nullable=false, options={"default" : "0"})
     */
    protected $delivery;

    /**
     * @ORM\Column(name="zonetype", type="smallint", nullable=false, options={"default" : "0"})
     */
    protected $zoneType;

    /**
     * @ORM\Column(name="category", type="text", nullable=false)
     */
    protected $category;

    /**
     * @ORM\Column(name="width", type="smallint", nullable=false, options={"default" : "0"})
     */
    protected $width;

    /**
     * @ORM\Column(name="height", type="smallint", nullable=false, options={"default" : "0"})
     */
    protected $height;

    /**
     * @ORM\Column(name="ad_selection", type="text", nullable=false)
     */
    protected $adSelection;

    /**
     * @ORM\Column(name="chain", type="text", nullable=false)
     */
    protected $chain;

    /**
     * @ORM\Column(name="prepend", type="text", nullable=false)
     */
    protected $prepend;

    /**
     * @ORM\Column(name="append", type="text", nullable=false)
     */
    protected $append;

    /**
     * @ORM\Column(name="appendtype", type="integer", length=1, nullable=false, options={"default" : "0"})
     */
    protected $appendType;

    /**
     * @ORM\Column(name="forceappend", columnDefinition="ENUM('t', 'f') DEFAULT 'f'")
     */
    protected $forceAppend;

    /**
     * @ORM\Column(name="inventory_forecast_type", type="smallint", nullable=false, options={"default" : "0"})
     */
    protected $inventoryForecastType;

    /**
     * @ORM\Column(name="comments", type="text", nullable=true)
     */
    protected $comments;

    /**
     * @ORM\Column(name="cost", type="decimal", precision=10, scale=4, nullable=true)
     */
    protected $cost;

    /**
     * @ORM\Column(name="cost_type", type="smallint", nullable=true)
     */
    protected $costType;

    /**
     * @ORM\Column(name="cost_variable_id", type="string", length=255, nullable=true)
     */
    protected $costVariableId;

    /**
     * @ORM\Column(name="technology_cost", type="decimal", precision=10, scale=4, nullable=true)
     */
    protected $technologyCost;

    /**
     * @ORM\Column(name="technology_cost_type", type="smallint", nullable=true)
     */
    protected $technologyCostType;

    /**
     * @ORM\Column(name="updated", type="datetime", nullable=false)
     */
    protected $updated;

    /**
     * @ORM\Column(name="block", type="integer", nullable=false, options={"default" : "0"})
     */
    protected $block;

    /**
     * @ORM\Column(name="capping", type="integer", nullable=false, options={"default" : "0"})
     */
    protected $capping;

    /**
     * @ORM\Column(name="session_capping", type="integer", nullable=false, options={"default" : "0"})
     */
    protected $sessionCapping;

    /**
     * @ORM\Column(name="what", type="text", nullable=false)
     */
    protected $what;

    /**
     * @ORM\Column(name="rate", columnDefinition="DECIMAL(19,2) DEFAULT NULL")
     */
    protected $rate;

    /**
     * @ORM\Column(name="pricing", type="string", length=50, nullable=false, options={"default" : "CPM"})
     */
    protected $pricing;

    /**
     * @ORM\Column(name="oac_category_id", type="integer", nullable=true)
     */
    protected $oacCategoryId;

    /**
     * @ORM\Column(name="ext_adselection", type="string", length=255, nullable=true)
     */
    protected $extAdSelection;

    /**
     * @ORM\Column(name="show_capped_no_cookie", columnDefinition="tinyint(4) NOT NULL DEFAULT '0'")
     */
    protected $showCappedNoCookie;

    /**
     * @ORM\OneToMany(targetEntity="AdZoneAssoc", mappedBy="zone", cascade={"persist"})
     */
    protected $assocs;

    public function __construct()
    {
        $this->assocs = new ArrayCollection();
    }

}
