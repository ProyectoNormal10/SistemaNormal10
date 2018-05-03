<?php

namespace BackendBundle\Entity;

/**
 * Alumno
 */
class Alumno
{
    /**
     * @var integer
     */
    private $idAlumno;

    /**
     * @var integer
     */
    private $idPlan;

    /**
     * @var integer
     */
    private $idUsuario;

    /**
     * @var integer
     */
    private $dni;

    /**
     * @var string
     */
    private $nombreApellido;

    /**
     * @var string
     */
    private $ingreso;


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
     * Set idPlan
     *
     * @param integer $idPlan
     *
     * @return Alumno
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
     * Set idUsuario
     *
     * @param integer $idUsuario
     *
     * @return Alumno
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
     * Set dni
     *
     * @param integer $dni
     *
     * @return Alumno
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return integer
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set nombreApellido
     *
     * @param string $nombreApellido
     *
     * @return Alumno
     */
    public function setNombreApellido($nombreApellido)
    {
        $this->nombreApellido = $nombreApellido;

        return $this;
    }

    /**
     * Get nombreApellido
     *
     * @return string
     */
    public function getNombreApellido()
    {
        return $this->nombreApellido;
    }

    /**
     * Set ingreso
     *
     * @param string $ingreso
     *
     * @return Alumno
     */
    public function setIngreso($ingreso)
    {
        $this->ingreso = $ingreso;

        return $this;
    }

    /**
     * Get ingreso
     *
     * @return string
     */
    public function getIngreso()
    {
        return $this->ingreso;
    }
}

