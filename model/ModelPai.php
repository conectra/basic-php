<?php

/**
 * Class Pai
 *
 * @author Mathias Artur Schulz
 * @since 30/03/2021
 */
class ModelPai
{
    private $codigo;
    private $codigoEmpresa;

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @return mixed
     */
    public function getCodigoEmpresa()
    {
        return $this->codigoEmpresa;
    }

    /**
     * @param mixed $codigoEmpresa
     */
    public function setCodigoEmpresa($codigoEmpresa)
    {
        $this->codigoEmpresa = $codigoEmpresa;
    }
}
