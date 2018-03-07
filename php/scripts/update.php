<?php
include 'php/includes/func.php';

$sent = false;
if(isset($_POST['update'])){
    $un = clear($_POST['username']);
    $em = clear($_POST['email']);
    $ad = clear($_POST['address']);
    $cd = clear($_POST['code']);
    $do = clear($_POST['dob']);
    $correct = true;

    if(!preg_match('/^[a-zA-Z0-9]{5,32}$/', $un)) {
        $correct = false;
        echo 'error';
        bootstrapNotify('UserName: Wrong format! must be between 5 and 100 characters alphanumeric');
    }

    if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", strtolower($em))) {
        $correct = false;
        bootstrapNotify('Email: Wrong format! accepted format is example@domaine.com');
    }

    $exist = $db->prepare('SELECT * FROM customers WHERE email = ? AND id != ?');
    $exist->execute(array($em, $_SESSION['id']));
    $ex = $exist->fetch();
    if (!empty($ex)) { 
        $correct = false;
        bootstrapNotify('Email: This email already exist');
    }

    if (strlen($ad) > 100 || strlen($ad) < 5) {
        $correct = false;
        bootstrapNotify('Postal Adress: Wrong length! must be between 5 and 100 characters');
    }

    if (strlen($cd) < 1) {
        $correct = false;
        bootstrapNotify('Postcode: Wrong length! no character entered');
    }

    if($correct){
        $add = $db->prepare('UPDATE customers SET username = ?, email = ?, date_of_birth = ?, postal_address = ?, postcode = ? WHERE id = ?');
        if($add->execute(array($un, strtolower($em), $do, $ad, $cd, $_SESSION['id']))){
            bootstrapNotify('Success: Information Updated!', 'success');
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
