<?php

namespace Vortexgin\ReviveBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Vortexgin\ReviveBundle\Annotation as Vortexgin;
use Vortexgin\ReviveBundle\Model\Campaigns as ModelCampaigns;

/**
 * Campaigns
 *
 * @ORM\Table(name="campaigns", indexes={
 *     @ORM\Index(name="ox_campaigns_clientid", columns={"clientid"})
 * })
 * @ORM\Entity
 * @Vortexgin\OXTable
 */
class Campaigns extends ModelCampaigns
{

    /**
     * @ORM\Column(name="campaignid", type="integer", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Clients", inversedBy="campaigns")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="clientid", referencedColumnName="clientid")
     * })
     */
    protected $client;

    /**
     * @ORM\Column(name="campaignname", type="string", length=255, nullable=false, options={"default" : ""})
     */
    protected $name;

    /**
     * @ORM\Column(name="views", type="integer", nullable=true, options={"default" : "-1"})
     */
    protected $views;

    /**
     * @ORM\Column(name="clicks", type="integer", nullable=true, options={"default" : "-1"})
     */
    protected $clicks;

    /**
     * @ORM\Column(name="conversions", type="integer", nullable=true, options={"default" : "-1"})
     */
    protected $conversions;

    /**
     * @ORM\Column(name="priority", type="integer", nullable=false, options={"default" : "0"})
     */
    protected $priority;

    /**
     * @ORM\Column(name="weight", columnDefinition="tinyint(4) NOT NULL DEFAULT '1'")
     */
    protected $weight;

    /**
     * @ORM\Column(name="target_impression", type="integer", nullable=false, options={"default" : "0"})
     */
    protected $targetImpression;

    /**
     * @ORM\Column(name="target_click", type="integer", nullable=false, options={"default" : "0"})
     */
    protected $targetClick;

    /**
     * @ORM\Column(name="target_conversion", type="integer", nullable=false, options={"default" : "0"})
     */
    protected $targetConversion;

    /**
     * @ORM\Column(name="anonymous", columnDefinition="enum('t','f') NOT NULL DEFAULT 'f'")
     */
    protected $anonymous;

    /**
     * @ORM\Column(name="companion", type="smallint", nullable=false, options={"default" : "0"})
     */
    protected $companion;

    /**
     * @ORM\Column(name="comments", type="text", nullable=true)
     */
    protected $comments;

    /**
     * @ORM\Column(name="revenue", columnDefinition="decimal(10,4) DEFAULT NULL")
     */
    protected $revenue;

    /**
     * @ORM\Column(name="revenue_type", type="smallint", nullable=true)
     */
    protected $revenueType;

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
     * @ORM\Column(name="an_campaign_id", type="integer", nullable=true)
     */
    protected $anCampaignId;

    /**
     * @ORM\Column(name="as_campaign_id", type="integer", nullable=true)
     */
    protected $asCampaignId;

    /**
     * @ORM\Column(name="status", type="integer", nullable=false, options={"default" : "0"})
     */
    protected $status;

    /**
     * @ORM\Column(name="an_status", type="integer", nullable=false, options={"default" : "0"})
     */
    protected $anStatus;

    /**
     * @ORM\Column(name="as_reject_reason", type="integer", nullable=false, options={"default" : "0"})
     */
    protected $asRejectReason;

    /**
     * @ORM\Column(name="hosted_views", type="integer", nullable=false, options={"default" : "0"})
     */
    protected $hostedViews;

    /**
     * @ORM\Column(name="hosted_clicks", type="integer", nullable=false, options={"default" : "0"})
     */
    protected $hostedClicks;

    /**
     * @ORM\Column(name="viewwindow", columnDefinition="mediumint(9) NOT NULL DEFAULT '0'")
     */
    protected $viewWindow;

    /**
     * @ORM\Column(name="clickwindow", columnDefinition="mediumint(9) NOT NULL DEFAULT '0'")
     */
    protected $clickWindow;

    /**
     * @ORM\Column(name="ecpm", columnDefinition="decimal(10,4) DEFAULT NULL")
     */
    protected $ecpm;

    /**
     * @ORM\Column(name="min_impressions", type="integer", nullable=false, options={"default" : "0"})
     */
    protected $minImpressions;

    /**
     * @ORM\Column(name="ecpm_enabled", columnDefinition="tinyint(4) NOT NULL DEFAULT '0'")
     */
    protected $ecpmEnabled;

    /**
     * @ORM\Column(name="activate_time", type="datetime", nullable=true)
     */
    protected $activateTime;

    /**
     * @ORM\Column(name="expire_time", type="datetime", nullable=true)
     */
    protected $expireTime;

    /**
     * @ORM\Column(name="type", columnDefinition="tinyint(4) NOT NULL DEFAULT '0'")
     */
    protected $type;

    /**
     * @ORM\Column(name="show_capped_no_cookie", columnDefinition="tinyint(4) NOT NULL DEFAULT '0'")
     */
    protected $showCappedNoCookie;

    /**
     * @ORM\OneToMany(targetEntity="Banners", mappedBy="campaign", cascade={"persist"})
     */
    protected $banners;

    public function __construct()
    {
        $this->banners = new ArrayCollection();
    }

}