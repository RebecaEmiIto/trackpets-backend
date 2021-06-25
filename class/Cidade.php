<?php

class Cidade{
    private $idCidade;
    private $descricao;
    private $uf;

    function Cadastrar(){
        $sqlComand = "INSERT INTO Cidade(descricao,UF) VALUES ('$descricao','$uf)";
    }
    
    function Alterar(){
        $sqlComand = "UPDATE Cidade SET descricao=$descricao, UF=$uf WHERE idCidade=$idCidade";
        nome=
    }

    function Deletar(){
        function Deletar(){
            $sqlComand = "DELETE FROM Cidade WHERE id=$idCidade";
        } 
    }


    function Buscar(){
        
    }

}


?>