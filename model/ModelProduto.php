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
// OBS - o ModelProduto é filho do ModelPai, ou seja ele possui todas as características do Pai (atributos, métodos...)

// OBS - O ModelProduto implementa a interface IProduto, logo todos os métodos apresentados no IProduto devem ser
// construídos no ModelProduto

//    public: permite acesso a qualquer código externo a classe.
//    protected: permite acesso às classes filhas, mas proíbe a qualquer outro acesso externo.
//    private: proíbe qualquer acesso externo à própria classe, inclusive das classes filhas.
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
     * Método responsável por validar se o valor foi preenchido corretamente
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
