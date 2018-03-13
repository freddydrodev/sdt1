<?php
include 'php/includes/func.php';

$sent = false;
if(isset($_POST['comment'])){
    $msg = clear($_POST['msg']);
    $correct = true;

    if (strlen($msg) === 0) {
        $correct = false;
        bootstrapNotify('Comment: Wrong length! must be higher than 0 character');
    }

    if($correct){
        $add = $db->prepare('INSERT INTO forummessages(msg, madeby, madeon, createdat) VALUES(?,?,?,NOW())');
        if($add->execute(array($msg, $_SESSION['id'], $_GET['id']))){
            bootstrapNotify('Success: Comment Added!', 'success');
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
