<?php 
include 'php/scripts/deletePet.php';
$pets = $db->prepare('SELECT pets.*, pettype.type FROM pets INNER JOIN pettype ON pets.pet_type = pettype.id WHERE pet_owner = ? ORDER BY createdat DESC');
$pets->execute(array($_SESSION['id']));

if($pets->rowCount() <= 0) { ?>
    <div class="alert alert-secondary" role="alert">
        You have not added a pet yet!
    </div>
<?php } else { ?>
<div class="row card-columns">

<?php while($pet = $pets->fetch()) { ?>
    <div class="card bg-transparent border-0 col-lg-6 col-md-12 mb-3">
        <div class="card box bg-white">
            <div class="card-header text-right p-0 bg-white">
                <form action="mypets.php" method="post" onsubmit="if(!confirm('Do you really want to delete this pet?')){return false;}">
                    <button type="submit" class="btn bg-transparent border-0 text-danger" name="delete" value="<?php echo $pet['id'] ?>"><span class="flaticon-delete-button"></span></button>
                </form>
            </div>
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
        <?php } ?>
</div>
<?php } ?>
    