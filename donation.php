<?php 
$page = 'Donation';
include 'php/includes/head.php';
include 'php/includes/navbar.php';
?>
<!-- body -->

<div class="container text-left">
    <div class="row">
        <div class="col-9">
            <div class="row card-columns">
                <?php  
                $donations = $db->query('SELECT customers.username, pets.pet_name, pettype.type, donations.donate FROM donations INNER JOIN customers ON customers.id = donations.madeby INNER JOIN pets on pets.id = donations.madeto RIGHT JOIN pettype ON pettype.id = pets.pet_type WHERE donations.donate > 0 ORDER BY donations.id DESC');
                $i = 0;
                while($donation = $donations->fetch()) { ?>
                <div class="card m-0 bg-transparent border-0 col-12 mt-3">
                    <div class="card box bg-white m-0">
                        <div class="card-body p-3">
                            <h6 class="card-text mb-0 donation-item text-capitalize"><?php echo $donation['username'] ?> has given <i> <?php echo $donation['donate'] ?>$</i> to <?php echo $donation['pet_name'] ?> (<?php echo $donation['type'] ?>)</h6>
                        </div>
                    </div>
                </div>
                <?php $i++; } ?>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12">
                    <?php include 'php/includes/home_social.php'; ?>
                </div>
                <div class="col-12">
                    <div class="box bg-white p-3 my-3">
                        <?php include 'php/includes/rss.php'; ?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="box bg-success text-white p-3 my-3">
                        <?php include 'php/includes/donation.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include 'php/includes/foot.php' ?>