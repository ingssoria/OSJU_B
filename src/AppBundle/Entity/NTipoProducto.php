<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NTipoProducto
 *
 * @ORM\Table(name="n_tipo_producto", uniqueConstraints={@ORM\UniqueConstraint(name="n_tipo_producto_tipo_producto_key", columns={"tipo_producto"})})
 * @ORM\Entity
 */
class NTipoProducto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_producto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="n_tipo_producto_id_tipo_producto_seq", allocationSize=1, initialValue=1)
     */
    private $idTipoProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_producto", type="string", length=255, nullable=false)
     */
    private $tipoProducto;


}

