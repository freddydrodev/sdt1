<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=sas', 'root', '');
} catch (Exception $e) {
    // Die('Erreur : ' . $e->getMessage());
    header('location: setup.php');
}