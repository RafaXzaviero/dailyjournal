<?php
session_start();

include "koneksi.php";  

//check jika belum ada user yang login arahkan ke halaman login
if (!isset($_SESSION['username'])) { 
	header("location:login.php"); 
} 
// //query untuk mengambil data article
// $sql1 = "SELECT * FROM article ORDER BY tanggal DESC";
// $hasil1 = $conn->query($sql1);

// //menghitung jumlah baris data article
// $jumlah_article = $hasil1->num_rows;

//query untuk mengambil data gallery
//$sql2 = "SELECT * FROM gallery ORDER BY tanggal DESC";
//$hasil2 = $conn->query($sql2);

//menghitung jumlah baris data gallery
//$jumlah_gallery = $hasil2->num_rows;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MyHeroAcademia | Admin</title>
    <link rel="icon" href="https://th.bing.com/th/id/OIP.-8uHpeGjXuxIbMxf-32i9gHaHa?pid=ImgDet&w=184&h=184&c=7&dpr=1,3" />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        html {
            position: relative;
            min-height: 100%;
        }

        body {
            margin-bottom: 70px;
            /* Margin bottom by footer height */
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 125px;
            /* Set the fixed height of the footer here */
        }
    </style>
</head>
<body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-sm bg-primary sticky-top font-monospace">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="https://i.pinimg.com/originals/c9/69/1b/c9691b9fb1a7eb5459a45b2634c177b0.png" alt="Logo" width="30"
            height="30" class="d-inline-block align-text-top me-2"> MyHero Academia
        </a>
        <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
            <li class="nav-item">
                <a class="nav-link" href="admin.php?page=dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin.php?page=article">Article</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin.php?page=gallery">Gallery</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-warning fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION['username']?>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="admin.php?page=profile">Profile <?=$_SESSION['username']?> </a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li> 
                </ul>
            </li> 
        </ul>
        </div>
    </div>
    </nav>
    <!-- nav end -->
    <!-- content begin -->
<section id="content" class="p-5">
    <div class="container">
        <?php
        if(isset($_GET['page'])){
        ?>
            <h4 class="lead display-6 pb-2 border-bottom border-danger-subtle"><?= ucfirst($_GET['page'])?></h4>
            <?php
            include($_GET['page'].".php");
        }else{
        ?>
            <h4 class="lead display-6 pb-2 border-bottom border-danger-subtle">Dashboard</h4>
            <?php
            include("dashboard.php");
        }
        ?>
    </div>
</section>
<!-- content end -->

<!-- footer begin -->
<footer class="text-center p-4 bg-primary footer fixed-bottom">
    <div>
        <a href="https://www.instagram.com/svrorafael_"
        ><i class="bi bi-instagram h2 p-2 text-dark"></i
        ></a>
        <a href="https://x.com/svrafael_"
        ><i class="bi bi-twitter-x h2 p-2 text-dark"></i
        ></a>
        <a href="https://wa.me/+6282138845125"
        ><i class="bi bi-whatsapp h2 p-2 text-dark"></i
        ></a>
    </div>
    <div>Rafael Albion Savero &copy; 2024</div>
</footer>
<!-- footer end -->
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
    ></script>
</body>
</html> 