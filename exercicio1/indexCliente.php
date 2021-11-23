<?php
  require_once 'Cliente.php';
  
  echo 'Criando novo cliente...<br><br>';

  $novoCliente = new Cliente();

  var_dump($novoCliente);

  echo '<br>';
  echo '<br>';

  $novoCliente->set_cpfCliente('11122233344');
  $novoCliente->set_nomeCliente('Rodrigo');
  $novoCliente->set_enderecoCliente('Copacabana');
  $novoCliente->set_telefoneCliente('21 975028324');
  $novoCliente->set_emailCliente('rodrigolima@gmail.com');

  var_dump($novoCliente);

  echo '<br>';

  //retorna o cliente existe
  if ($novoCliente->consultarCliente('11122233344')){
    echo '<br> o cliente existe';
  }else{
    echo '<br> o cliente não existe';
  }

  echo '<br>';

  //retorna o cliente não existe
  if ($novoCliente->consultarCliente('11122233340')){
    echo '<br> o cliente existe';
  }else{
    echo '<br> o cliente não existe';
  }
  

