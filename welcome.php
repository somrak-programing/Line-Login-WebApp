<?php
    session_start();
    require_once("LineLogin.php");

    if(!isset($_SESSION['profile'])){
        header("location: index.php");
    }
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
        <div class="gb-lisht p-5 rounded">
             <!-- เช็คตัวแปร profile ว่ามีข้อมูลรึยังถ้ามีเอาข้อมูล name email picture มาโชว์ -->
            <?php
                if(isset($_SESSION['profile'])){
                    $profile = $_SESSION['profile'];
                }
            ?>

            <h1>Welcome, <?php echo $profile->name; ?></h1>
            <p class="lead">Your email: <?php echo $profile->email; ?></p>
            <img src="<?php echo $profile->picture ?>" class="rounded" width="300" alt="profile-picture">
        </div>
    </main>
</body>
</html> 