<?php 
$page = 'Forum';
include 'php/includes/head.php';
include 'php/includes/navbar.php';
?>
<!-- body -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="my-3 d-flex justify-content-between">Forum
                <small><a href="#" class="btn btn-primary btn-sm"><span class="small-icon flaticon-plus-symbol mr-2"></span>Add New Topic</a></small>
            </h2>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-9">
                    <div class="box p-3 bg-primary text-white mb-3">
                        <h4>Topics</h4>
                    </div>
                    <div class="topics-list">
                        <?php 
                        $i = 0;
                        while($i < 4) { ?>
                        <div class="box p-3 bg-white my-3 topic">
                            <div class="d-flex justify-content-between">
                                <h5><a href="#">Topic Title</a></h5>
                                <p>Created: 21 Dec 2017</p>
                            </div>
                            <p class="mb-0">
                                Messages: <b>1200, </b> 
                                Accessories: <b>rugs, baskets, toys</b>
                                Gift: <b>something or yes ?</b>
                            </p>
                        </div>
                        <?php
                            $i++;
                        }
                        ?>
                        
                    </div>
                </div>
                <div class="col-3">
                    <div class="box p-3 bg-white mb-3">
                        <form action="search.php" method="post">
                            <div class="form-group mb-0">
                                <div class="input-group">
                                    <span class="input-group-addon bg-white"><i class="small-icon flaticon-key"></i></span>
                                    <input type="search" name="search" class="form-control border-left-0 pl-0" placeholder="Search a topic" required>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="box p-3 bg-white">
                        <?php include 'php/includes/rss.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'php/includes/foot.php' ?>