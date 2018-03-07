<div class="bg-white p-3 rounded box">
    <h2><?php echo $info ?></h2>
    <form action="account.php" method="post">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon pr-4 pl-0 border-0 bg-white"><i class="flaticon-user"></i></span>
                <input type="text" value="<?php echo $user['username'] ?>" name="username" class="form-control border-0 pl-0" placeholder="Username" title="Username" required>
                <span class="input-group-addon icon-hover pl-4 border-0 bg-white"><i class="flaticon-pen small-icon"></i></span>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon pr-4 pl-0 border-0 bg-white"><i class="flaticon-mail"></i></span>
                <input type="email" value="<?php echo $user['email'] ?>" name="email" class="form-control border-0 pl-0" placeholder="Email" title="Email" required>
                <span class="input-group-addon icon-hover pl-4 border-0 bg-white"><i class="flaticon-pen small-icon"></i></span>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon pr-4 pl-0 border-0 bg-white"><i class="flaticon-placeholder-1"></i></span>
                <input type="text" value="<?php echo $user['postal_address'] ?>" name="address" class="form-control border-0 pl-0" placeholder="Postal Address" title="Postal Address" required>
                <span class="input-group-addon icon-hover pl-4 border-0 bg-white"><i class="flaticon-pen small-icon"></i></span>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon pr-4 pl-0 border-0 bg-white"><i class="flaticon-placeholder"></i></span>
                <input type="text" value="<?php echo $user['postcode'] ?>" name="code" class="form-control border-0 pl-0" placeholder="Postcode" title="Postcode" required>
                <span class="input-group-addon icon-hover pl-4 border-0 bg-white"><i class="flaticon-pen small-icon"></i></span>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon pr-4 pl-0 border-0 bg-white"><i class="flaticon-calendar-1"></i></span>
                <input type="text" value="<?php echo $user['date_of_birth'] ?>" name="dob" class="bg-white dob form-control border-0 pl-0" placeholder="Date Of Birth" title="Date Of Birth" required>
                <span class="input-group-addon icon-hover pl-4 border-0 bg-white"><i class="flaticon-pen small-icon"></i></span>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" name="update" class="btn btn-lg btn-primary btn-block">update</button>
        </div>
    </form>
</div>