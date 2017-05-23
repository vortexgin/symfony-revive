<?php

namespace Vortexgin\ReviveBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Vortexgin\ReviveBundle\Annotation as Vortexgin;
use Vortexgin\ReviveBundle\Model\Agency as ModelAgency;

/**
 * Agency
 *
 * @ORM\Table(name="agency", uniqueConstraints={
 *     @ORM\UniqueConstraint(name="ox_agency_account_id", columns={"account_id"})
 * })
 * @ORM\Entity
 * @Vortexgin\OXTable
 */
class Agency extends ModelAgency
{
    /**
     * @ORM\Column(name="agencyid", type="integer", columnDefinition="MEDIUMINT(9) NOT NULL")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Accounts", inversedBy="agency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_id", referencedColumnName="account_id")
     * })
     */
    protected $account;

    /**
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    protected $name;

    /**
     * @ORM\Column(name="contact", type="string", length=255, nullable=true)
     */
    protected $contact;

    /**
     * @ORM\Column(name="email", type="string", length=64, nullable=false)
     */
    protected $email;

    /**
     * @ORM\Column(name="logout_url", type="string", length=255, nullable=true)
     */
    protected $logoutUrl;

    /**
     * @ORM\Column(name="active", type="smallint", length=1, nullable=true, options={"default" : "0"})
     */
    protected $active;

    /**
     * @ORM\Column(name="updated", type="datetime", nullable=false)
     */
    protected $updated;

    /**
     * @ORM\OneToMany(targetEntity="Affiliates", mappedBy="agency", cascade={"persist"})
     */
    protected $affiliates;

    /**
     * @ORM\OneToMany(targetEntity="Clients", mappedBy="agency", cascade={"persist"})
     */
    protected $clients;

    public function __construct()
    {
        $this->affiliates = new ArrayCollection();
        $this->clients = new ArrayCollection();
    }

}
