<?php

namespace Vortexgin\ReviveBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Vortexgin\ReviveBundle\Annotation as Vortexgin;
use Vortexgin\ReviveBundle\Model\Accounts as ModelAccounts;

/**
 * Accounts
 *
 * @ORM\Table(name="accounts", indexes={
 *     @ORM\Index(name="ox_accounts_account_type", columns={"account_type"})
 * })
 * @ORM\Entity
 * @Vortexgin\OXTable
 */
class Accounts extends ModelAccounts
{
    /**
     * @ORM\Column(name="account_id", type="integer", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(name="account_type", type="string", length=16, nullable=false)
     */
    protected $type;

    /**
     * @ORM\Column(name="account_name", type="string", length=255, nullable=true)
     */
    protected $name;

    /**
     * @ORM\Column(name="m2m_password", type="string", length=32, nullable=true)
     */
    protected $password;

    /**
     * @ORM\Column(name="m2m_ticket", type="string", length=32, nullable=true)
     */
    protected $ticket;

    /**
     * @ORM\OneToMany(targetEntity="Affiliates", mappedBy="account", cascade={"persist"})
     */
    protected $affiliates;

    /**
     * @ORM\OneToMany(targetEntity="Agency", mappedBy="account", cascade={"persist"})
     */
    protected $agency;

    /**
     * @ORM\OneToMany(targetEntity="Clients", mappedBy="account", cascade={"persist"})
     */
    protected $clients;

    public function __construct()
    {
        $this->affiliates = new ArrayCollection();
    }

}
