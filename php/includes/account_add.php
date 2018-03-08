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
            <form action="login.php" method="post" class="addPetForm">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" value="<?php echo $sent ? $_POST['name'] : '' ?>" name="name" class="form-control border-0 form-control-lg" placeholder="Pet Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" value="<?php echo $sent ? $_POST['dob'] : '' ?>" name="dob" class="form-control bg-white border-0 form-control-lg dob" placeholder="Pet Date of Birth" required>
                    </div>
                    <div class="form-group">
                        <select class="custom-select form-control form-control-lg border-0">
                            <option selected>Select Pet Type</option>
                            <option value="1">Cat</option>
                            <option value="2">Dog</option>
                            <option value="3">Rabbit</option>
                            <option value="3">Chicken</option>
                            <option value="3">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>