<?php 
$page = 'Registration Page';
include 'php/includes/head.php';
include 'php/scripts/registration.php'
?>
<div class="container-fluid h-100">
    <div class="row h-100">
        <div class="col h-100">
            <div class="d-flex h-100 align-items-center justify-content-center flex-column">
                <h1 class="mb-3">Registration Page</h1>
                <form action="registration.php" method="post" class="logform">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon border-0 bg-white"><i class="flaticon-user"></i></span>
                            <input type="text" value="<?php echo $sent ? $_POST['username'] : '' ?>" name="username" class="form-control border-0 pl-0" placeholder="Username" title="Username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon border-0 bg-white"><i class="flaticon-mail"></i></span>
                            <input type="email" value="<?php echo $sent ? $_POST['email'] : '' ?>" name="email" class="form-control border-0 pl-0" placeholder="Email" title="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon border-0 bg-white"><i class="flaticon-placeholder-1"></i></span>
                            <input type="text" value="<?php echo $sent ? $_POST['address'] : '' ?>" name="address" class="form-control border-0 pl-0" placeholder="Postal Address" title="Postal Address" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon border-0 bg-white"><i class="flaticon-placeholder"></i></span>
                            <input type="text" value="<?php echo $sent ? $_POST['code'] : '' ?>" name="code" class="form-control border-0 pl-0" placeholder="Postcode" title="Postcode" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon border-0 bg-white"><i class="flaticon-calendar-1"></i></span>
                            <input type="text" value="<?php echo $sent ? $_POST['dob'] : '' ?>" name="dob" class="bg-white dob form-control border-0 pl-0" placeholder="Date Of Birth" title="Date Of Birth" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon border-0 bg-white"><i class="flaticon-key"></i></span>
                            <input type="password" value="<?php echo $sent ? $_POST['psw'] : '' ?>" name="psw" class="form-control border-0 pl-0" placeholder="Password" title="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon border-0 bg-white"><i class="flaticon-key"></i></span>
                            <input type="password" value="<?php echo $sent ? $_POST['con'] : '' ?>" name="con" class="form-control border-0 pl-0" placeholder="Retype Password" title="Retype Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                            <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <p><a href="login.php">Already member ?</a></p>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'php/includes/foot.php' ?>