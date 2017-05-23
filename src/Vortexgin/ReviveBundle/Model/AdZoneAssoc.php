<?php

namespace Vortexgin\ReviveBundle\Model;

class AdZoneAssoc implements AdZoneAssocInterface
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var Zones
     */
    protected $zone;

    /**
     * @var Banners
     */
    protected $banner;

    /**
     * @var float
     */
    protected $priority;

    /**
     * @var int
     */
    protected $linkType;

    /**
     * @var float
     */
    protected $priorityFactor;

    /**
     * @var int
     */
    protected $toBeDelivered;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Zone
     *
     * @param Zones $zone
     */
    public function setZone($zone)
    {
        $this->zone = $zone;
    }

    /**
     * Get Zone
     *
     * @return Zones
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Set Banner
     *
     * @param Bannes $banner
     */
    public function setBanner($banner)
    {
        $this->banner = $banner;
    }

    /**
     * Get Banner
     *
     * @return Banners
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * Set Priority
     *
     * @param float $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    /**
     * Get Priority
     *
     * @return float
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set Link Type
     *
     * @param integer $linkType
     */
    public function setLinkType($linkType)
    {
        $this->linkType = $linkType;
    }

    /**
     * Get Link Type
     *
     * @return integer
     */
    public function getLinkType()
    {
        return $this->linkType;
    }

    /**
     * Set Priority Factor
     *
     * @param float $priorityFactor
     */
    public function setPriorityFactor($priorityFactor)
    {
        $this->priorityFactor = $priorityFactor;
    }

    /**
     * Get Priority Factor
     *
     * @return float
     */
    public function getPriorityFactor()
    {
        return $this->priorityFactor;
    }

    /**
     * Set To Be Delivered
     *
     * @param string $toBeDelivered
     */
    public function setToBeDelivered($toBeDelivered)
    {
        $this->toBeDelivered = $toBeDelivered;
    }

    /**
     * Get To Be Delivered
     *
     * @return string
     */
    public function getToBeDelivered()
    {
        return $this->toBeDelivered;
    }
}
