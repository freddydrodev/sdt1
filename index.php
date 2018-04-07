<?php 
$page = 'Home';
include 'php/includes/head.php';
include 'php/includes/navbar.php';
?>
<!-- body -->
<?php 
include 'php/includes/home_scr.php';
include 'php/includes/home_inc.php';
include 'php/scripts/donate.php';
?>

<div class="container text-left">
    <div class="row">
        <div class="col-9">
            <div class="row card-columns">
            <?php 
                $pets = $db->query('SELECT pets.*, pettype.type FROM pets INNER JOIN pettype ON pets.pet_type = pettype.id  ORDER BY createdat DESC');
                if($pets->rowCount() <= 0) { ?>
                    <div class="alert alert-secondary" role="alert">
                        No pet in the system!
                    </div>
                <?php } else {
                while($pet = $pets->fetch()) { ?>
        
                <div class="card bg-transparent border-0 col-lg-6 col-md-12 my-3 position-relative">
                    <?php if(isset($_SESSION['id'])) : ?>
                    <div class="donate mx-3">
                        <form action="./" method="post">
                            <div class="input-group">
                            <div class="input-group-prepend pl-2 pr-0 text-primary bg-white">
                                <span class="flaticon-donate"></span>
                            </div>
                            <input type="number" min="1" class="form-control border-0 rounded-0 pl-2" required name="donation">
                            <button type="submit" name="donate" value="<?php echo $pet['id'] ?>" class="btn input-group-append btn-primary border-0 rounded-0">Donate</button>
                        </div>
                        </form>
                    </div>
                    <?php endif; ?>
                    <div class="card box bg-white">
                        <img class="card-img-top" src="assets/images/pet_<?php echo $pet['id'] ?>.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $pet['pet_name'] ?></h5>
                            <p class="card-text"><strong>Type: </strong><?php echo $pet['type'] ?></p>
                            <p class="card-text"><strong>Date of birth: </strong><?php echo $pet['date_of_birth'] ?></p>
                            <p class="card-text"><strong>Description: </strong><?php echo $pet['pet_description'] ?></p>
                            <p class="card-text"><strong>Added: </strong><small class="text-muted <?php echo 'pet_' . $pet['id'] ?>"></small></p>
                            <script>
                                jQuery(document).ready(function(){
                                    $('.pet_<?php echo $pet['id'] ?>').text(moment("<?php echo $pet['createdat'] ?>").from());
                                })
                            </script>
                        </div>
                    </div>
                </div>
                <?php } } ?>
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