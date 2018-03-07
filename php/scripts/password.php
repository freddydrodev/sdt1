<?php
include 'php/includes/func.php';

$sent = false;
if(isset($_POST['change'])){
    $cp = clear($_POST['c-psw']);
    $ps = clear($_POST['psw']);
    $cn = clear($_POST['con']);
    $correct = true;

    $exist = $db->prepare('SELECT * FROM customers WHERE password = ? AND id = ?');
    $exist->execute(array(sha1($cp), $_SESSION['id']));
    $ex = $exist->fetch();
    if (empty($ex)) { 
        $correct = false;
        bootstrapNotify('Current Password: Wrong password');
    }

    if (strlen($ps) < 6) {
        $correct = false;
        bootstrapNotify('Password: Wrong length! must be higher than 6 characters');
    }

    if($ps !== $cn){
        $correct = false;
        bootstrapNotify('Confirm: Password and confirm do not match');
    }

    if($correct){
        $add = $db->prepare('UPDATE customers SET password = ? WHERE id = ?');
        if($add->execute(array(sha1($ps), $_SESSION['id']))){
            bootstrapNotify('Success: Password Changed!', 'success');
        }
        else {
            bootstrapNotify();
        }
        $add->closeCursor();
    }
    else {
        $sent = true;
    }
}
