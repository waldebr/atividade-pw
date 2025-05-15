<?php

require_once("banco.php");

class Cadastro extends Banco{
    private $nome;
    private $telefone;
    private $origem;
    private $data_contato;
    private $observacao;

    public function setNome($string){
        $this->nome = $string;
    }

    public function setTelefone($string){
        $this->nome = $string;
    }

    public function setOrigem($string){
        $this->nome = $string;
    }

    public function setData_contato($string){
        $this->nome = $string;
    }

    public function setObservacao($string){
        $this->nome = $string;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }
    
    public function getOrigem(){
        return $this->origem;
    }

    public function getData_contato(){
        return $this->data_contato;
    }

    public function getObservacao(){
        return $this->observacao;
    }

}

?>