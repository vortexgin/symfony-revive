<?php

namespace Vortexgin\ReviveBundle\Model;

class Clients implements ClientsInterface
{

    /**
     * @var int $id
     */
    protected $id;

    /**
     * @var Agency
     */
    protected $agency;

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
     * @var string $report
     */
    protected $report;

    /**
     * @var int $reportInterval
     */
    protected $reportInterval;

    /**
     * @var \DateTime $reportLastDate
     */
    protected $reportLastDate;

    /**
     * @var string $reportDeactivate
     */
    protected $reportDeactivate;

    /**
     * @var string $comments
     */
    protected $comments;

    /**
     * @var \DateTime $updated
     */
    protected $updated;

    /**
     * @var int $anAdNetworkId
     */
    protected $anAdNetworkId;

    /**
     * @var int $asAdvertisorId
     */
    protected $asAdvertisorId;

    /**
     * @var int $account
     */
    protected $account;

    /**
     * @var int $advertisorLimitation
     */
    protected $advertisorLimitation;

    /**
     * @var int $type
     */
    protected $type;

    /**
     * @var Campaigns $campaigns
     */
    protected $campaigns;

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
     * Get Report
     *
     * @return string
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * Set Report
     *
     * @param string $report
     */
    public function setReport($report)
    {
        $this->report = $report;
    }

    /**
     * Get Report Interval
     *
     * @return int
     */
    public function getReportInterval()
    {
        return $this->reportInterval;
    }

    /**
     * Set Report Interval
     *
     * @param int $reportInterval
     */
    public function setReportInterval($reportInterval)
    {
        $this->reportInterval = $reportInterval;
    }

    /**
     * Get Report Last Date
     *
     * @return \DateTime
     */
    public function getReportLastDate()
    {
        return $this->reportLastDate;
    }

    /**
     * Set Report Last Date
     *
     * @param \DateTime $reportLastDate
     */
    public function setReportLastDate($reportLastDate)
    {
        $this->reportLastDate = $reportLastDate;
    }

    /**
     * Get Report Deactivate
     *
     * @return string
     */
    public function getReportDeactivate()
    {
        return $this->reportDeactivate;
    }

    /**
     * Set Report Deactivate
     *
     * @param string $reportDeactivate
     */
    public function setReportDeactivate($reportDeactivate)
    {
        $this->reportDeactivate = $reportDeactivate;
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
     * Get An Ad Network ID
     *
     * @return int
     */
    public function getAnAdNetworkId()
    {
        return $this->anAdNetworkId;
    }

    /**
     * Set An Ad Network ID
     *
     * @param int $anAdNetworkId
     */
    public function setAnAdNetworkId($anAdNetworkId)
    {
        $this->anAdNetworkId = $anAdNetworkId;
    }

    /**
     * Get As Advertisor ID
     *
     * @return int
     */
    public function getAsAdvertisorId()
    {
        return $this->asAdvertisorId;
    }

    /**
     * Set As Advertisor ID
     *
     * @param int $asAdvertisorId
     */
    public function setAsAdvertisorId($asAdvertisorId)
    {
        $this->asAdvertisorId = $asAdvertisorId;
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
     * Get Advertisor Limitation
     *
     * @return int
     */
    public function getAdvertisorLimitation()
    {
        return $this->advertisorLimitation;
    }

    /**
     * Set Advertisor Limitation
     *
     * @param int $advertisorLimitation
     */
    public function setAdvertisorLimitation($advertisorLimitation)
    {
        $this->advertisorLimitation = $advertisorLimitation;
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
     * Get Campaigns
     *
     * @return Campaigns
     */
    public function getCampaigns()
    {
        return $this->campaigns;
    }

}