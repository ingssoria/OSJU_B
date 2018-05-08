<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductoEstadoProducto
 *
 * @ORM\Table(name="producto_estado_producto", indexes={@ORM\Index(name="IDX_9CE89D6FF760EA80", columns={"id_producto"}), @ORM\Index(name="IDX_9CE89D6FBF137670", columns={"id_estado_producto"})})
 * @ORM\Entity
 */
class ProductoEstadoProducto
{
    /**
     * @var \AppBundle\Entity\Producto
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Producto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_producto", referencedColumnName="id_producto")
     * })
     */
    private $idProducto;

    /**
     * @var \AppBundle\Entity\EstadoProducto
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\EstadoProducto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estado_producto", referencedColumnName="id_estado_producto")
     * })
     */
    private $idEstadoProducto;


}

