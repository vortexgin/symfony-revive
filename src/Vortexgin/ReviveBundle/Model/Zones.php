<?php

namespace Vortexgin\ReviveBundle\Model;

class Zones implements ZonesInterface
{

    /**
     * @var int $id
     */
    protected $id;

    /**
     * @var Affiliates $affiliate
     */
    protected $affiliate;

    /**
     * @var string $zoneName
     */
    protected $zoneName;

    /**
     * @var string $description
     */
    protected $description;

    /**
     * @var int $delivery
     */
    protected $delivery;

    /**
     * @var int $zoneType
     */
    protected $zoneType;

    /**
     * @var string $category
     */
    protected $category;

    /**
     * @var int $width
     */
    protected $width;

    /**
     * @var int $height
     */
    protected $height;

    /**
     * @var string $adSelection
     */
    protected $adSelection;

    /**
     * @var string $chain
     */
    protected $chain;

    /**
     * @var string $prepend
     */
    protected $prepend;

    /**
     * @var string $append
     */
    protected $append;

    /**
     * @var string $appendType
     */
    protected $appendType;

    /**
     * @var string $forceAppend
     */
    protected $forceAppend;

    /**
     * @var int $inventoryForecastType
     */
    protected $inventoryForecastType;

    /**
     * @var string $comments
     */
    protected $comments;

    /**
     * @var float $cost
     */
    protected $cost;

    /**
     * @var int $costType
     */
    protected $costType;

    /**
     * @var string $costVariableId
     */
    protected $costVariableId;

    /**
     * @var float $technologyCost
     */
    protected $technologyCost;

    /**
     * @var int $technologyCostType
     */
    protected $technologyCostType;

    /**
     * @var \DateTime $updated
     */
    protected $updated;

    /**
     * @var int $block
     */
    protected $block;

    /**
     * @var int $capping
     */
    protected $capping;

    /**
     * @var int $sessionCapping
     */
    protected $sessionCapping;

    /**
     * @var string $what
     */
    protected $what;

    /**
     * @var int $asZoneId
     */
    protected $asZoneId;

    /**
     * @var int $isInAdDirect
     */
    protected $isInAdDirect;

    /**
     * @var float $rate
     */
    protected $rate;

    /**
     * @var string $pricing
     */
    protected $pricing;

    /**
     * @var int $oacCategoryId
     */
    protected $oacCategoryId;

    /**
     * @var string $extAdSelection
     */
    protected $extAdSelection;

    /**
     * @var int $showCappedNoCookie
     */
    protected $showCappedNoCookie;

    /**
     * @var AdZoneAssoc $assocs
     */
    protected $assocs;

    /**
     * Get ID
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get Affiliate
     *
     * @return Affiliates
     */
    public function getAffiliate()
    {
        return $this->affiliate;
    }

    /**
     * Set Affiliate
     *
     * @param Affiliates $affiliate
     */
    public function setAffiliate($affiliate)
    {
        $this->affiliate = $affiliate;
    }

    /**
     * Get Zone Name
     *
     * @return string
     */
    public function getZoneName()
    {
        return $this->zoneName;
    }

    /**
     * Set Zone Name
     *
     * @param string $zoneName
     */
    public function setZoneName($zoneName)
    {
        $this->zoneName = $zoneName;
    }

