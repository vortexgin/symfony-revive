<?php

namespace Vortexgin\ReviveBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vortexgin\ReviveBundle\Annotation as Vortexgin;
use Vortexgin\ReviveBundle\Model\Banners as ModelBanners;

/**
 * Banners
 *
 * @ORM\Table(name="banners", indexes={
 *     @ORM\Index(name="ox_banners_campaignid", columns={"campaignid"})
 * })
 * @ORM\Entity
 * @Vortexgin\OXTable
 */
class Banners extends ModelBanners
{
    /**
     * @ORM\Column(name="bannerid", type="integer", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Campaigns", inversedBy="campaign")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="campaignid", referencedColumnName="campaignid", columnDefinition="mediumint(9) NOT NULL DEFAULT '0'")
     * })
     */
    protected $campaign;

    /**
     * @ORM\Column(name="contenttype", columnDefinition="enum('gif','jpeg','png','html','swf','dcr','rpm','mov','txt') NOT NULL DEFAULT 'gif'")
     */
    protected $contentType;

    /**
     * @ORM\Column(name="pluginversion", type="integer", length=3, nullable=false, options={"default" : "0"})
     */
    protected $pluginVersion;

    /**
     * @ORM\Column(name="storagetype", columnDefinition="enum('sql','web','url','html','network','txt') NOT NULL DEFAULT 'sql'")
     */
    protected $storageType;

    /**
     * @ORM\Column(name="filename", type="string", length=255, nullable=false, options={"default" : ""})
     */
    protected $filename;

    /**
     * @ORM\Column(name="imageurl", type="string", length=255, nullable=false, options={"default" : "0"})
     */
    protected $imageUrl;

    /**
     * @ORM\Column(name="htmltemplate", type="text", nullable=false)
     */
    protected $htmlTemplate;

    /**
     * @ORM\Column(name="htmlcache", type="text", nullable=false)
     */
    protected $htmlCache;

    /**
     * @ORM\Column(name="width", type="smallint", nullable=false, options={"default" : "0"})
     */
    protected $width;

    /**
     * @ORM\Column(name="height", type="smallint", nullable=false, options={"default" : "0"})
     */
    protected $height;

    /**
     * @ORM\Column(name="weight", columnDefinition="tinyint(4) NOT NULL DEFAULT '1'")
     */
    protected $weight;

    /**
     * @ORM\Column(name="seq", type="integer", columnDefinition="tinyint(4) NOT NULL DEFAULT '0'")
     */
    protected $seq;

    /**
     * @ORM\Column(name="target", type="string", length=16, nullable=false, options={"default" : ""})
     */
    protected $target;

    /**
     * @ORM\Column(name="url", type="text", nullable=false)
     */
    protected $url;

    /**
     * @ORM\Column(name="alt", type="string", length=255, nullable=false, options={"default" : ""})
     */
    protected $alt;

    /**
     * @ORM\Column(name="statustext", type="string", length=255, nullable=false, options={"default" : ""})
     */
    protected $statusText;

    /**
     * @ORM\Column(name="bannertext", type="text", nullable=false)
     */
    protected $bannerText;

    /**
     * @ORM\Column(name="description", type="string", length=255, nullable=false, options={"default" : ""})
     */
    protected $description;

    /**
     * @ORM\Column(name="adserver", type="string", length=255, nullable=false, options={"default" : ""})
     */
    protected $adServer;

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
     * @ORM\Column(name="compiledlimitation", type="text", nullable=false)
     */
    protected $compiledLimitation;

    /**
     * @ORM\Column(name="acl_plugins", type="text", nullable=true)
     */
    protected $aclPlugins;

    /**
     * @ORM\Column(name="append", type="text", nullable=false)
     */
    protected $append;

    /**
     * @ORM\Column(name="bannertype", type="integer", nullable=false, options={"default" : "0"})
     */
    protected $bannerType;

    /**
     * @ORM\Column(name="alt_filename", type="string", length=255, nullable=false, options={"default" : ""})
     */
    protected $altFilename;

    /**
     * @ORM\Column(name="alt_imageurl", type="string", length=255, nullable=false, options={"default" : ""})
     */
    protected $altImageUrl;

    /**
     * @ORM\Column(name="alt_contenttype", columnDefinition="enum('gif','jpeg','png') NOT NULL DEFAULT 'gif'")
     */
    protected $altContentType;

    /**
     * @ORM\Column(name="comments", type="text", nullable=true)
     */
    protected $comments;

    /**
     * @ORM\Column(name="updated", type="datetime", nullable=false)
     */
    protected $updated;

    /**
     * @ORM\Column(name="acls_updated", type="datetime", nullable=false, options={"default" : "0000-00-00 00:00:00"})
     */
    protected $aclsUpdated;

    /**
     * @ORM\Column(name="keyword", type="string", length=255, nullable=false, options={"default" : ""})
     */
    protected $keyword;

    /**
     * @ORM\Column(name="transparent", type="integer", nullable=false, options={"default" : "0"})
     */
    protected $transparent;

    /**
     * @ORM\Column(name="parameters", type="text", nullable=true)
     */
    protected $parameters;

    /**
     * @ORM\Column(name="an_banner_id", type="integer", nullable=true)
     */
    protected $anBannerId;

    /**
     * @ORM\Column(name="as_banner_id", type="integer", nullable=true)
     */
    protected $asBannerId;

    /**
     * @ORM\Column(name="status", type="integer", nullable=false, options={"default" : "0"})
     */
    protected $status;

    /**
     * @ORM\Column(name="ad_direct_status", type="integer", nullable=false, options={"default" : "0"})
     */
    protected $adDirectStatus;

    /**
     * @ORM\Column(name="ad_direct_rejection_reason_id", type="integer", nullable=false, options={"default" : "0"})
     */
    protected $adDirectRejectionReasonId;

    /**
     * @ORM\Column(name="ext_bannertype", type="string", length=255, nullable=true)
     */
    protected $extBannerType;

    /**
     * @ORM\Column(name="prepend", type="text", nullable=false)
     */
    protected $prepend;

}
