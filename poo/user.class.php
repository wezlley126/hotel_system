<?php
  class user {
    public $nome;
    public $sobrenome;
    public $nascimento;
    public $saldo;
    public $email;
    public $senha;
    public $CPF;
    public $id;

    function alterar_dados($nome, $sobrenome, $nascimento, $saldo, $email, $senha, $CPF, $id){
      $this -> nome = $nome;
      $this -> sobrenome = $sobrenome;
      $this -> nascimento = $nascimento;
      $this -> saldo = $saldo;
      $this -> email = $email;
      $this -> senha = $senha;
      $this -> CPF = $CPF;
      $this -> id = $id;
    }

    public function Exibir()
    {
      echo "{$this->id}";
    }
}
?>
