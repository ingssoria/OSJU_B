<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SRolModulo
 *
 * @ORM\Table(name="s_rol_modulo", indexes={@ORM\Index(name="IDX_BDCBE56690F1D76D", columns={"id_rol"}), @ORM\Index(name="IDX_BDCBE566CAC67ADB", columns={"id_modulo"})})
 * @ORM\Entity
 */
class SRolModulo
{
    /**
     * @var \AppBundle\Entity\SRol
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SRol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rol", referencedColumnName="id_rol")
     * })
     */
    private $idRol;

    /**
     * @var \AppBundle\Entity\SModulo
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SModulo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_modulo", referencedColumnName="id_modulo")
     * })
     */
    private $idModulo;


}

