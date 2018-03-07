<?php 
$page = 'Login Page';
include 'php/includes/head.php';
include 'php/scripts/login.php'
?>
<div class="container-fluid h-100">
    <div class="row h-100">
        <div class="col h-100">
            <div class="d-flex h-100 align-items-center justify-content-center flex-column">
                <h1 class="mb-3">Login Page</h1>
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
            </div>
        </div>
    </div>
</div>
<?php include 'php/includes/foot.php' ?>