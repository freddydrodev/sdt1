<?php 
$ins = $db->prepare('INSERT INTO visits (date) VALUES(NOW())');
if($ins->execute()) {
    $last = $db->lastInsertId();
}