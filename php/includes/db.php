<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=std1', 'root', '');
} catch (Exception $e) {
    // Die('Erreur : ' . $e->getMessage());
    header('location: setup.php');
}