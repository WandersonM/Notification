<?php

require __DIR__.'/lib_ext/autoload.php';


use Notification\Email;



$novoEmail = new Email();

$novoEmail->sendMail("Assunto de Teste","<p> Esse e um e-mail de <b> teste</b></p>","martins.wanderson@gmail.com","Wanderson","martins.wanderson@hotmail.com","Wanderson Hotmail");

var_dump($novoEmail);