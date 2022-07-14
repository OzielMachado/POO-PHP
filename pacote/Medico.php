<?php
    include_once('Pessoa.php');

    /**
     * Subclasse Medico com propriedades da Superclasse Pessoa e mais a propriedade crm
     * @author Oziel
     * @version 1.0
     * @package pacote
     */
    class Medico extends Pessoa{
        private $crm;

        /**
         * Método para acessar a propriedade crm da subclasse Medico
         * @access public
         * @return String crm
         */
        public function getCrm(){
            return $this->crm;
        }

        /**
         * Método para modificar o valor da propriedade crm da subclasse Medico
         * @access public
         * @param String crm
         */ 
        public function setCrm($crm){
            $this->crm = $crm;
        }
    }
?>