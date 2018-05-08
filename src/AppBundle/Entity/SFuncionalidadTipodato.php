<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SFuncionalidadTipodato
 *
 * @ORM\Table(name="s_funcionalidad_tipodato", indexes={@ORM\Index(name="IDX_A09B3C2D19F0B6FC", columns={"id_funcionalidad"}), @ORM\Index(name="IDX_A09B3C2DC051B506", columns={"id_tipo_dato"})})
 * @ORM\Entity
 */
class SFuncionalidadTipodato
{
    /**
     * @var \AppBundle\Entity\SFuncionalidad
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SFuncionalidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_funcionalidad", referencedColumnName="id_funcionalidad")
     * })
     */
    private $idFuncionalidad;

    /**
     * @var \AppBundle\Entity\STipoDato
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\STipoDato")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_dato", referencedColumnName="id_tipo_dato")
     * })
     */
    private $idTipoDato;


}

