<?php

class login{
    private $idLogin;
    private $email;
    private $senha;
    private $idUsuario;

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getIdCidade() {
        return $this->idCidade;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario=$idUsuario;
    }

    public function setNome($nome) {
        $this->nome=$nome;
    }

    public function setEndereco($endereco) {
        $this->endereco=$endereco;
    }

    public function setIdCidade($idCidade) {
        $this->idCidade=$idCidade;
    }


    function Cadastrar(){
        $sqlComand = "INSERT INTO Login(email,senha,Usuario_idUsuario) VALUES ('$email',$senha,$idUsuario)";
    }
    
    function Alterar(){
        $sqlComand = "UPDATE Login SET email='$email', senha=$senha WHERE idlogin=$idLogin";
        nome=
    }

    function Deletar(){
        function Deletar(){
            $sqlComand = "DELETE FROM Login WHERE idlogin=$idLogin";
        } 
    }


    function Buscar(){
        
    }

}
?>