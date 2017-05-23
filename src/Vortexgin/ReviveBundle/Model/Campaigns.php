<?php

namespace Vortexgin\ReviveBundle\Model;

use Pure\ClientServerTest;

class Campaigns implements CampaignsInterface
{

    /**
     * @var int $id
     */
    protected $id;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var Clients $client
     */
    protected $client;

    /**
     * @var int $views
     */
    protected $views;

    /**
     * @var int $clicks
     */
    protected $clicks;

    /**
     * @var int $conversions
     */
    protected $conversions;

    /**
     * @var int $priority
     */
    protected $priority;

    /**
     * @var int $weight
     */
    protected $weight;

    /**
     * @var int $targetImpression
     */
    protected $targetImpression;

    /**
     * @var int $targetClick
     */
    protected $targetClick;

    /**
     * @var int $targetConversion
     */
    protected $targetConversion;

    /**
     * @var string $anonymous
     */
    protected $anonymous;

    /**
     * @var int $companion
     */
    protected $companion;

    /**
     * @var string $comments
     */
    protected $comments;

    /**
     * @var int $revenue
     */
    protected $revenue;

    /**
     * @var int $revenueType
     */
    protected $revenueType;

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
     * @var int $anCampaignId
     */
    protected $anCampaignId;

    /**
     * @var int $asCampaignId
     */
    protected $asCampaignId;

    /**
     * @var int $status
     */
    protected $status;

    /**
     * @var int $anStatus
     */
    protected $anStatus;

    /**
     * @var int $asRejectReason
     */
    protected $asRejectReason;

    /**
     * @var int $hostedViews
     */
    protected $hostedViews;

    /**
     * @var int $hostedClicks
     */
    protected $hostedClicks;

    /**
     * @var int $viewWindow
     */
    protected $viewWindow;

    /**
     * @var int $clickWindow
     */
    protected $clickWindow;

    /**
     * @var int $ecpm
     */
    protected $ecpm;

    /**
     * @var int $minImpressions
     */
    protected $minImpressions;

    /**
     * @var int $ecpmEnabled
     */
    protected $ecpmEnabled;

    /**
     * @var \DateTime $activateTime
     */
    protected $activateTime;

    /**
     * @var \DateTime $expireTime
     */
    protected $expireTime;

    /**
     * @var int $type
     */
    protected $type;

    /**
     * @var int $showCappedNoCookie
     */
    protected $showCappedNoCookie;

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
     * Get Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get Client
     *
     * @return Clients
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set Client
     *
     * @param Clients $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * Get Views
     *
     * @return int
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set Views
     *
     * @param int $views
     */
    public function setViews($views)
    {
        $this->views = $views;
    }

    /**
     * Get Clicks
     *
     * @return int
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * Set Clicks
     *
     * @param int $clicks
     */
    public function setClicks($clicks)
    {
        $this->clicks = $clicks;
    }

    /**
     * Get Conversions
     *
     * @return int
     */
    public function getConversions()
    {
        return $this->conversions;
    }

    /**
     * Set Conversions
     *
     * @param int $conversions
     */
    public function setConversions($conversions)
    {
        $this->conversions = $conversions;
    }

    /**
     * Get Priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set Priority
     *
     * @param int $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    /**
     * Get Weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set Weight
     *
     * @param int $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * Get Target Impression
     *
     * @return int
     */
    public function getTargetImpression()
    {
        return $this->targetImpression;
    }

    /**
     * Set Target Impression
     *
     * @param int $targetImpression
     */
    public function setTargetImpression($targetImpression)
    {
        $this->targetImpression = $targetImpression;
    }

    /**
     * Get Target Click
     *
     * @return int
     */
    public function getTargetClick()
    {
        return $this->targetClick;
    }

    /**
     * Set Target Click
     *
     * @param int $targetClick
     */
    public function setTargetClick($targetClick)
    {
        $this->targetClick = $targetClick;
    }

    /**
     * Get Target Conversion
     *
     * @return int
     */
    public function getTargetConversion()
    {
        return $this->targetConversion;
    }

    /**
     * Set Target Conversion
     *
     * @param int $targetConversion
     */
    public function setTargetConversion($targetConversion)
    {
        $this->targetConversion = $targetConversion;
    }

    /**
     * Get Anonymous
     *
     * @return string
     */
    public function getAnonymous()
    {
        return $this->anonymous;
    }

    /**
     * Set Anonymous
     *
     * @param string $anonymous
     */
    public function setAnonymous($anonymous)
    {
        $this->anonymous = $anonymous;
    }

    /**
     * Get Companion
     *
     * @return int
     */
    public function getCompanion()
    {
        return $this->companion;
    }

