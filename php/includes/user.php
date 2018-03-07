<?php 
if(isset($_SESSION['id'])){
    $users = $db->prepare('SELECT * FROM customers WHERE id = ?');
    $users->execute(array($_SESSION['id']));
    $user = $users->fetch();
}