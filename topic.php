<?php 
$page = 'Forum';
include 'php/includes/head.php';
include 'php/scripts/topic.php';
include 'php/includes/navbar.php';
?>
<!-- body -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="row my-3">
                <div class="col-9">
                    <div class="box p-3 bg-primary text-white">
                        <?php 
                        $topics = $db->prepare('SELECT * FROM forumtopics WHERE id = ?');
                        $topics->execute(array($_GET['id']));
                        $topic = $topics->fetch(); ?>
                        <div class="d-flex justify-content-between">
                            <h4><?php echo $topic['title'] ?></h4>
                            <p class="date-<?php echo $topic['id'] ?>"></p>
                            <script>
                            jQuery(document).ready(function(){
                                $('.date-<?php echo $topic['id'] ?>').text(moment("<?php echo $topic['createdat'] ?>").from());
                            })
                            </script>
                        </div>
                        <h6 class="w-75"><?php echo $topic['description'] ?></h6>
                        <p class="mb-0">
                        <?php $counts = $db->prepare('SELECT COUNT(*) AS total FROM forummessages WHERE madeon = ?');
                            $counts->execute(array($_GET['id']));
                            $count = $counts->fetch(); ?>

                            Messages: <b><?php echo $count['total'] ?>, </b> 
                            Type: <b><?php echo $topic['status'] ?></b>
                        </p>
                    </div>
                    <div>
                        <ul class="list-unstyled">
                            <?php 
                            $comments = $db->prepare('SELECT customers.username, customers.id as uid, msg, forummessages.createdat, forummessages.id FROM forummessages INNER JOIN customers ON customers.id = forummessages.madeby WHERE madeon = ? ORDER BY createdat DESC');
                            $comments->execute(array($_GET['id']));
                            while($comment = $comments->fetch()) { ?>
                            <li class="media mt-3">
                                <div class="<?php echo $_SESSION['id'] === $comment['uid'] ? 'order-1 ml-3 text-right' : 'mr-3' ?>"><h6><?php echo $comment['username'] ?></h6>
                                <p class="date-cmt-<?php echo $comment['id'] ?>"></p></div>
                                <script>
                                jQuery(document).ready(function(){
                                    $('.date-cmt-<?php echo $comment['id'] ?>').text(moment("<?php echo $comment['createdat'] ?>").from());
                                })
                                </script>
                                <div class="media-body box bg-white rounded p-3"><?php echo $comment['msg'] ?></div>
                            </li>
                            <?php } ?>
                            
                        </ul>
                        <?php if($topic['status'] !== 'private' || $topic['madeby'] === $_SESSION['id']) { ?>
                        <form action="topic.php?id=<?php echo $_GET['id'] ?>" method="post">
                            <div class="form-group row align-items-end">
                            <div class="col-9">
                                <textarea name="msg" class="form-control form-control-lg" require><?php echo $sent ? $_POST['msg'] : 'Your Comment here' ?></textarea>
                            </div>
                            <div class="col-3">
                                <button type="submit" name="comment" class="btn btn-primary btn-block">Comment</button>
                            </div>
                            </div>
                        </form>
                        <?php } else {
                            echo '<div class="alert alert-warning" role="alert"><strong>Sorry!!! </strong>this is a private topic!</div>';
                         } ?>
                        
                    </div>
                </div>
                <div class="col-3">
                    <div class="box p-3 bg-white">
                        <?php include 'php/includes/rss.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'php/includes/foot.php' ?>