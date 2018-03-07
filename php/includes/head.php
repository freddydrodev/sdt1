<?php 
include 'php/includes/db.php'; 
include 'php/includes/session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,900" rel="stylesheet"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/flatpickr.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/std1/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo isset($page) ? $page : 'Spencer Animal Shelter' ?></title>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-notify.min.js"></script>
</head>
<body>