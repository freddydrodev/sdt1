<div class="bg-white p-3 rounded box">
    <h2>Personal Informations</h2>
    <form action="password.php" method="post">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon pr-4 pl-0 border-0 bg-white"><i class="flaticon-key"></i></span>
                <input type="password" value="<?php echo '' ?>" name="psw" class="form-control border-0 pl-0" placeholder="Password" title="Password" required>
                <span class="input-group-addon icon-hover pl-4 border-0 bg-white"><i class="flaticon-pen small-icon"></i></span>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon pr-4 pl-0 border-0 bg-white"><i class="flaticon-key"></i></span>
                <input type="password" value="<?php echo '' ?>" name="con" class="form-control border-0 pl-0" placeholder="Retype Password" title="Retype Password" required>
                <span class="input-group-addon icon-hover pl-4 border-0 bg-white"><i class="flaticon-pen small-icon"></i></span>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" name="change" class="btn btn-lg btn-primary btn-block">change</button>
        </div>
    </form>
</div>