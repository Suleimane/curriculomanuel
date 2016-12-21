<?php

/**
 * Description of Curriculo
 *
 * @author Suleimane
 */

class Curriculo{
    
    private $objetivos = [];
    private $formacoes = [];
    private $experiencas = [];
    private $resumo = [];
    private $qualificacoes = [];
    private $informacoes = [];
    
    function getObjetivos() {
        return $this->objetivos;
    }

    function getFormacoes() {
        return $this->formacoes;
    }

    function getExperiencas() {
        return $this->experiencas;
    }

    function getResumo() {
        return $this->resumo;
    }

    function getQualificacoes() {
        return $this->qualificacoes;
    }

    function getInformacoes() {
        return $this->informacoes;
    }

    function setObjetivos($objetivos) {
        $this->objetivos[] = $objetivos;
    }

    function setFormacoes($formacoes) {
        $this->formacoes[] = $formacoes;
    }

    function setExperiencas($experiencas) {
        $this->experiencas[] = $experiencas;
    }

    function setResumo($resumo) {
        $this->resumo[] = $resumo;
    }

    function setQualificacoes($qualificacoes) {
        $this->qualificacoes[] = $qualificacoes;
    }

    function setInformacoes($informacoes) {
        $this->informacoes[] = $informacoes;
    }


}