    /**
     * Set Companion
     *
     * @param int $companion
     */
    public function setCompanion($companion)
    {
        $this->companion = $companion;
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
     * Get Revenue
     *
     * @return float
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * Set Revenue
     *
     * @param float $revenue
     */
    public function setRevenue($revenue)
    {
        $this->revenue = $revenue;
    }

    /**
     * Get Revenue Type
     *
     * @return int
     */
    public function getRevenueType()
    {
        return $this->revenueType;
    }

    /**
     * Set Revenue Type
     *
     * @param int $revenueType
     */
    public function setRevenueType($revenueType)
    {
        $this->revenueType = $revenueType;
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
     * Get An Campaign ID
     *
     * @return int
     */
    public function getAnCampaignId()
    {
        return $this->anCampaignId;
    }

    /**
     * Set An Campaign ID
     *
     * @param int $anCampaignId
     */
    public function setAnCampaignId($anCampaignId)
    {
        $this->anCampaignId = $anCampaignId;
    }

    /**
     * Get As Campaign ID
     *
     * @return int
     */
    public function getAsCampaignId()
    {
        return $this->asCampaignId;
    }

    /**
     * Set As Campaign ID
     *
     * @param int $asCampaignId
     */
    public function setAsCampaignId($asCampaignId)
    {
        $this->asCampaignId = $asCampaignId;
    }

    /**
     * Get Status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set Status
     *
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Get An Status
     *
     * @return int
     */
    public function getAnStatus()
    {
        return $this->anStatus;
    }

    /**
     * Set An Status
     *
     * @param int $anStatus
     */
    public function setAnStatus($anStatus)
    {
        $this->anStatus = $anStatus;
    }

    /**
     * Get As Reject Reason
     *
     * @return int
     */
    public function getAsRejectReason()
    {
        return $this->asRejectReason;
    }

    /**
     * Set As Reject Reason
     *
     * @param int $asRejectReason
     */
    public function setAsRejectReason($asRejectReason)
    {
        $this->asRejectReason = $asRejectReason;
    }

    /**
     * Get Hosted Views
     *
     * @return int
     */
    public function getHostedViews()
    {
        return $this->hostedViews;
    }

    /**
     * Set Hosted Views
     *
     * @param int $hostedViews
     */
    public function setHostedViews($hostedViews)
    {
        $this->hostedViews = $hostedViews;
    }

    /**
     * Get Hosted Clicks
     *
     * @return int
     */
    public function getHostedClicks()
    {
        return $this->hostedClicks;
    }

    /**
     * Set Hosted Clicks
     *
     * @param int $hostedClicks
     */
    public function setHostedClicks($hostedClicks)
    {
        $this->hostedClicks = $hostedClicks;
    }

    /**
     * Get View Window
     *
     * @return int
     */
    public function getViewWindow()
    {
        return $this->viewWindow;
    }

    /**
     * Set View Window
     *
     * @param int $viewWindow
     */
    public function setViewWindow($viewWindow)
    {
        $this->viewWindow = $viewWindow;
    }

    /**
     * Get Click Window
     *
     * @return int
     */
    public function getClickWindow()
    {
        return $this->clickWindow;
    }

    /**
     * Set Click Window
     *
     * @param int $clickWindow
     */
    public function setClickWindow($clickWindow)
    {
        $this->clickWindow = $clickWindow;
    }

    /**
     * Get Ecpm
     *
     * @return float
     */
    public function getEcpm()
    {
        return $this->ecpm;
    }

    /**
     * Set Ecpm
     *
     * @param float $ecpm
     */
    public function setEcpm($ecpm)
    {
        $this->ecpm = $ecpm;
    }

    /**
     * Get Min Impressions
     *
     * @return int
     */
    public function getMinImpressions()
    {
        return $this->minImpressions;
    }

    /**
     * Set Min Impressions
     *
     * @param int $minImpressions
     */
    public function setMinImpressions($minImpressions)
    {
        $this->minImpressions = $minImpressions;
    }

    /**
     * Get Ecpm Enabled
     *
     * @return int
     */
    public function getEcpmEnabled()
    {
        return $this->ecpmEnabled;
    }

    /**
     * Set Ecpm Enabled
     *
     * @param int $ecpmEnabled
     */
    public function setEcpmEnabled($ecpmEnabled)
    {
        $this->ecpmEnabled = $ecpmEnabled;
    }

    /**
     * Get Activate Time
     *
     * @return \DateTime
     */
    public function getActivateTime()
    {
        return $this->activateTime;
    }

    /**
     * Set Activate Time
     *
     * @param \DateTime $activateTime
     */
    public function setActivateTime($activateTime)
    {
        $this->activateTime = $activateTime;
    }

    /**
     * Get Expire Time
     *
     * @return \DateTime
     */
    public function getExpireTime()
    {
        return $this->expireTime;
    }

    /**
     * Set Expire Time
     *
     * @param \DateTime $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->expireTime = $expireTime;
    }

    /**
     * Get Type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set Type
     *
     * @param int $type
     */
    public function setType($type)
    {
        $this->type = $type;
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