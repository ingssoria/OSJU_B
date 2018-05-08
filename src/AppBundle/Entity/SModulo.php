<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SModulo
 *
 * @ORM\Table(name="s_modulo", uniqueConstraints={@ORM\UniqueConstraint(name="s_modulo_nombre_modulo_key", columns={"nombre_modulo"})})
 * @ORM\Entity
 */
class SModulo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_modulo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="s_modulo_id_modulo_seq", allocationSize=1, initialValue=1)
     */
    private $idModulo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_modulo", type="string", length=255, nullable=false)
     */
    private $nombreModulo;


}

