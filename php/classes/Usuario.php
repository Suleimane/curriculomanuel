<?php

/**
 * Description of Usuario
 *
 * @author Suleimane
 */

class Usuario {
    
    private $nome;
    private $idade;
    private $nacionalidade;
    private $estadoCivil;
    
    private $endereco;
    private $contato;
    private $curriculo;
            
    function __construct($nome, $idade, $nacionalidade, $estadoCivil, $endereco, $contato, $curriculo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->nacionalidade = $nacionalidade;
        $this->estadoCivil = $estadoCivil;
        $this->endereco = $endereco;
        $this->contato = $contato;
        $this->curriculo = $curriculo;
    }
    
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getEstadoCivil() {
        return $this->estadoCivil;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getContato() {
        return $this->contato;
    }

    function getCurriculo() {
        return $this->curriculo;
    }

}
