<?php

namespace BackendBundle\Entity;

/**
 * Docente
 */
class Docente
{
    /**
     * @var integer
     */
    private $idDocente;

    /**
     * @var integer
     */
    private $idUsuario;

    /**
     * @var string
     */
    private $nombreApellidoDocente;


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
     * Set idUsuario
     *
     * @param integer $idUsuario
     *
     * @return Docente
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return integer
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set nombreApellidoDocente
     *
     * @param string $nombreApellidoDocente
     *
     * @return Docente
     */
    public function setNombreApellidoDocente($nombreApellidoDocente)
    {
        $this->nombreApellidoDocente = $nombreApellidoDocente;

        return $this;
    }

    /**
     * Get nombreApellidoDocente
     *
     * @return string
     */
    public function getNombreApellidoDocente()
    {
        return $this->nombreApellidoDocente;
    }
}

