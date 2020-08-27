<?php

class Role extends User {
  public $ruolo;

  public function setRuolo($ruolo){
    $this->ruolo = $ruolo;
  }
  public function setSconto(){
    if ($this->ruolo = 'Capo') {
      $this->sconto = '100%';
    }
  }
}
?>
