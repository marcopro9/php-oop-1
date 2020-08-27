<?php

class User {
  public $nome;
  public $cognome;
  protected $email;
  protected $eta;

  public function __construct($nome, $cognome, $email, $eta){
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->email = $email;
    $this->eta = $eta;
  }
  public function setSconto(){
    if ($this->eta > 60) {
      $this->sconto = '20%';
    }
  }
  public function getUser(){
    return [
      'nome' => $this->nome,
      'cognome' => $this->cognome,
      'email' => $this->email,
      'eta' => $this->eta,
    ];
  }
}
?>
