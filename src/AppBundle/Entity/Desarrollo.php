<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Desarrollo
 *
 * @ORM\Table(name="desarrollo", indexes={@ORM\Index(name="IDX_D1594BA3781A1EAF", columns={"id_unidad_negocio"})})
 * @ORM\Entity
 */
class Desarrollo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_desarrollo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="desarrollo_id_desarrollo_seq", allocationSize=1, initialValue=1)
     */
    private $idDesarrollo;

    /**
     * @var \AppBundle\Entity\UnidadNegocio
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\UnidadNegocio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_unidad_negocio", referencedColumnName="id_unidad_negocio")
     * })
     */
    private $idUnidadNegocio;


}

