<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-primary box">
  <a class="navbar-brand text-white" href="#"><strong title="Spencer Animal Shelter">SAS</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item <?php echo $page === 'Home' ? 'active' : '' ?>">
            <a class="nav-link" href="./">Home
                <?php echo $page === 'Home' ? '<span class="sr-only">(current)</span>' : '' ?>
            </a>
        </li>
        <?php if(isset($_SESSION['id'])) : ?>
        <li class="nav-item <?php echo $page === 'Account' ? 'active' : '' ?>">
            <a class="nav-link" href="account.php">Account
                <?php echo $page === 'Account' ? '<span class="sr-only">(current)</span>' : '' ?>
            </a>
        </li>
    <?php endif; ?>
        <li class="nav-item <?php echo $page === 'Donation' ? 'active' : '' ?>">
            <a class="nav-link" href="donation.php">Donation
                <?php echo $page === 'Donation' ? '<span class="sr-only">(current)</span>' : '' ?>
            </a>
        </li>
        <li class="nav-item <?php echo $page === 'Forum' ? 'active' : '' ?>">
            <a class="nav-link" href="forum.php">Forum
                <?php echo $page === 'Forum' ? '<span class="sr-only"pan>(current)</span>' : '' ?>
            </a>
        </li>
        <?php if(isset($_SESSION['id'])) : ?>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <?php endif; ?>
    </ul>
  </div>
</nav>
<div class="spacer"></div>
<?php 
include 'php/includes/user.php' ;
?>