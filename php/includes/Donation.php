<h6>
    <span class="flaticon-charity mr-2"></span>
    Total Donations
</h6>
<?php 
    $total = 0;
    $donations = $db->query('SELECT * FROM donations');
    while($donation = $donations->fetch()){
        $total += $donation['donate'];
    }

    echo '<h3>$' . $total . '</h3>';
?>
