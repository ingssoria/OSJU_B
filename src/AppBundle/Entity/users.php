<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\usersRepository")
 */
class users
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * One user has One membership.
     * @ORM\OneToOne (targetEntity = "membership", mappedBy = "user_id")
     */
    private $user_id;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255, unique=true)
     */
    private $login;

    /**
    *
    *

    private  $membership_id;*/

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
     * Set login
     *
     * @param string $login
     *
     * @return users
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

}
