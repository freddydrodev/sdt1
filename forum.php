<?php 
$page = 'Forum';
include 'php/includes/head.php';
include 'php/scripts/forum.php';
include 'php/includes/navbar.php';
?>
<!-- body -->
<div class="container">
    <div class="row">
        <div class="col-12">
            
            <div class="d-flex py-3 justify-content-between align-items-center">
                <h2 class="my-0">Forum</h2>
                <?php include './php/includes/forum_add.php'; ?>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-9">
                    <div class="box p-3 bg-primary text-white mb-3">
                        <h4>Topics</h4>
                    </div>
                    <div class="topics-list">
                        <?php 
                        $topics = $db->query('SELECT * FROM forumtopics ORDER BY createdat DESC');
                        while($topic = $topics->fetch()) { ?>
                        <div class="box p-3 bg-white my-3 topic">
                            <div class="d-flex justify-content-between">
                                <h5><a href="topic.php?id=<?php echo $topic['id'] ?>"> <?php echo $topic['title'] ?></a></h5>
                                <p class="date-<?php echo $topic['id'] ?>"></p>
                                <script>
                                jQuery(document).ready(function(){
                                    $('.date-<?php echo $topic['id'] ?>').text(moment("<?php echo $topic['createdat'] ?>").from());
                                })
                                </script>
                            </div>
                            <p class="mb-0">
                                Messages: <b>1200, </b> 
                                Type: <b><?php echo $topic['status'] ?></b>
                            </p>
                        </div>
                        <?php } ?>
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