<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Experiencia
 *
 * @author Suleimane
 */
class Experiencia {
    
    private $empresa;
    private $periodo;
    private $cargo;
    private $atividade;
    
    function __construct($empresa, $periodo, $cargo, $atividade) {
        $this->empresa = $empresa;
        $this->periodo = $periodo;
        $this->cargo = $cargo;
        $this->atividade = $atividade;
    }
    
    function getEmpresa() {
        return $this->empresa;
    }

    function getPeriodo() {
        return $this->periodo;
    }

    function getCargo() {
        return $this->cargo;
    }

    function getAtividade() {
        return $this->atividade;
    }


}
