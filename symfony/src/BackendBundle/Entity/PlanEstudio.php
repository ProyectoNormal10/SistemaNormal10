<?php

namespace BackendBundle\Entity;

/**
 * PlanEstudio
 */
class PlanEstudio
{
    /**
     * @var integer
     */
    private $idPlan;

    /**
     * @var string
     */
    private $descripcionPlan;


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
     * Set descripcionPlan
     *
     * @param string $descripcionPlan
     *
     * @return PlanEstudio
     */
    public function setDescripcionPlan($descripcionPlan)
    {
        $this->descripcionPlan = $descripcionPlan;

        return $this;
    }

    /**
     * Get descripcionPlan
     *
     * @return string
     */
    public function getDescripcionPlan()
    {
        return $this->descripcionPlan;
    }
}

