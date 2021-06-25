<?php

class Animal{

    private $idAnimal;
    private $nome;
    private $idade;
    private $port;
    private $raca;
    private $peso;
    private $cor_olhos;
    private $cor_pelagem;
    private $sexo;
    private $tipo;
    private $usuario_idUsuario;
    private $animalStatus_idAnimalStatus;

    public function getIdAnimal() {
        return $this->idAnimal
    }

    public function getNome() {
        return $this->nome
    }
    
    public function getIdade() {
        return $this->idade
    }

    public function getPort() {
        return $this->port
    }

    public function getRaca() {
        return $this->raca
    }

    public function getCorOlhos() {
        return $this->corOlhos
    }

    public function getCorPelagem() {
        return $this->corPelagem
    }

    public function getSexo() {
        return $this->sexo
    }

    public function getTipo() {
        return $this->tipo
    }

    public function

    public function setIdAnimal() {
        $this->idAnimal=$idAnimal
    }

    public function setNome($nome) {
        $this->nome=$nome
    }

    public function setIdade($idade) {
        $this->idade=$idade
    }

    public function setPort($port) {
        $this->port=$port
    }

    public function setRaca($raca) {
        $this->raca=$raca
    }

    public function setCorOlhos($cor_olhos) {
        $this->corOlhos=$cor_olhos
    }

    public function setCorPelagem($cor_pelagem) {
        $this->corPelagem=$cor_pelagem
    }

    public function setSexo($sexo) {
        $this->sexo=$sexo
    }

    public function setTipo($tipo) {
        $this->tipo=$tipo
    }

}

?>