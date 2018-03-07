<?php 
session_start();
if(isset($page)) {
    if(($page === 'Registration Page' || $page === 'Login Page') && isset($_SESSION['id'])){
        header('location: account.php');
    }
    if(($page !== 'Registration Page' && $page !== 'Login Page') && !isset($_SESSION['id'])) {
        header('location: login.php');
    }
}

if(isset($_COOKIE['login_error']) && isset($_SESSION['id'])) {
    setcookie('login_error', 0, time());
    setcookie('attempts', 0, time());
}