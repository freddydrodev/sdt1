<?php 
if(isset($_POST['delete']) && !empty($_POST['delete'])) {
    $del = $db->prepare('DELETE FROM pets WHERE id = ?');
    if($del->execute(array($_POST['delete']))) {
        bootstrapNotify('Success: Pet deleted!!!', 'success');
        $img = './assets/images/pet_' . $_POST['delete'] . '.jpg';
        if(file_exists($img)) {
            if(unlink($img)) {
                bootstrapNotify('Success: Pet image deleted!!!', 'warning');
            }
        }
    } else {
        bootstrapNotify();
    }
}