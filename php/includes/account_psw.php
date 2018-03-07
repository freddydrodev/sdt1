<div class="bg-white p-3 rounded box">
    <h2><?php echo $info ?></h2>
    <form action="password.php" method="post">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon pr-4 pl-0 border-0 bg-white"><i class="flaticon-key"></i></span>
                <input type="password" name="c-psw" class="form-control border-0 pl-0" placeholder="Current Password" title="Password" required>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon pr-4 pl-0 border-0 bg-white"><i class="flaticon-key"></i></span>
                <input type="password" name="psw" class="form-control border-0 pl-0" placeholder="New Password" title="Password" required>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon pr-4 pl-0 border-0 bg-white"><i class="flaticon-key"></i></span>
                <input type="password" name="con" class="form-control border-0 pl-0" placeholder="Retype New Password" title="Retype Password" required>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" name="change" class="btn btn-lg btn-primary btn-block">change</button>
        </div>
    </form>
</div>