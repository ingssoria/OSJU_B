<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadoProducto
 *
 * @ORM\Table(name="estado_producto", uniqueConstraints={@ORM\UniqueConstraint(name="estado_producto_estado_key", columns={"estado"})})
 * @ORM\Entity
 */
class EstadoProducto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_estado_producto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="estado_producto_id_estado_producto_seq", allocationSize=1, initialValue=1)
     */
    private $idEstadoProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255, nullable=false)
     */
    private $estado;


}

