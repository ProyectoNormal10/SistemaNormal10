<?php

namespace BackendBundle\Entity;

/**
 * Asignaturasaprobadas
 */
class Asignaturasaprobadas
{
    /**
     * @var integer
     */
    private $idAprobadas;

    /**
     * @var integer
     */
    private $idAsignura;

    /**
     * @var integer
     */
    private $idMesa;

    /**
     * @var integer
     */
    private $idAlumno;

    /**
     * @var string
     */
    private $nroLibro;

    /**
     * @var string
     */
    private $nroFolio;

    /**
     * @var string
     */
    private $estado;


    /**
     * Get idAprobadas
     *
     * @return integer
     */
    public function getIdAprobadas()
    {
        return $this->idAprobadas;
    }

    /**
     * Set idAsignura
     *
     * @param integer $idAsignura
     *
     * @return Asignaturasaprobadas
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
     * Set idMesa
     *
     * @param integer $idMesa
     *
     * @return Asignaturasaprobadas
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
     * Set idAlumno
     *
     * @param integer $idAlumno
     *
     * @return Asignaturasaprobadas
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
     * Set nroLibro
     *
     * @param string $nroLibro
     *
     * @return Asignaturasaprobadas
     */
    public function setNroLibro($nroLibro)
    {
        $this->nroLibro = $nroLibro;

        return $this;
    }

    /**
     * Get nroLibro
     *
     * @return string
     */
    public function getNroLibro()
    {
        return $this->nroLibro;
    }

    /**
     * Set nroFolio
     *
     * @param string $nroFolio
     *
     * @return Asignaturasaprobadas
     */
    public function setNroFolio($nroFolio)
    {
        $this->nroFolio = $nroFolio;

        return $this;
    }

    /**
     * Get nroFolio
     *
     * @return string
     */
    public function getNroFolio()
    {
        return $this->nroFolio;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Asignaturasaprobadas
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }
}

