<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnidadNegocioUsuario
 *
 * @ORM\Table(name="unidad_negocio_usuario", indexes={@ORM\Index(name="IDX_799F7EF7781A1EAF", columns={"id_unidad_negocio"}), @ORM\Index(name="IDX_799F7EF7FCF8192D", columns={"id_usuario"})})
 * @ORM\Entity
 */
class UnidadNegocioUsuario
{
    /**
     * @var \AppBundle\Entity\UnidadNegocio
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\UnidadNegocio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_unidad_negocio", referencedColumnName="id_unidad_negocio")
     * })
     */
    private $idUnidadNegocio;

    /**
     * @var \AppBundle\Entity\SUsuario
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuario;


}

