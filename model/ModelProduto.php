<?php

include_once 'model/ModelPai.php';
include_once 'interface/IProduto.php';

/**
 * Class ModelProduto
 *
 * @author Mathias Artur Schulz
 * @since 30/03/2021
 */
class ModelProduto extends ModelPai implements IProduto
{
// OBS - o ModelProduto � filho do ModelPai, ou seja ele possui todas as caracter�sticas do Pai (atributos, m�todos...)

// OBS - O ModelProduto implementa a interface IProduto, logo todos os m�todos apresentados no IProduto devem ser
// constru�dos no ModelProduto

//    public: permite acesso a qualquer c�digo externo a classe.
//    protected: permite acesso �s classes filhas, mas pro�be a qualquer outro acesso externo.
//    private: pro�be qualquer acesso externo � pr�pria classe, inclusive das classes filhas.
    private $nome;
    private $valor;

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $valor = $this->validaValor($valor);
        $this->valor = $valor;
    }

    /**
     * M�todo respons�vel por validar se o valor foi preenchido corretamente
     *
     * @param $valor => Valor para ser validado
     * @return int
     * @author Mathias Artur Schulz
     * @since 30/03/2021
     */
    public function validaValor($valor)
    {
        if ($valor < 0) {
            return 0;
        }
        return $valor;
    }
}
