<?php 
namespace App;
class Carro {
    protected String $nome;
    private String $cor;
    private String $tipo;
    private String $ano;

    // public function __construct($cor, $tipo, $ano) {
    //     $this->cor = $cor;
    //     $this->tipo = $tipo;
    //     $this->ano = $ano;
    // }
    public function exibirDados(){
        return "Nome: $this->nome, Cor: $this->cor, Tipo: $this->tipo, Ano: $this->ano";
    }

    /**
     * Get the value of cor
     */
    public function getCor(): String
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     */
    public function setCor(String $cor): self
    {
        $this->cor = $cor;
        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo(): String
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo(String $tipo): self
    {
        $this->tipo = $tipo;
        return $this;
    }

    /**
     * Get the value of ano
     */
    public function getAno(): String
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     */
    public function setAno(String $ano): self
    {
        $this->ano = $ano;
        return $this;
    }
}


?>