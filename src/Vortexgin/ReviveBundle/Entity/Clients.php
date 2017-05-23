<?php

namespace Vortexgin\ReviveBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Vortexgin\ReviveBundle\Annotation as Vortexgin;
use Vortexgin\ReviveBundle\Model\Clients as ModelClients;

/**
 * Clients
 *
 * @ORM\Table(name="clients", indexes={
 *     @ORM\Index(name="ox_clients_agencyid_type", columns={"agencyid", "type"})
 * }, uniqueConstraints={
 *     @ORM\UniqueConstraint(name="ox_clients_account_id", columns={"account_id"})
 * })
 * @ORM\Entity
 * @Vortexgin\OXTable
 */
class Clients extends ModelClients
{
    /**
     * @ORM\Column(name="clientid", type="integer", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Agency", inversedBy="clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agencyid", referencedColumnName="agencyid")
     * })
     */
    protected $agency = 0;

    /**
     * @ORM\ManyToOne(targetEntity="Accounts", inversedBy="clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_id", referencedColumnName="account_id")
     * })
     */
    protected $account;

    /**
     * @ORM\Column(name="clientname", type="string", length=255, nullable=false, options={"default" : ""})
     */
    protected $name;

    /**
     * @ORM\Column(name="contact", type="string", length=255, nullable=true)
     */
    protected $contact;

    /**
     * @ORM\Column(name="email", type="string", length=64, nullable=false, options={"default" : ""})
     */
    protected $email;

    /**
     * @ORM\Column(name="report", columnDefinition="enum('t','f') NOT NULL DEFAULT 't'")
     */
    protected $report;

    /**
     * @ORM\Column(name="reportinterval", columnDefinition="mediumint(9) NOT NULL DEFAULT '7'")
     */
    protected $reportInterval;

    /**
     * @ORM\Column(name="reportlastdate", type="date", nullable=false, options={"default" : "0000-00-00"})
     */
    protected $reportLastDate;

    /**
     * @ORM\Column(name="reportdeactivate", columnDefinition="enum('t','f') NOT NULL DEFAULT 't'")
     */
    protected $reportDeactivate;

    /**
     * @ORM\Column(name="comments", type="text", nullable=true)
     */
    protected $comments;

    /**
     * @ORM\Column(name="updated", type="datetime", nullable=false)
     */
    protected $updated;

    /**
     * @ORM\Column(name="an_adnetwork_id", type="integer", nullable=true)
     */
    protected $anAdNetworkId;

    /**
     * @ORM\Column(name="as_advertiser_id", type="integer", nullable=true)
     */
    protected $asAdvertisorId;

    /**
     * @ORM\Column(name="advertiser_limitation", columnDefinition="tinyint(1) NOT NULL DEFAULT '0'")
     */
    protected $advertisorLimitation;

    /**
     * @ORM\Column(name="type", columnDefinition="tinyint(4) NOT NULL DEFAULT '0'")
     */
    protected $type;

    /**
     * @ORM\OneToMany(targetEntity="Campaigns", mappedBy="client")
     */
    protected $campaigns;

    public function __construct()
    {
        $this->campaigns = new ArrayCollection();
    }

}
