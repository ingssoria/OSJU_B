<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="producto", indexes={@ORM\Index(name="IDX_A7BB06151E8880DB", columns={"id_clasificacion_producto"}), @ORM\Index(name="IDX_A7BB0615CF568DB9", columns={"id_tipo_producto"}), @ORM\Index(name="IDX_A7BB061574D3CB74", columns={"id_desarrollo"})})
 * @ORM\Entity
 */
class Producto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_producto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="producto_id_producto_seq", allocationSize=1, initialValue=1)
     */
    private $idProducto;

    /**
     * @var \AppBundle\Entity\NClasificacionProducto
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\NClasificacionProducto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_clasificacion_producto", referencedColumnName="id_clasificacion_producto")
     * })
     */
    private $idClasificacionProducto;

    /**
     * @var \AppBundle\Entity\NTipoProducto
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\NTipoProducto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_producto", referencedColumnName="id_tipo_producto")
     * })
     */
    private $idTipoProducto;

    /**
     * @var \AppBundle\Entity\Desarrollo
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Desarrollo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_desarrollo", referencedColumnName="id_desarrollo")
     * })
     */
    private $idDesarrollo;


}

