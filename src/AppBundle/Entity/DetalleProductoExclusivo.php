<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleProductoExclusivo
 *
 * @ORM\Table(name="detalle_producto_exclusivo", uniqueConstraints={@ORM\UniqueConstraint(name="detalle_producto_exclusivo_id_producto_key", columns={"id_producto"})})
 * @ORM\Entity
 */
class DetalleProductoExclusivo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_detalle_exclusivo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="detalle_producto_exclusivo_id_detalle_exclusivo_seq", allocationSize=1, initialValue=1)
     */
    private $idDetalleExclusivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_expiracion", type="date", nullable=false)
     */
    private $fechaExpiracion;

    /**
     * @var \AppBundle\Entity\Producto
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Producto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_producto", referencedColumnName="id_producto")
     * })
     */
    private $idProducto;


}

