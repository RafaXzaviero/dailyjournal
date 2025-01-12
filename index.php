<?php
include "koneksi.php";
?>

<!doctype html>
<html lang="en" id="htmlPage">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BokuNoHeroAcademia</title>
        <!-- icon -->
        <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRc2sjUZnzNsJIlInbsCsj7fSIVVl3ZJLmX9w&s"/>
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"   integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
        
    <style>
    html {
        scroll-behavior: smooth;
}
    .checkbox {
        opacity: 0;
        position: absolute;
        display: none !important;
}
    .checkbox-label {
        background-color: #111;
        width: 50px;
        height: 26px;
        border-radius: 50px;
        position: relative;
        padding: 5px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
}
    .bi-moon {color: whitesmoke;}
    .bi-brightness-high {color: yellow;}
    .checkbox-label .ball {
        background-color: #fff;
        width: 22px;
        height: 22px;
        position: absolute;
        left: 2px;
        top: 2px;
        border-radius: 50%;
        transition: transform 0.2s liniear;
}
    .checkbox:checked + .checkbox-label .ball {
        transform: translateX(24px);
}   
    #checkbox {
        display: none;
}
.icon-dark-mode {
    color: black; 
}
[data-bs-theme="dark"] .icon-dark-mode {
    color: white;
}
    </style>
</head>
    <body>
        <!--nav begin-->
        <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top font-monospace ">
            <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://i.pinimg.com/originals/c9/69/1b/c9691b9fb1a7eb5459a45b2634c177b0.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top me-2">
                MyHero Academia
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#description">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#article">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#schedule">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutme">Aboutme</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" target="_blank">Login</a>
                    </li>
        <!-- Switch button Mode -->
            <li class="nav-item">
                <input type="checkbox" class="checkbox" id="checkbox">
                    <label for="checkbox" class="checkbox-label">
                        <i class="bi bi-moon"></i>
                        <i class="bi bi-brightness-high"></i>
                        <span class="ball"></span>
                    </label>
                </li>
            </ul>
            </div>
        </div>
        </div>
    </nav>
        <!--nav end-->
        <!--hero begin-->
        <section id="hero" class="text-center p-5 bg-warning text-dark text-sm-start">
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
            <img src="https://i1.sndcdn.com/artworks-000465185232-m6uu2c-t500x500.jpg" class="img-fluid" width="300">
            <div>
                <h1 class="fw-bold display-4">
                    Welcome to U.A School Hero Academia
                </h1>
                <h4 class="lead display-6"> 
                    Have a great day.. Plus Ultra!!&ensp;&ensp;&ensp;
                </h4>
                <h6>
                <span id="tanggal"></span>
                <span id="jam"></span>
                </h6>
            </div>
            </div>
        </div>
        </section>
        <!--hero end-->
<!-- Deskripsi singkat -->
<Section id="description" class="text-center p-5 text-dark">
    <div class="container">
        <h1 class="fw-bold display-4 pb-3 font-monospace">Description</h1>
        <div class="container">
            <p>My Hero Academia (僕ぼくのヒーローアカデミア Boku no Hīrō Akademia?) is a manga series serialized by Shonen Jump and written by Kohei Horikoshi. The series has been adapted into an anime series and three movies, as well as spawning the prequel series Vigilantes and spinoffs: School Briefs and Team-Up Missions.
            The story is set in the modern-day, except people with special powers called "Quirks" have become commonplace throughout the world. In a world of chaos and confusion, Pro Heroes have now risen as the new profession to fight off powerful super villains.
            A young boy named Izuku Midoriya is Quirkless, meaning he has no powers, but he still dreams of becoming a great hero one day.

            <bold>Story Arcs<bold>
            People are not born equal, a realization that four-year-old Izuku Midoriya faced when bullied by his classmates who had unique special powers. Izuku was one of the rare cases where he was born with absolutely no unique powers. This did not stop Izuku from pursuing his dream, a dream of becoming a great hero like the legendary All Might. To become the great hero he hopelessly wants to become, he will now join the ranks of one of the highest rated "Hero Academies" in the country: U.A. High School. With the help of his idol All Might, will he be able to claim the ranks and become a true hero?    
        </p>
            
        </div>

    </div>
</Section>
<!-- article begin -->
<section id="article" class="text-center p-5 bg-primary" >
<div class="container">
    <h1 class="fw-bold display-4 pb-3 font-monospace">Article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
    <?php
    $sql = "SELECT * FROM article ORDER BY tanggal DESC";
    $hasil = $conn->query($sql); 

    while($row = $hasil->fetch_assoc()){
    ?>
        <div class="col">
            <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
            <h5 class="card-title"><?= $row["judul"]?></h5>
            <p class="card-text">
                <?= $row["isi"]?>
            </p>
            </div>
            <div class="card-footer">
            <small class="text-body-secondary">
                <?= $row["tanggal"]?>
            </small>
            </div>
        </div>
        </div>
        <?php
    }
    ?> 
    </div>
</div>
</section>
<!-- article end -->
<!--gallery begin-->
<section id="gallery" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3 font-monospace">Gallery</h1>
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $sql = "SELECT * FROM gallery ORDER BY tanggal DESC";
                    $hasil = $conn->query($sql);

                    $activeClass = "active";
                    while ($row = $hasil->fetch_assoc()) {
                        ?>
                        <div class="carousel-item <?= $activeClass ?>">
                            <div class="col">
                                <div class="card h-100">
                                    <img src="img/<?= $row["gambar"] ?>" class="card-img-top" alt="Gallery Image" />
                                </div>
                            </div>
                        </div>
                        <?php
                        $activeClass = "";
                    }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
