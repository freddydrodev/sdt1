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
                <?php  $i = 0;
                while($i < 15) { ?>
                <div class="card m-0 bg-transparent border-0 col-12 mt-3">
                    <div class="card box bg-white m-0">
                        <div class="card-body px-3 py-2">
                            <h6 class="card-text mb-0">Fredius Tout has given <i>24$</i> to Samy(dog)</h6>
                            <p class="card-text"><small class="text-muted"><i>Date: 21 Jan 2018</i></small></p>
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