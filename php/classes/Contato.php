<?php

/**
 * Description of Contato
 *
 * @author Suleimane
 */

class Contato {
    
    private $telefone;
    private $celular;
    private $email;
    
    function __construct($telefone, $celular, $email) {
        $this->telefone = $telefone;
        $this->celular = $celular;
        $this->email = $email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getCelular() {
        return $this->celular;
    }

    function getEmail() {
        return $this->email;
    }



}
