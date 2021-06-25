<?php

    class post{

        private $idPost;
        private $titulo;
        private $descricao;
        private $data_post;
        private $status_post;
        private $idUsuario;

        public function getidPost() {
            return $this->idPost;
        }
    
        public function getTitulo() {
            return $this->titulo;
        }
    
        public function getDescricao() {
            return $this->descricao;
        }
    
        public function getDataPost() {
            return $this->data_post;
        }

        public function getSatusPost() {
            return $this->statusPost;
        }
    
        public function getIdUsuario() {
            return $this->idUsuario;
        }

        public function setIdPost($idPost) {
            $this->idPost=$idPost;
        }
    
        public function setTitulo($Titulo) {
            $this->titulo=$titulo;
        }
    
        public function setDescricao($Descricao) {
            $this->descricao=$descricao;
        }

        public function setDataPost($data_post) {
            $this->dataPost=$data_post;
        }

        public function setStatusPost($status_post) {
            $this->statusPost=$status_post;
        }
    
        public function setIdUsuario($idUsuario) {
            $this->=$idUsuario;
        }

        function Cadastrar(){
            $sqlComand = "INSERT INTO Login(idPost,titulo,descricao,data_post,status_post,usuario_idPost) VALUES ($idPost,'$titulo','$descricao',$data_post,'$status_post',$idPost)";
        }
        
        function Alterar(){
            $sqlComand = "UPDATE Login SET titulo='$titulo', descricao='$descricao', data_post=$data_post, status_post=$status_post WHERE idPost=$idPost";
            Titulo=
        }
    
        function Deletar(){
            function Deletar(){
                $sqlComand = "DELETE FROM Login WHERE idPost=$idPost";
            } 
        }
    }

?>