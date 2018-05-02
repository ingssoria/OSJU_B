<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * membership
 *
 * @ORM\Table(name="membership")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\membershipRepository")
 */
class membership
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id

     * One membership has One user.
     * @ORM\OneToOne (targetEntity = "users", mappedBy = "user_id")
     */
    private $user_id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdate", type="datetime")
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmationtoken", type="string", length=255)
     */
    private $confirmationtoken;

    /**
     * @var bool
     *
     * @ORM\Column(name="isconfirmed", type="boolean", nullable=true)
     */
    private $isconfirmed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastpasswordfailuredate", type="datetime", nullable=true)
     */
    private $lastpasswordfailuredate;

    /**
     * @var int
     *
     * @ORM\Column(name="passwordfailuresincelastsucces", type="integer", nullable=true)
     */
    private $passwordfailuresincelastsucces;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="passwordchangedate", type="datetime", nullable=true)
     */
    private $passwordchangedate;

    /**
     * @var string
     *
     * @ORM\Column(name="passwordverificationtoken", type="string", length=255)
     */
    private $passwordverificationtoken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="passwordverificationtokenexpirationdate", type="datetime")
     */
    private $passwordverificationtokenexpirationdate;


    /**
     * Get user_id
     *
     * @return int
     */
    public function getUserid()
    {
        return $this->user_id;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     *
     * @return membership
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;

        return $this;
    }

    /**
     * Get createdate
     *
     * @return \DateTime
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }

    /**
     * Set confirmationtoken
     *
     * @param string $confirmationtoken
     *
     * @return membership
     */
    public function setConfirmationtoken($confirmationtoken)
    {
        $this->confirmationtoken = $confirmationtoken;

        return $this;
    }

    /**
     * Get confirmationtoken
     *
     * @return string
     */
    public function getConfirmationtoken()
    {
        return $this->confirmationtoken;
    }

    /**
     * Set isconfirmed
     *
     * @param boolean $isconfirmed
     *
     * @return membership
     */
    public function setIsconfirmed($isconfirmed)
    {
        $this->isconfirmed = $isconfirmed;

        return $this;
    }

    /**
     * Get isconfirmed
     *
     * @return bool
     */
    public function getIsconfirmed()
    {
        return $this->isconfirmed;
    }

    /**
     * Set lastpasswordfailuredate
     *
     * @param \DateTime $lastpasswordfailuredate
     *
     * @return membership
     */
    public function setLastpasswordfailuredate($lastpasswordfailuredate)
    {
        $this->lastpasswordfailuredate = $lastpasswordfailuredate;

        return $this;
    }

    /**
     * Get lastpasswordfailuredate
     *
     * @return \DateTime
     */
    public function getLastpasswordfailuredate()
    {
        return $this->lastpasswordfailuredate;
    }

    /**
     * Set passwordfailuresincelastsucces
     *
     * @param integer $passwordfailuresincelastsucces
     *
     * @return membership
     */
    public function setPasswordfailuresincelastsucces($passwordfailuresincelastsucces)
    {
        $this->passwordfailuresincelastsucces = $passwordfailuresincelastsucces;

        return $this;
    }

    /**
     * Get passwordfailuresincelastsucces
     *
     * @return int
     */
    public function getPasswordfailuresincelastsucces()
    {
        return $this->passwordfailuresincelastsucces;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return membership
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set passwordchangedate
     *
     * @param \DateTime $passwordchangedate
     *
     * @return membership
     */
    public function setPasswordchangedate($passwordchangedate)
    {
        $this->passwordchangedate = $passwordchangedate;

        return $this;
    }

    /**
     * Get passwordchangedate
     *
     * @return \DateTime
     */
    public function getPasswordchangedate()
    {
        return $this->passwordchangedate;
    }

    /**
     * Set passwordverificationtoken
     *
     * @param string $passwordverificationtoken
     *
     * @return membership
     */
    public function setPasswordverificationtoken($passwordverificationtoken)
    {
        $this->passwordverificationtoken = $passwordverificationtoken;

        return $this;
    }

    /**
     * Get passwordverificationtoken
     *
     * @return string
     */
    public function getPasswordverificationtoken()
    {
        return $this->passwordverificationtoken;
    }

    /**
     * Set passwordverificationtokenexpirationdate
     *
     * @param \DateTime $passwordverificationtokenexpirationdate
     *
     * @return membership
     */
    public function setPasswordverificationtokenexpirationdate($passwordverificationtokenexpirationdate)
    {
        $this->passwordverificationtokenexpirationdate = $passwordverificationtokenexpirationdate;

        return $this;
    }

    /**
     * Get passwordverificationtokenexpirationdate
     *
     * @return \DateTime
     */
    public function getPasswordverificationtokenexpirationdate()
    {
        return $this->passwordverificationtokenexpirationdate;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return membership
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;

        return $this;
    }
}
