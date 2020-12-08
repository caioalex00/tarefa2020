<?php

include_once "Classes/Mensagem.php";

$cript = new Mensagem();
$cript->criptografar($_POST['q']);