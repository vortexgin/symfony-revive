<?php

namespace Vortexgin\ReviveBundle\Model;

class Agency implements AgencyInterface
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
     * @var string $contact
     */
    protected $contact;

    /**
     * @var string $email
     */
    protected $email;

    /**
     * @var string $logoutUrl
     */
    protected $logoutUrl;

    /**
     * @var int $active
     */
    protected $active;

    /**
     * @var \DateTime $updated
     */
    protected $updated;

    /**
     * @var Accounts $account
     */
    protected $account;

    /**
     * @var Affiliates $affiliate
     */
    protected $affiliates;

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
     * @param string $name
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
     * Get Logout URL
     *
     * @return string
     */
    public function getLogoutUrl()
    {
        return $this->logoutUrl;
    }

    /**
     * Set Logout URL
     *
     * @param string $logoutUrl
     */
    public function setLogout($logoutUrl)
    {
        $this->logoutUrl = $logoutUrl;
    }

    /**
     * Get Active
     *
     * @return int
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set Active
     *
     * @param string $active
     */
    public function setActive($active)
    {
        $this->active = $active;
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
     * Get Affiliates
     *
     * @return Affiliates
     */
    public function getAffiliates()
    {
        return $this->affiliates;
    }

}