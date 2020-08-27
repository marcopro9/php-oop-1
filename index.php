<?php
require_once( __DIR__ . '/user.php');
require_once( __DIR__ . '/role.php');

// $utenti = [
//   [
//     'nome' => 'Gino',
//     'cognome' => 'Alibi',
//     'email' => 'gino@mail.it',
//     'eta' => '65',
//   ],
//   [
//     'nome' => 'pippo',
//     'cognome' => 'mine',
//     'email' => 'pippo@mail.it',
//     'eta' => '25',
//   ],
//   [
//     'nome' => 'sergio',
//     'cognome' => 'tafazzi',
//     'email' => 'sergio@mail.it',
//     'eta' => '75',
//   ],
//   [
//     'nome' => 'mario',
//     'cognome' => 'marii',
//     'email' => 'mario@mail.it',
//     'eta' => '50',
//   ],
//   [
//     'nome' => 'francesco',
//     'cognome' => 'franceschi',
//     'email' => 'franz@mail.it',
//     'eta' => '14',
//   ],
// ];
//
// foreach ($utenti as $utente) {
//   $user = new User($utente['nome'], $utente['cognome'], $utente['email'], $utente['eta']);
//   $dati_user = $user->getUser();
?>

<!-- <ul>
  <li>Nome: <?php echo $dati_user['nome'] ?></li>
  <li>Cognome: <?php echo $dati_user['cognome'] ?></li>
  <li>Email: <?php echo $dati_user['email'] ?></li>
  <li>Età: <?php echo $dati_user['eta'] ?></li>
</ul> -->

<?php
// }
$ruolo = new Role('Marco', 'Prosperi', 'marco@mail.it', '56');
$ruolo -> setRuolo('Capo');
$ruolo -> setSconto();

var_dump($ruolo);

?>
