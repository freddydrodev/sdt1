<?php 
if(isset($_POST['donate']) && !empty($_POST['donate'])) {
    include 'php/includes/func.php';

    $donation = htmlspecialchars(trim($_POST['donation']));

    if((int)$donation === 0) {
        bootstrapNotify('Donation: Error! must be numbers higher than 0');
    } else {
        $add = $db->prepare('INSERT INTO donations(donate, madeby, madeto) VALUES(?,?,?)');
        if($add->execute(array($donation, $_SESSION['id'], $_POST['donate']))) {
            bootstrapNotify('Donation: Successfully made!', 'success');
        } else {
            bootstrapNotify('Donation: Error!');
        }
    }
}