    /**
     * Get Description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set Description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get Delivery
     *
     * @return int
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Set Delivery
     *
     * @param int $delivery
     */
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;
    }

    /**
     * Get Zone Type
     *
     * @return int
     */
    public function getZoneType()
    {
        return $this->zoneType;
    }

    /**
     * Set Zone Type
     *
     * @param int $zoneType
     */
    public function setZoneType($zoneType)
    {
        $this->zoneType = $zoneType;
    }

    /**
     * Get Category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set Category
     *
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * Get Width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set Width
     *
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * Get Height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set Height
     *
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * Get Ad Selection
     *
     * @return string
     */
    public function getAdSelection()
    {
        return $this->adSelection;
    }

    /**
     * Set Ad Selection
     *
     * @param string $adSelection
     */
    public function setAdSelection($adSelection)
    {
        $this->adSelection = $adSelection;
    }

    /**
     * Get Chain
     *
     * @return string
     */
    public function getChain()
    {
        return $this->chain;
    }

    /**
     * Set Chain
     *
     * @param string $chain
     */
    public function setChain($chain)
    {
        $this->chain = $chain;
    }

    /**
     * Get Prepend
     *
     * @return string
     */
    public function getPrepend()
    {
        return $this->prepend;
    }

    /**
     * Set Prepend
     *
     * @param string $prepend
     */
    public function setPrepend($prepend)
    {
        $this->prepend = $prepend;
    }

    /**
     * Get Append
     *
     * @return string
     */
    public function getAppend()
    {
        return $this->append;
    }

    /**
     * Set Append
     *
     * @param string $append
     */
    public function setAppend($append)
    {
        $this->append = $append;
    }

    /**
     * Get Append Type
     *
     * @return int
     */
    public function getAppendType()
    {
        return $this->appendType;
    }

    /**
     * Set Append Type
     *
     * @param int $appendType
     */
    public function setAppendType($appendType)
    {
        $this->appendType = $appendType;
    }

    /**
     * Get Force Append
     *
     * @return string
     */
    public function getForceAppend()
    {
        return $this->forceAppend;
    }

    /**
     * Set Force Append
     *
     * @param string $forceAppend
     */
    public function setForceAppend($forceAppend)
    {
        $this->forceAppend = $forceAppend;
    }

    /**
     * Get Inventory Forecast Type
     *
     * @return int
     */
    public function getInventoryForecastType()
    {
        return $this->inventoryForecastType;
    }

    /**
     * Set Inventory Forecast Type
     *
     * @param int $inventoryForecastType
     */
    public function setInventoryForecastType($inventoryForecastType)
    {
        $this->inventoryForecastType = $inventoryForecastType;
    }

    /**
     * Get Comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set Comments
     *
     * @param string $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * Get Cost
     *
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set Cost
     *
     * @param float $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    /**
     * Get Cost Type
     *
     * @return int
     */
    public function getCostType()
    {
        return $this->costType;
    }

    /**
     * Set Cost Type
     *
     * @param int $costType
     */
    public function setCostType($costType)
    {
        $this->costType = $costType;
    }

    /**
     * Get Cost Variable ID
     *
     * @return string
     */
    public function getCostVariableId()
    {
        return $this->costVariableId;
    }

    /**
     * Set Cost Variable ID
     *
     * @param string $costVariableId
     */
    public function setCostVariableId($costVariableId)
    {
        $this->costVariableId = $costVariableId;
    }

    /**
     * Get Technology Cost
     *
     * @return float
     */
    public function getTechnologyCost()
    {
        return $this->technologyCost;
    }

    /**
     * Set Technology Cost
     *
     * @param float $technologyCost
     */
    public function setTechnologyCost($technologyCost)
    {
        $this->technologyCost = $technologyCost;
    }

    /**
     * Get Technology Cost Type
     *
     * @return int
     */
    public function getTechnologyCostType()
    {
        return $this->technologyCostType;
    }

    /**
     * Set Technology Cost Type
     *
     * @param int $technologyCostType
     */
    public function setTechnologyCostType($technologyCostType)
    {
        $this->technologyCostType = $technologyCostType;
    }

    /**
     * Get Updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set Updated
     *
     * @param \DateTime $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * Get Block
     *
     * @return int
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * Set Block
     *
     * @param int $block
     */
    public function setBlock($block)
    {
        $this->block = $block;
    }

    /**
     * Get Capping
     *
     * @return int
     */
    public function getCapping()
    {
        return $this->capping;
    }

    /**
     * Set Capping
     *
     * @param int $capping
     */
    public function setCapping($capping)
    {
        $this->capping = $capping;
    }

    /**
     * Get Session Capping
     *
     * @return int
     */
    public function getSessionCapping()
    {
        return $this->sessionCapping;
    }

    /**
     * Set Session Capping
     *
     * @param int $sessionCapping
     */
    public function setSessionCapping($sessionCapping)
    {
        $this->sessionCapping = $sessionCapping;
    }

    /**
     * Get What
     *
     * @return string
     */
    public function getWhat()
    {
        return $this->what;
    }

    /**
     * Set What
     *
     * @param string $what
     */
    public function setWhat($what)
    {
        $this->what = $what;
    }

    /**
     * Get As Zone ID
     *
     * @return int
     */
    public function getAsZoneId()
    {
        return $this->asZoneId;
    }

    /**
     * Set As Zone ID
     *
     * @param int $asZoneId
     */
    public function setAsZoneId($asZoneId)
    {
        $this->asZoneId = $asZoneId;
    }

    /**
     * Get Is In Ad Direct
     *
     * @return int
     */
    public function getIsInAdDirect()
    {
        return $this->isInAdDirect;
    }

    /**
     * Set Is In Ad Direct
     *
     * @param int $isInAdDirect
     */
    public function setIsInAdDirect($isInAdDirect)
    {
        $this->isInAdDirect = $isInAdDirect;
    }

    /**
     * Get Rate
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set Rate
     *
     * @param float $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * Get Pricing
     *
     * @return string
     */
    public function getPricing()
    {
        return $this->pricing;
    }

    /**
     * Set Pricing
     *
     * @param string $pricing
     */
    public function setPricing($pricing)
    {
        $this->pricing = $pricing;
    }

    /**
     * Get OAC Category ID
     *
     * @return int
     */
    public function getOacCategoryId()
    {
        return $this->oacCategoryId;
    }

    /**
     * Set OAC Category ID
     *
     * @param int $oacCategoryId
     */
    public function setOacCategoryId($oacCategoryId)
    {
        $this->oacCategoryId = $oacCategoryId;
    }

    /**
     * Get Ext Ad Selection
     *
     * @return string
     */
    public function getExtAdSelection()
    {
        return $this->extAdSelection;
    }

    /**
     * Set Ext Ad Selection
     *
     * @param string $extAdSelection
     */
    public function setExtAdSelection($extAdSelection)
    {
        $this->extAdSelection = $extAdSelection;
    }

    /**
     * Get Show Capped No Cookie
     *
     * @return int
     */
    public function getShowCappedNoCookie()
    {
        return $this->showCappedNoCookie;
    }

    /**
     * Set Show Capped No Cookie
     *
     * @param int $showCappedNoCookie
     */
    public function setShowCappedNoCookie($showCappedNoCookie)
    {
        $this->showCappedNoCookie = $showCappedNoCookie;
    }

}