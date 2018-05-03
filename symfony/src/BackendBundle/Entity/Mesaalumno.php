<?php

namespace BackendBundle\Entity;

/**
 * Mesaalumno
 */
class Mesaalumno
{
    /**
     * @var integer
     */
    private $idAlumno;

    /**
     * @var integer
     */
    private $idMesa;


    /**
     * Set idAlumno
     *
     * @param integer $idAlumno
     *
     * @return Mesaalumno
     */
    public function setIdAlumno($idAlumno)
    {
        $this->idAlumno = $idAlumno;

        return $this;
    }

    /**
     * Get idAlumno
     *
     * @return integer
     */
    public function getIdAlumno()
    {
        return $this->idAlumno;
    }

    /**
     * Set idMesa
     *
     * @param integer $idMesa
     *
     * @return Mesaalumno
     */
    public function setIdMesa($idMesa)
    {
        $this->idMesa = $idMesa;

        return $this;
    }

    /**
     * Get idMesa
     *
     * @return integer
     */
    public function getIdMesa()
    {
        return $this->idMesa;
    }
}