</section>
<!--gallery end-->
<!-- schedule begin -->
    <section id="schedule" class="text-center p-5">
        <h1 class="text-center fw-bold font-monospace">Schedule</h1>
        <div class="row">
            <!-- senin -->
            <div class="col-md-3 mb-3">
                <div class="card h-100" >
                    <div class="card-header bg-danger text-white">
                        Senin
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Rekayasa Perangkat Lunak<br>09.30-12.00 | H.5.6
                        </li>
                        <li class="list-group-item">
                            Sistem Operasi<br>12.30-15.00 | H.4.9
                        </li>
                    </ul>
                </div>
            </div>
            <!-- selasa -->
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                    <div class="card-header bg-danger text-white text-center">
                        Selasa
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Sistem Informasi<br>09.30-12.00 | H.4.2
                        </li>
                        <li class="list-group-item">
                            Basis Data<br>12.30-14.10 | D.3.M
                        </li>
                        <li class="list-group-item">
                            Pendidikan Kewarganegaraan<br>18.30-20.10 | Aula E.3.1
                        </li>
                    </ul>
                </div>
            </div>
            <!-- rabu -->
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <div class="card-header bg-danger text-white text-center">
                            Rabu
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Logika Informatika<br>12.30-15.00 | H.4.10
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- kamis -->
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <div class="card-header bg-danger text-white text-center">
                            Kamis
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Basis Data<br>07.00-08.40 | H.5.1 
                            </li>
                            <li class="list-group-item">
                                Pemrograman Berbasis Web<br>08.40-10.20 | D.2.J
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- jumat -->
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <div class="card-header bg-danger text-white text-center">
                            Jumat
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Probabilitas Dan Statistika<br>15.30-18.00 WIB
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- sabtu -->
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <div class="card-header bg-danger text-white text-center">
                            Sabtu
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                FREE<br>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
<!-- schedule end -->
<!-- About me begin -->
        <section id="aboutme" class="text-center py-5 bg-warning d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="d-flex flex-column flex-sm-row align-items-center justify-content-center">
                    <img src="img/self 1.jpg" alt="Fotorafa" class="rounded-circle img-fluid" style="max-width: 200px;">
                    <div class="text-center text-sm-start ms-sm-4">
                        <p class="mb-1 fs-6 text-muted">A11.2023.15146</p>
                        <h2 class="fw-bold">Rafael Albion Savero</h2>
                        <p class="mb-1 fs-6">Program Studi Teknik Informatika</p>
                        <p class="mb-1">
                            <a href="https://www.dinus.ac.id" class=" fw-bold text-decoration-none text-muted">Universitas Dian Nuswantoro</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
<!-- about me end -->
<!--footer begin-->
<footer class="text-center p-4">
    <a href="https://www.instagram.com/svrorafael_"><i class="bi bi-instagram h2 p-2 icon-dark-mode"></i></a>
    <a href="https://x.com/svrafael_"><i class="bi bi-twitter-x h2 p-2 icon-dark-mode"></i></a>
    <a href="https://wa.me/+6282138845125"><i class="bi bi-whatsapp h2 p-2 icon-dark-mode"></i></a>
    <br>
    <div>
        Rafael Albion Savero &copy; 2024
    </div>
</footer>
<script>
    function tampilWaktu() {
        var waktu = new Date();
        var bulan = waktu.getMonth() + 1;

        setTimeout(tampilWaktu, 1000);
        document.getElementById("tanggal").innerHTML = waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
        document.getElementById("jam").innerHTML = waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu.getSeconds();
}
    window.setTimeout(tampilWaktu, 1000);

// Tombol dark/light mode untuk mengubah warna background dll
    const html = document.getElementById("htmlPage");
    const checkbox = document.getElementById("checkbox");
    const sections = document.querySelectorAll("section");
    const articleCards = document.querySelectorAll(".section-article .article-card");

checkbox.addEventListener("change", () => {
    if (checkbox.checked) {
        html.setAttribute("data-bs-theme", "dark");

// Set specific dark mode colors for each section
    sections.forEach((section, index) => {
        section.classList.remove("bg-warning", "bg-primary", "bg-light", "bg-danger-subtle", "text-dark");
        section.classList.add("text-light");

    if (index === 0) section.classList.add("bg-dark");        // Hero section
    if (index === 1) section.classList.add("bg-secondary");   // Description section
    if (index === 2) section.classList.add("bg-dark");        // Article section
    if (index === 3) section.classList.add("bg-secondary");   // Gallery section
    if (index === 4) section.classList.add("bg-dark");   // schedule section
    if (index === 5) section.classList.add("bg-secondary");   // about me
});

// Set dark mode for article cards specifically
    articleCards.forEach(card => {
        card.classList.remove("bg-light", "text-dark");
        card.classList.add("bg-secondary", "text-light");
});
    } else {
            html.setAttribute("data-bs-theme", "light");

// Reset light mode colors for each section
    sections.forEach((section, index) => {
            section.classList.remove("bg-dark", "bg-secondary","text-light");

    if (index === 0) section.classList.add("bg-warning", "text-dark"); // Hero section
    if (index === 1) section.classList.add("bg-light", "text-dark");    // Description section
    if (index === 2) section.classList.add("bg-primary", "text-dark");   // Article section
    if (index === 3) section.classList.add("bg-light", "text-dark");  // Gallery section
    if (index === 4) section.classList.add("bg-light");   // schedule section
    if (index === 5) section.classList.add("bg-warning", "text-dark");  // about me
});

// Reset light mode for article cards
    articleCards.forEach(card => {
        card.classList.remove("bg-secondary" , "text-light");
        card.classList.add("bg-light", "text-dark");
    });
}
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
