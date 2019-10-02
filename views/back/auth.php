<?php

$login_valide = "admin";
$pwd_valide = "admin";

if (isset($_POST['username']) && isset($_POST['passwd'])) {
    if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['pwd']) {

        session_start ();

        $_SESSION['login'] = $_POST['login'];
        $_SESSION['pwd'] = $_POST['pwd'];

        header ('location: page_formateur.php');
    }
    else {
        echo '<body onLoad="alert(\'Membre non reconnu...\')">';
        echo '<meta http-equiv="refresh" content="0;URL=index.htm">';
    }
}
else {
    echo 'Les variables du formulaire ne sont pas déclarées.';
}
