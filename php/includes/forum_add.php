<div class="text-right">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTopicModal">
    <span class="small-icon flaticon-plus-symbol mr-2"></span>Add New Topic
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addTopicModal" tabindex="-1" role="dialog" aria-labelledby="addTopicModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="forum.php" method="post" class="addTopicForm">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" value="<?php echo $sent ? $_POST['title'] : '' ?>" name="title" class="form-control form-control-lg" placeholder="Topic Title" required>
                    </div>
                    <div class="form-group">
                        <textarea name="description" class="form-control form-control-lg" required><?php echo $sent ? $_POST['description'] : 'description' ?></textarea>
                    </div>
                    <div class="form-group">
                        <select name="type" class="custom-select form-control form-control-lg" required>
                            <option selected>Select Topic Type</option>
                            <option value="public">Public</option>
                            <option value="private">Private</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="create" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>