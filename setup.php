<?php
session_start();
session_destroy();
$db = 'std1';
try {
    $db = new PDO('mysql:host=localhost;dbname=' . $db, 'root', '');
    header('location: login.php');
} catch (Exception $e) {
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col h-100 text-center">
                <div class="d-flex h-100 align-items-center flex-column justify-content-center">
                    <h1>Setup page</h1>
                    <h3 class="text-muted mb-5">By clicking setup a database named 'std1' will be generated</h3>
                    <div class="w-50 mx-auto">
                        <form action="setup.php" method="post">
                            <?php include 'php/scripts/setup.php' ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>