<?php
// false = valeur par defaut (boléen)
$isLoginOk = false;
$isPasswordOk = false;
if (isset($_POST ['ident']))
{
    //setcookie cré le cookie (login=nom du cookies; $_POST['ident]=valeur du cookies ici le post de l input.
    //time()=durée de vie du cookies,"/" chemin ou est accessible le cookies(domaine).(exo4)
    $isLoginOk = setcookie('login', $_POST['ident'], time() + 365 * 24 * 3600, "/");
}
if (isset($_POST['password']))
{
    $isPasswordOk = setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, "/");
}
?>