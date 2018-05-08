<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnidadNegocio
 *
 * @ORM\Table(name="unidad_negocio", indexes={@ORM\Index(name="IDX_457CA3A98F45F0C2", columns={"id_tipo_unidad_negocio"})})
 * @ORM\Entity
 */
class UnidadNegocio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_unidad_negocio", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="unidad_negocio_id_unidad_negocio_seq", allocationSize=1, initialValue=1)
     */
    private $idUnidadNegocio;

    /**
     * @var \AppBundle\Entity\NUnidadNegocio
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\NUnidadNegocio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_unidad_negocio", referencedColumnName="id_tipo_unidad_negocio")
     * })
     */
    private $idTipoUnidadNegocio;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @return int
     */
    public function getIdUnidadNegocio()
    {
        return $this->idUnidadNegocio;
    }

    /**
     * @return NUnidadNegocio
     */
    public function getIdTipoUnidadNegocio()
    {
        return $this->idTipoUnidadNegocio;
    }

    /**
     * @param NUnidadNegocio $idTipoUnidadNegocio
     */
    public function setIdTipoUnidadNegocio($idTipoUnidadNegocio)
    {
        $this->idTipoUnidadNegocio = $idTipoUnidadNegocio;
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


}

