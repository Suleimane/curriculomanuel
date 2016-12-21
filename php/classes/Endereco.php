<?php

/**
 * Description of Endereco
 *
 * @author Suleimane
 */

class Endereco {
    
   private $estado;
   private $cidade;
   private $logradouro;
   private $numero;
   
   function __construct($estado, $cidade, $logradouro, $numero) {
       $this->estado = $estado;
       $this->cidade = $cidade;
       $this->logradouro = $logradouro;
       $this->numero = $numero;
   }
   
   function getEstado() {
       return $this->estado;
   }

   function getCidade() {
       return $this->cidade;
   }

   function getLogradouro() {
       return $this->logradouro;
   }

   function getNumero() {
       return $this->numero;
   }

}
