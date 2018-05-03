<?php

namespace BackendBundle\Entity;

/**
 * Mesa
 */
class Mesa
{
    /**
     * @var integer
     */
    private $idMesa;

    /**
     * @var integer
     */
    private $idAsignura;

    /**
     * @var string
     */
    private $turno;

    /**
     * @var \DateTime
     */
    private $fecha;


    /**
     * Get idMesa
     *
     * @return integer
     */
    public function getIdMesa()
    {
        return $this->idMesa;
    }

    /**
     * Set idAsignura
     *
     * @param integer $idAsignura
     *
     * @return Mesa
     */
    public function setIdAsignura($idAsignura)
    {
        $this->idAsignura = $idAsignura;

        return $this;
    }

    /**
     * Get idAsignura
     *
     * @return integer
     */
    public function getIdAsignura()
    {
        return $this->idAsignura;
    }

    /**
     * Set turno
     *
     * @param string $turno
     *
     * @return Mesa
     */
    public function setTurno($turno)
    {
        $this->turno = $turno;

        return $this;
    }

    /**
     * Get turno
     *
     * @return string
     */
    public function getTurno()
    {
        return $this->turno;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Mesa
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}

