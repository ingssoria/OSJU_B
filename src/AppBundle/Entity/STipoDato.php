<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * STipoDato
 *
 * @ORM\Table(name="s_tipo_dato", uniqueConstraints={@ORM\UniqueConstraint(name="s_tipo_dato_tipo_dato_key", columns={"tipo_dato"})})
 * @ORM\Entity
 */
class STipoDato
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_dato", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="s_tipo_dato_id_tipo_dato_seq", allocationSize=1, initialValue=1)
     */
    private $idTipoDato;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_dato", type="string", length=50, nullable=false)
     */
    private $tipoDato;


}

