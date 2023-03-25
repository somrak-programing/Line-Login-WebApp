<?php
    session_start();
    require_once("LineLogin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Line Login PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <?php require_once("nav.php") ?>

    <main class="container">
        <div class="bg-light p-5 rounded">
            <h1>Welcome, to Line Login Web App</h1>
            <p class="lead">Let's login to the web by using line login.</p>
        </div>
    </main>
</body>
</html> 