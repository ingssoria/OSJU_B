<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SFuncionalidad
 *
 * @ORM\Table(name="s_funcionalidad", uniqueConstraints={@ORM\UniqueConstraint(name="s_funcionalidad_funcionalidad_key", columns={"funcionalidad"})})
 * @ORM\Entity
 */
class SFuncionalidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_funcionalidad", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="s_funcionalidad_id_funcionalidad_seq", allocationSize=1, initialValue=1)
     */
    private $idFuncionalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="funcionalidad", type="string", length=255, nullable=false)
     */
    private $funcionalidad;


}

