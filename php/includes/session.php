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