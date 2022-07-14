<?php

    /**
     * Superclasse Pessoa com propriedades nome, data de nascimento, cpf e rg
     * @author Oziel
     * @version 1.0
     * @package pacote
     */
    class Pessoa{
        private $nome;
        private $dataNasc;
        private $cpf;
        private $rg;

        /**
         * Método para acessar a propriedade nome da classe
         * @access public
         * @return nome
         */
        public function getNome(){ 
            return $this->nome; 
        }

        /**
         * Método para alterar valor da propriedade nome da classe Pessoa
         * @access public
         * @param nome
         */
        public function setNome($nome){ 
            $this->nome = $nome;
        }

        /**
         * Método para acessar a propriedade data de nascimento da classe Pessoa
         * @access public
         * @return dataNasc
         */
        public function getDataNasc(){ 
            return $this->dataNasc; 
        }

        /**
         * Método para modificar valor da propriedade data de nascimento da classe Pessoa
         * @access public
         * @param dataNasc
         */
        public function setDataNasc($dataNasc){
            $this->dataNasc = $dataNasc;
        }

        /**
         * Método para acessar a propriedade cpf da classe Pessoa
         * @access public
         * @return cpf
         */
        public function getCpf(){ 
            return $this->cpf;
        }

        /**
         * Método para modificar valor da propriedade cpf da classe Pessoa
         * @access public
         * @param cpf
         */
        public function setCpf($cpf){
            $this->cpf = $cpf; 
        }

        /**
         * Método para acessar o valor da propriedade rg da classe Pessoa
         * @access public
         * @return rg
         */
        public function getRg(){
            return $this->rg;
        }

        /**
         * Método para modificar o valor da propriedade rg da classe Pessoa
         * @access public
         * @param rg
         */
        public function setRg($rg){
            $this->rg = $rg;
        }
    }
?>