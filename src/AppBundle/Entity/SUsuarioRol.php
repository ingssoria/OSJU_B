<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SUsuarioRol
 *
 * @ORM\Table(name="s_usuario_rol", indexes={@ORM\Index(name="IDX_5FCFF3FDA82FCAAC", columns={"id_susuario"}), @ORM\Index(name="IDX_5FCFF3FD22FA2A49", columns={"id_srol"})})
 * @ORM\Entity
 */
class SUsuarioRol
{
    /**
     * @var \AppBundle\Entity\SUsuario
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_susuario", referencedColumnName="id_usuario")
     * })
     */
    private $idSusuario;

    /**
     * @var \AppBundle\Entity\SRol
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SRol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_srol", referencedColumnName="id_rol")
     * })
     */
    private $idSrol;


}

