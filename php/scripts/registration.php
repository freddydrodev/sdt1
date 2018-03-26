<?php
include 'php/includes/func.php';

$sent = false;
if(isset($_POST['register'])){
    $un = clear($_POST['username']);
    $em = clear($_POST['email']);
    $ad = clear($_POST['address']);
    $cd = clear($_POST['code']);
    $do = clear($_POST['dob']);
    $ps = clear($_POST['psw']);
    $cn = clear($_POST['con']);
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

    $exist = $db->prepare('SELECT * FROM customers WHERE email = ?');
    $exist->execute(array($em));
    $ex = $exist->fetch();
    if (!empty($ex)) { 
        $correct = false;
        bootstrapNotify('Email: This email already exist');
    }

    if (strlen($ad) > 100 || strlen($ad) < 5) {
        $correct = false;
        bootstrapNotify('Postal Adress: Wrong length! must be between 5 and 100 characters');
    }

    if (strlen($cd) < 1 || strlen($cd) > 6) {
        $correct = false;
        bootstrapNotify('Postcode: Wrong length! must be between 1 and 6');
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
        $add = $db->prepare('INSERT INTO customers (username, password, email, date_of_birth, postal_address, postcode, createdat) VALUES(?,?,?,?,?,?,NOW())');
        if($add->execute(array($un, sha1($ps), strtolower($em), $do, $ad, $cd))){
            $_SESSION['id'] = $db->lastInsertId();
            header('location: account.php');
        }
        else {
            bootstrapNotify();
            $sent = true;
        }
        $add->closeCursor();
    }
    else {
        $sent = true;
    }
}
