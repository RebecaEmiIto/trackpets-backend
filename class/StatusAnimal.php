<?php

    class statusanimal{

        private $idStatusAnimal;
        private $status;
        private $descricao;
        private $local;
        private $data;

        public function getIdStatusAnimal() {
            $this->idStatusAnimal=$idStatusAnimal;
        }

        public function getStatus() {
            $this->status=$status;
        }

        public function getDescricao() {
            $this->descricao=$descricao;
        }

        public function getLocal() {
            $this->local=$local;
        }

        public function getData() {
            $this->data=$data;
        }

        public function setIdStatusAnimal($idStatusAnimal) {
            $this->idStatusAnimal=$idStatusAnimal;
        }

        public function setStatus($status) {
            $this->status=$status;
        }

        public function setDescricao($descricao) {
            $this->descricao=$descricao;
        }

        public function setLocal($local) {
            $this->local=$local;
        }

        public function setData($data) {
            $this->data=$data;
        }

        function Cadastrar(){
            $sqlComand = "INSERT INTO Login(idStatusAnimal, status, descricao, local, data) VALUES ($idStatusAnimal,'$status','$descricao', '$local', '$data')";
        }
        
        function Alterar(){
            $sqlComand = "UPDATE Login SET status='$status', descricao='$descricao', local='$local', data='$data' WHERE idStatusAnimal=$idStatusAnimal";
            nome=
        }
    
        function Deletar(){
            function Deletar(){
                $sqlComand = "DELETE FROM Login WHERE idStatusAnimaçl=$idStatusAnimal";
            } 
        }
    }

?>