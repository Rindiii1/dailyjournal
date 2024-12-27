<?php
include "koneksi.php"; 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Journal</title>
    <link rel="icon" href="https://april-ns.notion.site/image/https%3A%2F%2Fprod-files-secure.s3.us-west-2.amazonaws.com%2F332d3749-1e40-47dd-9041-59670fa067ee%2F92786fe7-1022-485c-a5a0-210603788a58%2Flogo.png?table=block&id=4c9bbd35-3032-49da-9623-4ef8df2066cf&spaceId=332d3749-1e40-47dd-9041-59670fa067ee&width=140&userId=&cache=v2">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            transition: background-color 0.3s, color 0.3s;
        }
        .light-mode {
            background-color: white;
            color: black;
        }
        .dark-mode {
            background-color: #31363f;
            color: white;
        }
        .dark-mode .navbar, .dark-mode .footer, .dark-mode section, .dark-mode .card {
            background-color: #424854 !important;
            color: white !important;
        }
        .theme-button {
            margin-left: 10px;
            padding: 10px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        .theme-button i {
            margin-right: 5px;
        }
        
    </style>
</head>

<body class="light-mode">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">MYDrakor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#Article">Article</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#Schedule">Schedule</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#About me">About me</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" target="_blank">Login</a>
                      </li>


                </ul>
                <button id="themeToggleBtn" class="btn btn-dark ms-2"><i class="bi bi-moon-fill"></i> Toggle Dark Mode</button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="text-center p-5  text-sm-start" style="background-color: #76abae;">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-row align-items-center">
                    <div class="flex-grow-1">
                        <h1 class="fw-bold display-4">Rekomendasi Drama Korea Rating Tertinggi</h1>
                        <h4 class="lead display-6">Drama ini menarik minat jutaan penonton di seluruh dunia</h4>
                        <h6><span id="tanggal"></span> <span id="jam"></span></h6>
                    </div>
                    <div>
                        <img src="https://akcdn.detik.net.id/community/media/visual/2023/06/20/reply-1988-2015doktvn.jpeg?w=620&q=90" class="img-fluid" width="300" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Article Section -->
   <!-- article begin -->
<section id="Article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
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
    <!-- Gallery Section -->
    <section id="gallery" class="text-center p-5" style="background-color: #76abae;"> <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://wallpaperaccess.com/full/762895.jpg" class="d-block mx-auto w-75" alt="Scenic Wallpaper">
                    </div>
                    <div class="carousel-item">
                        <img src="https://wallpaperaccess.com/full/762885.jpg" class="d-block mx-auto w-75" alt="Forest Wallpaper">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

       <!-- Schedule Section -->
       <section id="Schedule" class="container mt-5">
        <h1 class="fw-bold display-4 pb-3">Schedule</h1>
       <div class="row align-items-stretch">
        <div class="row align-items-stretch">
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-danger text-white text-center">SENIN</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Etika Profesi <br> 16.20-18.00 | H4.4</li>
                        <li class="list-group-item">Sistem Operasi <br> 18.30-21.00 | H4.8</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-danger text-white text-center">SELASA</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Pendidikan Kewarganegaraan <br> 12.30-13.10 | Kulino</li>
                        <li class="list-group-item">Probabilitas dan Statistik <br> 15.30-18.00 | H4.9</li>
                        <li class="list-group-item">Kecerdasan Buatan <br> 18.30-21.00 | H4.11</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-danger text-white text-center">RABU</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Manajemen Proyek Teknologi Informasi <br> 15.30-18.00 | H4.6</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-danger text-white text-center">KAMIS</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Pemrograman Web <br> 09.00-11.30 | H4.7</li>
                        <li class="list-group-item">Jaringan Komputer <br> 13.00-15.30 | H4.5</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-stretch">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
              <div class="card-header bg-danger text-white text-center">JUMAT</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Pemrograman Web Lanjut <br> 10.20-12.00 | D2.K</li>
              </ul>
            </div>
          </div>
          
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <div class="card-header bg-danger text-white text-center">SABTU</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">FREE</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    



       <!-- about me -->
       <section id="About me" class="text-center py-5 text-sm-start" style="background-color: #f8d7da;">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-3 text-center">    
                    <!-- Gambar Profil dengan Tautan -->
                        <img src="https://media.licdn.com/dms/image/v2/D4D03AQGV-uaosqAjeQ/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1721915438895?e=1736380800&v=beta&t=d6s6ZxmCAJ-_v8rAlq18rr-lsO0KIztva6CaLGQcu_o" class="img-fluid rounded-circle" width="500" alt="Gambar Profil" id="profile-picture">
                </div>
                <div class="col-md-6" id="profile-info">
                    <!-- Informasi Profil -->
                    <p class="text-muted mb-0">A11.2023.15250</p>
                    <h2 class="fw-bold">Rindi Fadilah</h2>
                    <p class="mb-1">Program Studi Teknik Informatika</p>
                    <a href="https://dinus.ac.id/" target="_blank">
                    <p class="fw-bold text-dark">Universitas Dian Nuswantoro</p>
                </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="text-center p-5">
        <div>
            <a href="https://www.instagram.com/rindiiiiiii1?igsh=dm5ja3BvZ3J4aG1i"><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
            <a href="https://x.com/RindiFadil64807"><i class="bi bi-twitter-x h2 p-2 text-dark"></i></a>
            <a href="https://wa.me/+6285713956462"><i class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
        </div>
        <div>RindiFadilah &copy; 2024</div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript for Theme Switcher -->
    <script type="text/javascript">
        document.getElementById('themeToggleBtn').addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            const icon = this.querySelector('i');
            if (document.body.classList.contains('dark-mode')) {
                icon.classList.replace('bi-moon-fill', 'bi-sun-fill');
                this.classList.replace('btn-dark', 'btn-light');
                this.innerHTML = '<i class="bi bi-sun-fill"></i> Light Mode';
            } else {
                icon.classList.replace('bi-sun-fill', 'bi-moon-fill');
                this.classList.replace('btn-light', 'btn-dark');
                this.innerHTML = '<i class="bi bi-moon-fill"></i> Dark Mode';
            }
        });

        // Display current time
        function tampilWaktu() {
            var waktu = new Date();
            document.getElementById("tanggal").innerHTML = `${waktu.getDate()}/${waktu.getFullYear()}`;
            document.getElementById("jam").innerHTML = waktu.toLocaleTimeString('en-GB');
            setTimeout(tampilWaktu, 1000);
        }
        tampilWaktu();


        const profilePicture = document.getElementById('profile-picture');
        const profileInfo = document.getElementById('profile-info');

        profilePicture.addEventListener('click', () => {
            if (profileInfo.style. display === 'none' || profileInfo.style.display === '') {
                profileInfo.style.display = 'block';
            } else {
                profileInfo.style.display = 'none';
            }
        });
    </script>
</body>
</html>
