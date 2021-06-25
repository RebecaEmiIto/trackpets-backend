<?php

    class interacao{
        
        private $idInteracao;
        private $curtidas;
        private $comentarios;
        private $usuario_idUsuario;
        private $post_idPost;

        public function getIdInteracao(){
            return $this->idInteracao;
        }

        public function getCurtidas(){
            return $this->curtidas;
        }

        public function getComentarios(){
            return $this->comentarios;
        }

        public function getIdUsuario() {
            return $this->idUsuario;
        }

        public function getidPost() {
            return $this->idPost;
        }

        public function setIdInteracao($idInteracao) {
            $this->idInteracao=$idInteracao;
        }

        public function setCurtidas($curtidas) {
            $this->curtidas=$curtidas;
        }

        public function setComentarios($comentarios) {
            $this->comentarios=$curtidas;
        }

        public function setIdUsuario($usuario_idUsuario) {
            $this->idUsuario=$usuario_idUsuario;
        }

        public function setIdPost($post_idPost) {
            $this->idPost=$post_idPost;
        }
    }

?>