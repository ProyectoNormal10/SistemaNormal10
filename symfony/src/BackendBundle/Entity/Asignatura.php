<?php

namespace BackendBundle\Entity;

/**
 * Asignatura
 */
class Asignatura
{
    /**
     * @var integer
     */
    private $idAsignura;

    /**
     * @var integer
     */
    private $idPlan;

    /**
     * @var integer
     */
    private $idDocente;

    /**
     * @var string
     */
    private $descripcionAsignatura;


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
     * Set idPlan
     *
     * @param integer $idPlan
     *
     * @return Asignatura
     */
    public function setIdPlan($idPlan)
    {
        $this->idPlan = $idPlan;

        return $this;
    }

    /**
     * Get idPlan
     *
     * @return integer
     */
    public function getIdPlan()
    {
        return $this->idPlan;
    }

    /**
     * Set idDocente
     *
     * @param integer $idDocente
     *
     * @return Asignatura
     */
    public function setIdDocente($idDocente)
    {
        $this->idDocente = $idDocente;

        return $this;
    }

    /**
     * Get idDocente
     *
     * @return integer
     */
    public function getIdDocente()
    {
        return $this->idDocente;
    }

    /**
     * Set descripcionAsignatura
     *
     * @param string $descripcionAsignatura
     *
     * @return Asignatura
     */
    public function setDescripcionAsignatura($descripcionAsignatura)
    {
        $this->descripcionAsignatura = $descripcionAsignatura;

        return $this;
    }

    /**
     * Get descripcionAsignatura
     *
     * @return string
     */
    public function getDescripcionAsignatura()
    {
        return $this->descripcionAsignatura;
    }
}

