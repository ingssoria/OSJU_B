<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NUnidadNegocio
 *
 * @ORM\Table(name="n_unidad_negocio", uniqueConstraints={@ORM\UniqueConstraint(name="n_unidad_negocio_nombre_key", columns={"nombre"})})
 * @ORM\Entity
 */
class NUnidadNegocio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_unidad_negocio", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="n_unidad_negocio_id_tipo_unidad_negocio_seq", allocationSize=1, initialValue=1)
     */
    private $idTipoUnidadNegocio;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;


}

