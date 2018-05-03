<?php

namespace BackendBundle\Entity;

/**
 * Correlativas
 */
class Correlativas
{
    /**
     * @var integer
     */
    private $idCorrelativa;

    /**
     * @var string
     */
    private $descripcionCorrelativa;


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
     * Set descripcionCorrelativa
     *
     * @param string $descripcionCorrelativa
     *
     * @return Correlativas
     */
    public function setDescripcionCorrelativa($descripcionCorrelativa)
    {
        $this->descripcionCorrelativa = $descripcionCorrelativa;

        return $this;
    }

    /**
     * Get descripcionCorrelativa
     *
     * @return string
     */
    public function getDescripcionCorrelativa()
    {
        return $this->descripcionCorrelativa;
    }
}

