<?php

namespace BackendBundle\Entity;

/**
 * Correlatividades
 */
class Correlatividades
{
    /**
     * @var integer
     */
    private $idCorrelativa;

    /**
     * @var integer
     */
    private $idAsignura;


    /**
     * Set idCorrelativa
     *
     * @param integer $idCorrelativa
     *
     * @return Correlatividades
     */
    public function setIdCorrelativa($idCorrelativa)
    {
        $this->idCorrelativa = $idCorrelativa;

        return $this;
    }

    /**
     * Get idCorrelativa
     *
     * @return integer
     */
    public function getIdCorrelativa()
    {
        return $this->idCorrelativa;
    }

    /**
     * Set idAsignura
     *
     * @param integer $idAsignura
     *
     * @return Correlatividades
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
}

