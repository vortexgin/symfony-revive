<?php

namespace Vortexgin\ReviveBundle\Model;

class Accounts implements AccountsInterface
{

    /**
     * @var int $id
     */
    protected $id;

    /**
     * @var string $type
     */
    protected $type;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var string $password
     */
    protected $password;

    /**
     * @var string $ticket
     */
    protected $ticket;

    /**
     * @var Affiliates $affiliate
     */
    protected $affiliates;

    /**
     * @var Agency $agency
     */
    protected $agency;

    /**
     * @var Clients $clients
     */
    protected $clients;

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
     * Get Type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set Type
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
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
     * Get Password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set Password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get Ticket
     *
     * @return string
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Set Ticket
     *
     * @param string $ticket
     */
    public function setTicket($ticket)
    {
        $this->ticket = $ticket;
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
     * Get Clients
     *
     * @return Clients
     */
    public function getClients()
    {
        return $this->clients;
    }

}