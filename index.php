<?php

  class User {
    public $ID_user;
    public $nome;
    public $cognome;
    public $email;

    public function getNomeCognome($nome , $cognome){
      echo 'User: ' . $nome . ' ' . $cognome . '<br>';
    }
    public function getEmail($email){
      echo 'User Email: ' . $email . '<br>';
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
    $userPrint->ID = $utente['ID'];
    $userPrint->nome = $utente['nome'];
    $userPrint->cognome = $utente['cognome'];
    $userPrint->email = $utente['email'];
    $userPrint->getNomeCognome($userPrint->nome , $userPrint->cognome);
    $userPrint->getEmail($userPrint->email);
  }
?>
