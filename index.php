<?php
class User {
public $nome;
public $cognome;
public $email;

public function _construct($_nome, $_cognome, $_email)
{
$this->nome = $_nome;
$this->cognome = $_cognome;
$this->email = $_email;


}


}

$user1 = new User("marco", "verdi", "marco.verdi@gmail.com");
$user2 = new User("giorgio", "rossi", "giorgio.rossi@gmail.com");

$users = [$user1, $user2];

 ?>
