<?php
    include_once('Pessoa.php');

    /**
     * Subclasse Engenheiro com propriedades da Superclasse Pessoa e mais a propriedade crea
     * @author Oziel
     * @version 1.0
     * @package pacote
     */
    class Engenheiro extends Pessoa{
        private $crea;

        /**
         * Método para acessar a propriedade crea da subclasse Engenheiro
         * @access public
         * @return String crea
         */
        public function getCrea(){ 
            return $crea; 
        }

        /**
         * Método para modificar o valor da propriedade crea da subclasse Engenheiro
         * @access public
         * @param String crea
         */ 
        public function setCrea($crea){ 
            $this->crea = $crea; 
        }


    }
?>