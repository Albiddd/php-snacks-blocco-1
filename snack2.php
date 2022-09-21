<?php
    $mail = $_GET['mail'];
    $name = $_GET['name'];
    $age = $_GET['age'];

    $a = strpos($mail, '@');
    $b = strpos($mail, '.');
    $length = strlen($name);

    var_dump($a, $b);


    if (empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])) {
        $message = 'Non lasciare i campi vuoti';

    } elseif ($a != false && $b != false && $length > 3 && is_numeric($age) ){
        $message = 'Accesso ruscito';
    } else{
        $message = 'Accesso negato';
    }


?>    

<div><?= $message ?></div>