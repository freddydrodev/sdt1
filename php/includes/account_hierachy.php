<?php 
$info = '';
switch ($lvl) {
    case 1:
        $info = 'Personal Information';
        break;
    case 2:
        $info = 'Change Password';
        break;
    case 3:
        $info = 'My Pets';
        break;
    default:
        $info = 'Personal Information';
        break;
}
?>
<nav aria-label="breadcrumb" class="w-100 mt-3">
    <ol class="breadcrumb bg-white box">
        <li class="breadcrumb-item">Account</li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $info ?></li>
    </ol>
</nav>