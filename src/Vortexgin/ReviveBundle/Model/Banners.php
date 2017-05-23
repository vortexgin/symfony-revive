<?php

namespace Vortexgin\ReviveBundle\Model;


class Banners implements BannersInterface
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var Campaigns
     */
    protected $campaign;

    /**
     * @var string
     */
    protected $contentType;

    /**
     * @var int
     */
    protected $pluginVersion;

    /**
     * @var string
     */
    protected $storageType;

    /**
     * @var string
     */
    protected $filename;

    /**
     * @var string
     */
    protected $imageUrl;

    /**
     * @var string
     */
    protected $htmlTemplate;

    /**
     * @var string
     */
    protected $htmlCache;

    /**
     * @var int
     */
    protected $width;

    /**
     * @var int
     */
    protected $height;

    /**
     * @var int
     */
    protected $weight;

    /**
     * @var int
     */
    protected $seq;

    /**
     * @var string
     */
    protected $target;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var string
     */
    protected $alt;

    /**
     * @var string
     */
    protected $statusText;

    /**
     * @var string
     */
    protected $bannerText;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $adServer;

    /**
     * @var int
     */
    protected $block;

    /**
     * @var int
     */
    protected $capping;

    /**
     * @var int
     */
    protected $sessionCapping;

    /**
     * @var string
     */
    protected $compiledLimitation;

    /**
     * @var string
     */
    protected $aclPlugins;

    /**
     * @var string
     */
    protected $append;

    /**
     * @var int
     */
    protected $bannerType;

    /**
     * @var string
     */
    protected $altFilename;

    /**
     * @var string
     */
    protected $altImageUrl;

    /**
     * @var string
     */
    protected $altContentType;

    /**
     * @var string
     */
    protected $comments;

    /**
     * @var \DateTime
     */
    protected $updated;

    /**
     * @var \DateTime
     */
    protected $aclsUpdated;

    /**
     * @var string
     */
    protected $keyword;

    /**
     * @var int
     */
    protected $transparent;

    /**
     * @var string
     */
    protected $parameters;

    /**
     * @var int
     */
    protected $anBannerId;

    /**
     * @var int
     */
    protected $asBannerId;

    /**
     * @var int
     */
    protected $status;

    /**
     * @var int
     */
    protected $adDirectStatus;

    /**
     * @var int
     */
    protected $adDirectRejectionReasonId;

    /**
     * @var string
     */
    protected $extBannerType;

    /**
     * @var string
     */
    protected $prepend;

    /**
     * @var AdZoneAssoc $assocs
     */
    protected $assocs;

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
     * Set Campaign
     *
     * @param Campaigns $campaign
     */
    public function setCampaign($campaign)
    {
        $this->campaign = $campaign;
    }

    /**
     * Get Campaign
     *
     * @return string
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Set Content Type
     *
     * @param string $contentType
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * Get Content Type
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Set Plugin Version
     *
     * @param integer $pluginVersion
     */
    public function setPluginVersion($pluginVersion)
    {
        $this->pluginVersion = $pluginVersion;
    }

    /**
     * Get Plugin Version
     *
     * @return integer
     */
    public function getPluginVersion()
    {
        return $this->pluginVersion;
    }

    /**
     * Set Storage Type
     *
     * @param string $storageType
     */
    public function setStorageType($storageType)
    {
        $this->storageType = $storageType;
    }

    /**
     * Get Storage Type
     *
     * @return string
     */
    public function getStorageType()
    {
        return $this->storageType;
    }

    /**
     * Set Filename
     *
     * @param string $filename
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    /**
     * Get Filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set Image Url
     *
     * @param string $imageUrl
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * Get Image Url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * Set Html Template
     *
     * @param string $htmlTemplate
     */
    public function setHtmlTemplate($htmlTemplate)
    {
        $this->htmlTemplate = $htmlTemplate;
    }

    /**
     * Get Html Template
     *
     * @return string
     */
    public function getHtmlTemplate()
    {
        return $this->htmlTemplate;
    }

    /**
     * Set Html Cache
     *
     * @param string $htmlCache
     */
    public function setHtmlCache($htmlCache)
    {
        $this->htmlCache = $htmlCache;
    }

    /**
     * Get Html Cache
     *
     * @return string
     */
    public function getHtmlCache()
    {
        return $this->htmlCache;
    }

    /**
     * Set Width
     *
     * @param integer $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * Get Width
     *
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set Height
     *
     * @param integer $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * Get Height
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set Weight
     *
     * @param integer $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * Get Weight
     *
     * @return integer
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set Seq
     *
     * @param integer $seq
     */
    public function setSeq($seq)
    {
        $this->seq = $seq;
    }

    /**
     * Get Seq
     *
     * @return integer
     */
    public function getSeq()
    {
        return $this->seq;
    }

    /**
     * Set Target
     *
     * @param string $target
     */
    public function setTarget($target)
    {
        $this->target = $target;
    }

    /**
     * Get Target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set Url
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Get Url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set Alt
     *
     * @param string $alt
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;
    }

    /**
     * Get Alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set Status Text
     *
     * @param string $statusText
     */
    public function setStatusText($statusText)
    {
        $this->statusText = $statusText;
    }

    /**
     * Get Status Text
     *
     * @return string
     */
    public function getStatusText()
    {
        return $this->statusText;
    }

    /**
     * Set Banner Text
     *
     * @param string $bannerText
     */
    public function setBannerText($bannerText)
    {
        $this->bannerText = $bannerText;
    }

    /**
     * Get Banner Text
     *
     * @return string
     */
    public function getBannerText()
    {
        return $this->bannerText;
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
     * Get Description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set Ad Server
     *
     * @param string $adServer
     */
    public function setAdServer($adServer)
    {
        $this->adServer = $adServer;
    }

    /**
     * Get Ad Server
     *
     * @return string
     */
    public function getAdServer()
    {
        return $this->adServer;
    }

    /**
     * Set Block
     *
     * @param integer $block
     */
    public function setBlock($block)
    {
        $this->block = $block;
    }

    /**
     * Get Block
     *
     * @return integer
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * Set Capping
     *
     * @param integer $capping
     */
    public function setCapping($capping)
    {
        $this->capping = $capping;
    }

    /**
     * Get Capping
     *
     * @return integer
     */
    public function getCapping()
    {
        return $this->capping;
    }

    /**
     * Set Session Capping
     *
     * @param integer $sessionCapping
     */
    public function setSessionCapping($sessionCapping)
    {
        $this->sessionCapping = $sessionCapping;
    }

    /**
     * Get Session Capping
     *
     * @return integer
     */
    public function getSessionCapping()
    {
        return $this->sessionCapping;
    }

    /**
     * Set Compiled Limitation
     *
     * @param string $compiledLimitation
     */
    public function setCompiledLimitation($compiledLimitation)
    {
        $this->compiledLimitation = $compiledLimitation;
    }

    /**
     * Get Compiled Limitation
     *
     * @return string
     */
    public function getCompiledLimitation()
    {
        return $this->compiledLimitation;
    }

    /**
     * Set Acl Plugins
     *
     * @param string $aclPlugins
     */
    public function setAclPlugins($aclPlugins)
    {
        $this->aclPlugins = $aclPlugins;
    }

    /**
     * Get Acl Plugins
     *
     * @return string
     */
    public function getAclPlugins()
    {
        return $this->aclPlugins;
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
     * Get Append
     *
     * @return string
     */
    public function getAppend()
    {
        return $this->append;
    }

    /**
     * Set Banner Type
     *
     * @param integer $bannerType
     */
    public function setBannerType($bannerType)
    {
        $this->bannerType = $bannerType;
    }

    /**
     * Get Banner Type
     *
     * @return integer
     */
    public function getBannertype()
    {
        return $this->bannerType;
    }

    /**
     * Set Alt Filename
     *
     * @param string $altFilename
     */
    public function setAltFilename($altFilename)
    {
        $this->altFilename = $altFilename;
    }

    /**
     * Get Alt Filename
     *
     * @return string
     */
    public function getAltFilename()
    {
        return $this->altFilename;
    }

    /**
     * Set Alt Image Url
     *
     * @param string $altImageUrl
     */
    public function setAltImageUrl($altImageUrl)
    {
        $this->altImageUrl = $altImageUrl;
    }

    /**
     * Get Alt Image Url
     *
     * @return string
     */
    public function getAltImageUrl()
    {
        return $this->altImageUrl;
    }

    /**
     * Set Alt Content Type
     *
     * @param string $altContentType
     */
    public function setAltContentType($altContentType)
    {
        $this->altContentType = $altContentType;
    }

    /**
     * Get Alt Content Type
     *
     * @return string
     */
    public function getAltContentType()
    {
        return $this->altContentType;
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
     * Get Comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
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
     * Get Updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set Acls Updated
     *
     * @param \DateTime $aclsUpdated
     */
    public function setAclsUpdated($aclsUpdated)
    {
        $this->aclsUpdated = $aclsUpdated;
    }

    /**
     * Get Acls Updated
     *
     * @return \DateTime
     */
    public function getAclsUpdated()
    {
        return $this->aclsUpdated;
    }

    /**
     * Set Keyword
     *
     * @param string $keyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    }

    /**
     * Get Keyword
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set Transparent
     *
     * @param integer $transparent
     */
    public function setTransparent($transparent)
    {
        $this->transparent = $transparent;
    }

    /**
     * Get Transparent
     *
     * @return integer
     */
    public function getTransparent()
    {
        return $this->transparent;
    }

    /**
     * Set Parameters
     *
     * @param string $parameters
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * Get Parameters
     *
     * @return string
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Set An Banner Id
     *
     * @param integer $anBannerId
     */
    public function setAnBannerId($anBannerId)
    {
        $this->anBannerId = $anBannerId;
    }

    /**
     * Get An Banner Id
     *
     * @return integer
     */
    public function getAnBannerId()
    {
        return $this->anBannerId;
    }

    /**
     * Set As Banner Id
     *
     * @param integer $asBannerId
     */
    public function setAsBannerId($asBannerId)
    {
        $this->asBannerId = $asBannerId;
    }

    /**
     * Get As Banner Id
     *
     * @return integer
     */
    public function getAsBannerId()
    {
        return $this->asBannerId;
    }

    /**
     * Set Status
     *
     * @param integer $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Get Status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set Ad Direct Status
     *
     * @param integer $adDirectStatus
     */
    public function setAdDirectStatus($adDirectStatus)
    {
        $this->adDirectStatus = $adDirectStatus;
    }

    /**
     * Get Ad Direct Status
     *
     * @return integer
     */
    public function getAdDirectStatus()
    {
        return $this->adDirectStatus;
    }

    /**
     * Set Ad Direct Rejection Reason Id
     *
     * @param integer $adDirectRejectionReasonId
     */
    public function setAdDirectRejectionReasonId($adDirectRejectionReasonId)
    {
        $this->adDirectRejectionReasonId = $adDirectRejectionReasonId;
    }

    /**
     * Get Ad Direct Rejection Reason Id
     *
     * @return integer
     */
    public function getAdDirectRejectionReasonId()
    {
        return $this->adDirectRejectionReasonId;
    }

    /**
     * Set Ext Banner Type
     *
     * @param string $extBannerType
     */
    public function setExtBannerType($extBannerType)
    {
        $this->extBannerType = $extBannerType;
    }

    /**
     * Get Ext Banner Type
     *
     * @return string
     */
    public function getExtBannerType()
    {
        return $this->extBannerType;
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
     * Get Prepend
     *
     * @return string
     */
    public function getPrepend()
    {
        return $this->prepend;
    }

    /**
     * Get Assocs
     *
     * @return AdZoneAssoc
     */
    public function getAssocs()
    {
        return $this->assocs;
    }

}