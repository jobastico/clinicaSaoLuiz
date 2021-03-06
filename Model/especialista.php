<?php

    include_once '../Controller/validacoes.php';

    class Especialista {
        
        private $id;
        private $nome;
        private $conselhoRegional;
        private $email;
        private $idDepartamento;
        private $telefone;
        private $cpf;

        public function __construct($nome, $cr, $email, $idd, $tele, $cpf) {

            $this->setNome($nome);
            $this->setConselhoRegional($cr);
            $this->setEmail($email);
            $this->setIdDepartamento($idd);
            $this->setTelefone($tele);
            $this->setCpf($cpf);

        }

        // =============id================

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        // ===================nome==============

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        // ======================email=================

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        // ============conselhoRegional==================

        public function getConselhoRegional() {
            return $this->conselhoRegional;
        }
        
        public function setConselhoRegional($conselhoRegional) {
            $this->conselhoRegional = $conselhoRegional;
        }

        // ===============telefone===================

        public function getTelefone() {
            return $this->telefone;
        }
        public function setTelefone($telefone) {
            if (validaTelefone($telefone) == true) {
                $this->telefone = $telefone;
            } else {
                return false;
            }
        }

        // ==================cpf====================

        public function getCpf() {
            return $this->cpf;
        }

        public function setCpf($cpf) {
            if (validaCPF($cpf) == true){
                $this->cpf = $cpf;
            } else {
                return false;
            }
        }

        public function getIdDepartamento() {
            return $this->idDepartamento;
        }

        public function setIdDepartamento($idd) {
            $this->idDepartamento = $idd;
        }

    }

?>