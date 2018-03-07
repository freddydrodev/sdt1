<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=std2', 'root', '');
} catch (Exception $e) {
    // Die('Erreur : ' . $e->getMessage());
    header('location: setup.php');
}