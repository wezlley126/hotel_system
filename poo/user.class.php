<?php
  class user {
    protected $nome;
    protected $sobrenome;
    protected $nascimento;
    protected $saldo;
    protected $email;
    protected $senha;
    protected $CPF;

    protected function atribuir_dados($nome, $sobrenome, $nascimento, $saldo, $email, $senha, $CPF)
    {
      // code...
      $this -> nome = $nome;
      $this -> sobrenome = $sobrenome;
      $this -> nascimento = $nascimento;
      $this -> saldo = $saldo;
      $this -> email = $email;
      $this -> senha = $senha;
      $this -> CPF = $CPF;
    }
  }
?>
