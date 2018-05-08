<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NClasificacionProducto
 *
 * @ORM\Table(name="n_clasificacion_producto", uniqueConstraints={@ORM\UniqueConstraint(name="n_clasificacion_producto_clasificacion_key", columns={"clasificacion"})})
 * @ORM\Entity
 */
class NClasificacionProducto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_clasificacion_producto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="n_clasificacion_producto_id_clasificacion_producto_seq", allocationSize=1, initialValue=1)
     */
    private $idClasificacionProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="clasificacion", type="string", length=255, nullable=false)
     */
    private $clasificacion;


}

