<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                Line Login Website
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="#" class="nav-link px-2">Features</a></li>
            <li><a href="#" class="nav-link px-2">Pricing</a></li>
            <li><a href="#" class="nav-link px-2">FAQs</a></li>
            <li><a href="#" class="nav-link px-2">About</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <!-- เช็คว่ามีการล็อคอินไลน์เข้ามารึยังถ้ายังแสดงปุ่ม login ถ้าล็อคอินเข้ามาแล้วแสดงปุ่ม logout -->
            <?php
                if(!isset($_SESSION['profile'])){
                    $line = new LineLogin();
                    $link = $line->getLink();
            ?>
            <a href="<?php echo $link; ?>" class="btn btn-success me-2">Line Login</a>
            <?php } else { ?>
            <a href="logout.php" class="btn btn-danger">Log out</a>
            <?php } ?>
        </div>
    </header>
</div>