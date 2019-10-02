<?php

$login_valide = "admin";
$pwd_valide = "admin";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($login_valide == $_POST['username'] && $pwd_valide == $_POST['password']) {

        session_start ();

        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];

        header ('location: page_formateur.php');
    }
    else {
        echo '<body onLoad="alert(\'Membre non reconnu...\')">';
        header ('location: page_apprenti.php');
    }
}
else {
    echo 'Les variables du formulaire ne sont pas déclarées.';
}
