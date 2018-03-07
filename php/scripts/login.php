<?php
$sent = false;
if(isset($_POST['login']) && !isset($_COOKIE['login_error']))
{
    include 'php/includes/func.php';

    $username = clear($_POST['username']);
    $psw = clear($_POST['psw']);

    if(strlen($username) > 0 && strlen($psw) > 0)
    {
        $users = $db->prepare('SELECT * FROM customers WHERE username = ? AND password = ?');
        $users->execute(array($username, sha1($psw)));
        $user = $users->fetch();
        if(!empty($user))
        {
            $_SESSION['id'] = $user['id'];
            header('location: account.php');
        }
        else {
            bootstrapNotify('Data do not match');
            $sent = true;
        }
    }
    else {
        bootstrapNotify('Empty field(s)');
        $sent = true;
    }
    setcookie('attempts', $_COOKIE['attempts'] + 1, time() + (15));
}
