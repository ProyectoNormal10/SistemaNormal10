<?php

namespace BackendBundle\Entity;

/**
 * Decentemesa
 */
class Decentemesa
{
    /**
     * @var integer
     */
    private $idMesa;

    /**
     * @var integer
     */
    private $idDocente;


    /**
     * Set idMesa
     *
     * @param integer $idMesa
     *
     * @return Decentemesa
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

    /**
     * Set idDocente
     *
     * @param integer $idDocente
     *
     * @return Decentemesa
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
}

