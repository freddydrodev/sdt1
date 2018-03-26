<?php include 'php/scripts/addPet.php' ?>
<div class="text-right mb-3">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    <span class="small-icon flaticon-plus-symbol mr-2"></span>Add New Pet
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="mypets.php" method="post" class="addPetForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="file" accept="image/*" value="<?php echo $sent ? $_POST['pic'] : '' ?>" name="pic" class="form-control border-0 form-control-lg" placeholder="Pet Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" value="<?php echo $sent ? $_POST['name'] : '' ?>" name="name" class="form-control border-0 form-control-lg" placeholder="Pet Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" value="<?php echo $sent ? $_POST['dob'] : '' ?>" name="dob" class="form-control bg-white border-0 form-control-lg dob" placeholder="Pet Date of Birth" required>
                    </div>
                    <div class="form-group">
                        <textarea name="description" class="form-control bg-white border-0 form-control-lg" cols="30" required><?php echo $sent ? $_POST['description'] : 'Pet Description' ?></textarea>
                    </div>
                    <div class="form-group">
                        <select class="custom-select form-control form-control-lg border-0" name="type" required>
                            <option selected>Select Pet Type</option>
                            <option value="1">Cat</option>
                            <option value="2">Chicken</option>
                            <option value="3">Dog</option>
                            <option value="4">Rabbit</option>
                            <option value="5">Other</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="addPet">Add Pet</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>