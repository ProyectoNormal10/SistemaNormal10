<?php

namespace BackendBundle\Entity;

/**
 * Usuario
 */
class Usuario
{
    /**
     * @var integer
     */
    private $idUsuario;

    /**
     * @var string
     */
    private $correoUsuario;

    /**
     * @var string
     */
    private $passwordUsuario;

    /**
     * @var string
     */
    private $rol;


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
     * Set correoUsuario
     *
     * @param string $correoUsuario
     *
     * @return Usuario
     */
    public function setCorreoUsuario($correoUsuario)
    {
        $this->correoUsuario = $correoUsuario;

        return $this;
    }

    /**
     * Get correoUsuario
     *
     * @return string
     */
    public function getCorreoUsuario()
    {
        return $this->correoUsuario;
    }

    /**
     * Set passwordUsuario
     *
     * @param string $passwordUsuario
     *
     * @return Usuario
     */
    public function setPasswordUsuario($passwordUsuario)
    {
        $this->passwordUsuario = $passwordUsuario;

        return $this;
    }

    /**
     * Get passwordUsuario
     *
     * @return string
     */
    public function getPasswordUsuario()
    {
        return $this->passwordUsuario;
    }

    /**
     * Set rol
     *
     * @param string $rol
     *
     * @return Usuario
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return string
     */
    public function getRol()
    {
        return $this->rol;
    }
}

