<?php

  class Cliente{
    private $cpfCliente;
    private $nomeCliente;
    private $enderecoCliente;
    private $telefoneCliente;
    private $emailCliente;

    //construtor da classe
    function Cliente(){
    }

    //metodo para consultar o cliente
    public function consultarCliente($cpfCliente){
      if($this->cpfCliente == $cpfCliente){
        return true;
      }else{
        return false;
      }
    }

    //============getters=============
    function get_cpfCliente(){
      return $this->cpfCliente;
    }
    function get_nomeCliente(){
      return $this->nomeCliente;
    }
    function get_enderecoCliente(){
      return $this->enderecoCliente;
    }
    function get_telefoneCliente(){
      return $this->telefoneCliente;
    }
    function get_emailCliente(){
      return $this->emailCliente;
    }
    //============getters-fim=============


    //============setters=============
    function set_cpfCliente($cpfCliente){
      $this->cpfCliente = $cpfCliente;
    }
    function set_nomeCliente($nomeCliente){
      $this->nomeCliente = $nomeCliente;
    }
    function set_enderecoCliente($enderecoCliente){
      $this->enderecoCliente = $enderecoCliente;
    }
    function set_telefoneCliente($telefoneCliente){
      $this->telefoneCliente = $telefoneCliente;
    }
    function set_emailCliente($emailCliente){
      $this->emailCliente = $emailCliente;
    }
    //============setters-fim=============

  }
