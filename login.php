<?php 
if(!isset($_COOKIE['attempts'])) {
    setcookie('attempts', 0, time() + (15));
    header('location: login.php');
}

$page = 'Login Page';
include 'php/includes/head.php';
include 'php/scripts/login.php';

$cookie_name = 'login_error';
$waiting = false;
$time = 60 * 5;
$remain = 0;
if(!isset($_COOKIE['login_error'])) {
    if($_COOKIE['attempts'] >= 1) {
        setcookie($cookie_name, time() + ($time), time() + ($time)); // 60sec * 5
        setcookie('attempts', 0, time() + ($time));
    }
} else {
    $waiting = true;
    $remain = $_COOKIE['login_error'] - time() + 2;
    header('refresh:' . $remain . ';url=login.php');
}
?>
<div class="container-fluid h-100">
    <div class="row h-100">
        <div class="col h-100">
            <div class="d-flex h-100 align-items-center justify-content-center flex-column">
                <h1 class="mb-3">Login Page</h1>
                <?php if($waiting) { ?> 
                <p class="wait alert alert-info">You Made 3 concecutive errors you should wait: <strong><?php echo $remain ?>sec</strong></p>
                <p><a href="registration.php">Not member yet ?</a></p>
                <?php } else { ?> 
                <form action="login.php" method="post" class="logform">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon border-0 bg-white"><i class="flaticon-user"></i></span>
                            <input type="text" value="<?php echo $sent ? $_POST['username'] : '' ?>" name="username" class="form-control border-0 pl-0" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon border-0 bg-white"><i class="flaticon-key"></i></span>
                            <input type="password" value="<?php echo $sent ? $_POST['psw'] : '' ?>" name="psw" class="form-control border-0 pl-0" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <p><a href="registration.php">Not member yet ?</a></p>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php if(isset($_COOKIE['login_error'])) { ?>
<script>
jQuery(document).ready(function() {
    var remain = <?php echo $remain ?>;
    
    var int = setInterval(function(){
        remain--;
        $('.wait strong').text(remain + 'sec')
    }, 1000);

    setTimeout(() => {
        clearInterval(int);
    }, (<?php echo $remain ?> + 1) * 1000);
});
</script>
<?php } ?>
<?php include 'php/includes/foot.php' ?>