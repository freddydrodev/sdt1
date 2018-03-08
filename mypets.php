<?php 
$page = 'Account';
$lvl = 3;
include 'php/includes/head.php';
include 'php/scripts/password.php';
include 'php/includes/navbar.php';
?>
<!-- body -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php include 'php/includes/account_hierachy.php' ?>
        </div>
        <div class="col my-3">
            <div class="row">
                <div class="col-3">
                    <?php include 'php/includes/account_menu.php' ?>
                </div>
                <div class="col-9">
                    <?php 
                    include 'php/includes/account_add.php';
                    include 'php/includes/account_pets.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'php/includes/foot.php' ?>
