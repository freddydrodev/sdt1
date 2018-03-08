<?php 
$page = 'Home';
include 'php/includes/head.php';
include 'php/includes/navbar.php';
?>
<!-- body -->
<?php 
include 'php/includes/home_scr.php';
include 'php/includes/home_inc.php';
?>

<div class="container text-left">
    <div class="row">
        <div class="col-9">
            <div class="row card-columns">
                <div class="card bg-transparent border-0 col-lg-6 col-md-12 my-3">
                    <div class="card box bg-white">
                        <img class="card-img-top" src="assets/images/dog2.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="card bg-transparent border-0 col-md-6 col-sm-12 my-3">
                    <div class="card box bg-white">
                        <img class="card-img-top" src="assets/images/dog.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
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