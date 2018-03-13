<?php
include 'php/includes/func.php';

$sent = false;
if(isset($_POST['create'])){
    $tl = clear($_POST['title']);
    $de = clear($_POST['description']);
    $tp = clear($_POST['type']);
    $correct = true;

    if (strlen($tl) < 4 || strlen($tl) > 50) {
        $correct = false;
        bootstrapNotify('Title: Wrong length! must be between 4 and 50 characters');
    }

    if (strlen($de) < 10 || strlen($de) > 200) {
        $correct = false;
        bootstrapNotify('Description: Wrong length! must be between 10 and 200 characters');
    }

    if($tp !== 'private' && $tp !== 'public'){
        $correct = false;
        bootstrapNotify('Type: Wrong Type! must be <b>private</b> or <b>public</b>');
    }

    if($correct){
        $add = $db->prepare('INSERT INTO forumtopics(title, description, madeby, createdat, status) VALUES(?,?,?,NOW(),?)');
        if($add->execute(array($tl, $de, $_SESSION['id'], $tp))){
            bootstrapNotify('Success: Topic Created!', 'success');
        }
        else {
            bootstrapNotify();
        }
        $add->closeCursor();
    }
    else {
        $sent = true;
        ?> 
        <script>
        jQuery(document).ready(function(){
            $('#addTopicModal').modal('show')
        })
        </script>
        <?php
    }
}
