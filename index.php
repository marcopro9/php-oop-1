<?php

  class User {
    public $ID_user;
    public $nome;
    public $cognome;
    public $email;

    public function getNomeCognome(){
      echo 'User: ' . $this->nome . ' ' . $this->cognome . '<br>';
    }
    public function getEmail(){
      echo 'User Email: ' . $this->email . '<br>';
    }
  }

  $utenti = [
    [
      'ID_user' => 1,
      'nome' => 'Gino',
      'cognome' => 'Alibi',
      'email' => 'gino@mail.it'
    ],
    [
      'ID_user' => 2,
      'nome' => 'pippo',
      'cognome' => 'mine',
      'email' => 'pippo@mail.it'
    ],
    [
      'ID_user' => 3,
      'nome' => 'sergio',
      'cognome' => 'tafazzi',
      'email' => 'sergio@mail.it'
    ],
    [
      'ID_user' => 4,
      'nome' => 'mario',
      'cognome' => 'marii',
      'email' => 'mario@mail.it'
    ],
    [
      'ID_user' => 5,
      'nome' => 'francesco',
      'cognome' => 'franceschi',
      'email' => 'franz@mail.it'
    ],
  ];

  foreach ($utenti as $utente) {
    $userPrint = new User();
    $userPrint->ID_user = $utente['ID_user'];
    $userPrint->nome = $utente['nome'];
    $userPrint->cognome = $utente['cognome'];
    $userPrint->email = $utente['email'];
    $userPrint->getNomeCognome();
    $userPrint->getEmail();
  }
?>
