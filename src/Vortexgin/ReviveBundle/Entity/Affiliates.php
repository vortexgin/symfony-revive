<?php

namespace Vortexgin\ReviveBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vortexgin\ReviveBundle\Annotation as Vortexgin;
use Vortexgin\ReviveBundle\Model\Affiliates as ModelAffiliates;

/**
 * Affiliates
 *
 * @ORM\Table(name="affiliates", indexes={
 *     @ORM\Index(name="ox_affiliates_agencyid", columns={"agencyid"})
 * }, uniqueConstraints={
 *     @ORM\UniqueConstraint(name="ox_affiliates_account_id", columns={"account_id"})
 * })
 * @ORM\Entity
 * @Vortexgin\OXTable
 */
class Affiliates extends ModelAffiliates
{
    /**
     * @ORM\Column(name="affiliateid", type="integer", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Agency", inversedBy="affiliates")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agencyid", referencedColumnName="agencyid")
     * })
     */
    protected $agency = 0;

    /**
     * @ORM\ManyToOne(targetEntity="Accounts", inversedBy="affiliates")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_id", referencedColumnName="account_id")
     * })
     */
    protected $account;

    /**
     * @ORM\Column(name="name", type="string", length=255, nullable=false, options={"default" : ""})
     */
    protected $name;

    /**
     * @ORM\Column(name="mnemonic", type="string", length=5, nullable=false, options={"default" : ""})
     */
    protected $mnemonic;

    /**
     * @ORM\Column(name="comments", type="text", nullable=true)
     */
    protected $comments;

    /**
     * @ORM\Column(name="contact", type="string", length=255, nullable=true)
     */
    protected $contact;

    /**
     * @ORM\Column(name="email", type="string", length=64, nullable=false, options={"default" : ""})
     */
    protected $email;

    /**
     * @ORM\Column(name="website", type="string", length=255, nullable=true)
     */
    protected $website;

    /**
     * @ORM\Column(name="updated", type="datetime", nullable=false)
     */
    protected $updated;

    /**
     * @ORM\Column(name="oac_country_code", columnDefinition="CHAR(2) NOT NULL")
     */
    protected $oacCountryCode;

    /**
     * @ORM\Column(name="oac_language_id", type="integer", nullable=true)
     */
    protected $oacLanguageId;

    /**
     * @ORM\Column(name="oac_category_id", type="integer", nullable=true)
     */
    protected $oacCategoryId;

    /**
     * @ORM\OneToMany(targetEntity="Zones", mappedBy="affiliate")
     */
    protected $zones;

    public function __construct()
    {
    }

}
