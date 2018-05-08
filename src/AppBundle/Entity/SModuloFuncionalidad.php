<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SModuloFuncionalidad
 *
 * @ORM\Table(name="s_modulo_funcionalidad", indexes={@ORM\Index(name="IDX_15BE767CCAC67ADB", columns={"id_modulo"}), @ORM\Index(name="IDX_15BE767C19F0B6FC", columns={"id_funcionalidad"})})
 * @ORM\Entity
 */
class SModuloFuncionalidad
{
    /**
     * @var \AppBundle\Entity\SModulo
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SModulo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_modulo", referencedColumnName="id_modulo")
     * })
     */
    private $idModulo;

    /**
     * @var \AppBundle\Entity\SFuncionalidad
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SFuncionalidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_funcionalidad", referencedColumnName="id_funcionalidad")
     * })
     */
    private $idFuncionalidad;


}

