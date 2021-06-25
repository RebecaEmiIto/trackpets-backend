<?php

class Usuario{
    
    private $idUsuario;
    private $nome;
    private $endereco;
    private $telefone;
    private $idCidade;
    

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
        $sqlComand = "INSERT INTO Usuario(nome,endereco,telefone,Cidade_idCidade) VALUES ('$nome','$endereco','$telefone',$idCidade)";
    }
    
    function Alterar(){
        $sqlComand = "UPDATE Usuario SET nome=$nome, endereco='$endereco', telefone='$telefone', Cidade_idCidade=$idCidade WHERE idUsuario=$idUsuario";
        
    }

    
    function Deletar(){
        function Deletar(){
            $sqlComand = "DELETE FROM Usuario WHERE idUsuario=$idUsuario";
        }
    }
    
    function Buscar(){
        
    }

}


?>