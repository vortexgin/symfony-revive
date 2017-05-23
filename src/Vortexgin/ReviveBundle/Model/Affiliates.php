<?php

namespace Vortexgin\ReviveBundle\Model;

class Affiliates implements AffiliatesInterface
{

    /**
     * @var int $id
     */
    protected $id;

    /**
     * @var Agency $agency
     */
    protected $agency;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var string $mnemonic
     */
    protected $mnemonic;

    /**
     * @var string $comments
     */
    protected $comments;

    /**
     * @var string $contact
     */
    protected $contact;

    /**
     * @var string $email
     */
    protected $email;

    /**
     * @var string $website
     */
    protected $website;

    /**
     * @var \DateTime $updated
     */
    protected $updated;

    /**
     * @var int $anWebsiteId
     */
    protected $anWebsiteId;

    /**
     * @var string $oacCountryCode;
     */
    protected $oacCountryCode;

    /**
     * @var int $oacLanguageId;
     */
    protected $oacLanguageId;

    /**
     * @var int $oacCategoryId;
     */
    protected $oacCategoryId;

    /**
     * @var int $asWebsiteId;
     */
    protected $asWebsiteId;

    /**
     * @var Accounts $account
     */
    protected $account;

    /**
     * @var Zones $zones
     */
    protected $zones;

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
     * Get Agency
     *
     * @return Agency
     */
    public function getAgency()
    {
        return $this->agency;
    }

    /**
     * Set Agency
     *
     * @param Agency $agency
     */
    public function setAgency($agency)
    {
        $this->agency = $agency;
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
     * Get Mnemonic
     *
     * @return string
     */
    public function getMnemonic()
    {
        return $this->mnemonic;
    }

    /**
     * Set Mnemonic
     *
     * @param string $mnemonic
     */
    public function setMnemonic($mnemonic)
    {
        $this->mnemonic = $mnemonic;
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
     * Get Contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set Contact
     *
     * @param string $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get Email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set Email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get Website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set Website
     *
     * @param string $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
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
     * @param string $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * Get An Website ID
     *
     * @return int
     */
    public function getAnWebsiteId()
    {
        return $this->anWebsiteId;
    }

    /**
     * Set An Website ID
     *
     * @param int $anWebsiteId
     */
    public function setAnWebsiteId($anWebsiteId)
    {
        $this->anWebsiteId = $anWebsiteId;
    }

    /**
     * Get OAC Country Code
     *
     * @return string
     */
    public function getOacCountryCode()
    {
        return $this->oacCountryCode;
    }

    /**
     * Set OAC Country Code
     *
     * @param string $oacCountryCode
     */
    public function setOacCountryCode($oacCountryCode)
    {
        $this->oacCountryCode = $oacCountryCode;
    }

    /**
     * Get OAC Language ID
     *
     * @return int
     */
    public function getOacLanguageId()
    {
        return $this->oacLanguageId;
    }

    /**
     * Set OAC Language ID
     *
     * @param int $oacLanguageId
     */
    public function setOacLanguageId($oacLanguageId)
    {
        $this->oacLanguageId = $oacLanguageId;
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
     * Get As Website ID
     *
     * @return int
     */
    public function getAsWebsiteId()
    {
        return $this->asWebsiteId;
    }

    /**
     * Set As Website ID
     *
     * @param int $asWebsiteId
     */
    public function setAsWebsiteId($asWebsiteId)
    {
        $this->asWebsiteId = $asWebsiteId;
    }

    /**
     * Get Account
     *
     * @return Accounts
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set Account
     *
     * @param Accounts $account
     */
    public function setAccount($account)
    {
        $this->account = $account;
    }

    /**
     * Get Zones
     *
     * @return Zones
     */
    public function getZones()
    {
        return $this->zones;
    }

}