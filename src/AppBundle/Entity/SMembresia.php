<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SMembresia
 *
 * @ORM\Table(name="s_membresia")
 * @ORM\Entity
 */
class SMembresia
{
    /**
     * @var string
     *
     * @ORM\Column(name="contrasenna", type="string", length=255, nullable=false)
     */
    private $contrasenna;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var \AppBundle\Entity\SUsuario
     *
     * @ORM\Column(name="id_usuario", type="integer")
     * @ORM\Id
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\SUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario", unique=true)
     * })
     */
    private $idUsuario;


}

