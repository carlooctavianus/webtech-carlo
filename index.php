<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="aset/css/bootstrap.min.css">
    <link rel="stylesheet" href="aset/css/styling2.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <title>Marc</title>
  </head>
  <body>

 <div class="fixed-top">
  <!-- COLLAPSE CONTENT -->
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-ducati p-4">
      <h5 class="text-white h4">Menu</h5>
      <div class="nav flex-column">
        <a class="nav-link ducati-link" href="#season-stats">This Season</a>
        <a class="nav-link ducati-link" href="#career">Career</a>
        <a class="nav-link ducati-link" href="#gallery">Gallery</a>
        <a class="nav-link ducati-link" href="#main-partner">Main Partner</a>
      </div>
    </div>
  </div>

  <!-- NAVBAR -->
  <nav class="navbar navbar-ducati">
    <a class="navbar-brand" href="#">
      <img src="aset/img/logo.png" width="68" height="45" alt="Logo">
    </a>
    <div class="mx-auto navbar-marques-center d-none d-lg-block">
    <img src="aset/img/wuuu.png" alt="Marques">
  </div>

    <button class="navbar-toggler" type="button"
      data-toggle="collapse" data-target="#navbarToggleExternalContent"
      aria-controls="navbarToggleExternalContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>

<section class="hero-video position-relative">
  <video autoplay muted loop playsinline class="w-100" style="object-fit: cover; height: 100vh;">
      <source src="aset/img/video.mp4" type="video/mp4">
  </video>
  <div class="hero-content text-center">
    <!-- TARUH DI SINI: Baris h6 di bawah ini adalah tempat teks mengetik muncul -->
    <h6 id="welcome-msg" class="marc-dramatic-text mb-2"></h6> 
    
    <h1 class="display-4 font-weight-bold">More than a Comeback</h1>
    <p class="lead">9-Time World Champion</p>
    
    <a href="#news-latest" id="discover-btn" class="btn marc-discover-btn">Discover More</a>
  </div>
</section>

<section class="news-section" id="news-latest">
    <div class="news-grid">
    <?php
    include "koneksi.php"; // Pastikan variabel koneksi Anda sudah benar ($conn atau $koneksi)
    
    // Ambil data dari tabel news
    $query = mysqli_query($conn, "SELECT * FROM news ORDER BY id DESC");
    
    // Looping data untuk menampilkan card
    while($data = mysqli_fetch_array($query)) {
    ?>
        <a href="<?php echo $data['link']; ?>" target="_blank" class="news-link">
            <div class="news-card">
                <img src="<?php echo $data['gambar']; ?>" class="news-img">
                <div class="news-body">
                    <h3><?php echo $data['judul']; ?></h3>
                    <p class="news-meta"><i class="far fa-clock"></i> <?php echo $data['waktu']; ?></p>
                </div>
            </div>
        </a>
    <?php 
    } 
    ?>
</div>

    
<section class="news-bg-panel">
  <div class="overlay"></div>
</section>
</section>

<div class="section-divider"></div>


<section class="marc-history py-5" id="history">
  <div class="container-xl marc-box">

      <h2 class="marc-title text-center mb-5">MARC HISTORY</h2>

      <div class="row g-4">

        <?php
    // 1. Sertakan file koneksi
    include 'koneksi.php';

    // 2. Ambil data dari tabel layanan
    $kueri = "SELECT * FROM layanan";
    $result = $conn->query($kueri);

    // 3. Tampilkan data berulang-ulang
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            ?>
            
            <!-- Awal Kartu Dinamis -->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="mh-card">
                <img src="<?php echo $row['gambar']; ?>" alt=""> 
                <h4><?php echo $row["judul"]; ?> >></h4>
              </div>
            </div>
            <!-- Akhir Kartu Dinamis -->

            <?php
        }
    } else {
        echo "<h5 class='text-white mx-auto'>Belum ada data di database.</h5>";
    }
    ?>
      </div>
  </div>
</section>

<section class="marc-season-full" id="season-stats">
  <div class="container-xl marc-season-container">

    <!-- TEXT & STATS -->
    <div class="season-left">
      <h2 class="season-title">THIS SEASON — 2025</h2>

      <div class="stats-wrapper">

        <div class="stat-card">
          <h3 style="color: #E10600; font-weight: 900;" id="stat-points">545</h3>
          <div class="stat-label">Points</div>
        </div>

        <div class="stat-card">
          <h3 style="color: #ccc; font-weight: 900;" id="stat-wins">11</h3>
          <div class="stat-label">Grand Prix Wins</div>
        </div>

        <div class="stat-card">
          <div class="stat-value">14</div>
          <div class="stat-label">Sprint Wins</div>
        </div>

        <div class="stat-card">
          <h3 style="color: #E10600; font-weight: 900;" id="stat-podiums">25</h3>
          <div class="stat-label">Podiums</div>
        </div>

      </div>

      <!-- BIODATA -->
      <table class="season-table mt-4">
        <tr><th>Nation</th><td><img src="aset/img/OIP.webp" class="flag"> Spain</td></tr>
        <tr><th>Team</th><td>Ducati Lenovo Team</td></tr>
        <tr><th>Bike</th><td>Ducati</td></tr>
        <tr><th>Date of birth</th><td>17/02/1993 (32 yrs)</td></tr>
        <tr><th>Place of birth</th><td>Cervera, Spain</td></tr>
      </table>
    </div>

    <h4 class="text-white mt-5 mb-3" style="text-align: left; font-weight: 600;"> </h4>
<div style="height: 300px; background: rgba(0,0,0,0.2); padding: 10px; border-radius: 12px; border: 1px solid rgba(225, 6, 0, 0.2);">
    <canvas id="p1Chart"></canvas> 
</div>

    <!-- IMAGE -->
    <div class="season-right">
      <img src="aset/img/jws78ATZ.webp" alt="Marc Márquez" class="marc-photo">
    </div>

  </div>
</section>




<section class="biography-section" id="career">
  <div class="bio-container">
    
    <div class="bio-photo">
      <img src="aset/img/2025-01-21_MGP25-Team-Launch-R93-gallery-mosaic-442x600_04.jpg" alt="Marc Marquez">
    </div>

    <div class="bio-text">
      <h2 class="bio-title">Biography & Career Highlights</h2>
      <p class="bio-description">
        Marc Márquez, dikenal sebagai <strong>The Ant of Cervera</strong>,
        adalah rider paling dominan dalam sejarah modern MotoGP. 
        Lahir pada <strong>17 Februari 1993 di Cervera, Spanyol</strong>, 
        Márquez memulai karier Grand Prix tahun 2008 dan langsung menarik perhatian 
        lewat gaya balap agresif, kontrol fisik ekstrem, serta 
        kemampuan overtaking yang ikonik.
        Dengan filosofi <strong>"Win or Crash"</strong>, ia menjadi fenomena 
        yang mengubah standar kecepatan dan keberanian di MotoGP.
      </p>

      <ul class="career-list">
        <li>🏆 9x World Champion (7 MotoGP + 1 Moto2 + 1 125cc)</li>
        <li>💥 Rekor juara dunia termuda kelas MotoGP (2013)</li>
        <li>🔥 85+ kemenangan Grand Prix sepanjang karier</li>
        <li>⚡ 140+ podium & 90+ pole positions</li>
        <li>🐜 Julukan resmi: The Ant of Cervera</li>
      </ul>
    </div>

  </div>
</section>




<section class="gallery-section" id="gallery">
  <h2 class="gallery-title">GALLERY</h2>

  <div id="carouselGallery" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2800">
    <div class="carousel-inner">

      <!-- 10 FOTO -->
      <div class="carousel-item active">
        <img src="aset/img/MARC2.jpg" class="gallery-img" alt="">
      </div>
      <div class="carousel-item">
        <img src="aset/img/marc3.jpg" class="gallery-img" alt="">
      </div>
      <div class="carousel-item">
        <img src="aset/img/marckiw.jpg" class="gallery-img" alt="">
      </div>
      <div class="carousel-item">
        <img src="aset/img/marc5.jpg" class="gallery-img" alt="">
      </div>
      <div class="carousel-item">
        <img src="aset/img/marc10.webp" class="gallery-img" alt="">
      </div>
      <div class="carousel-item">
        <img src="aset/img/marc11.jpeg" class="gallery-img" alt="">
      </div>
      <div class="carousel-item">
        <img src="aset/img/marc12.webp" class="gallery-img" alt="">
      </div>
      <div class="carousel-item">
        <img src="aset/img/marc15.jpg" class="gallery-img" alt="">
      </div>
      <div class="carousel-item">
        <img src="aset/img/marc20.jfif" class="gallery-img" alt="">
      </div>
      <div class="carousel-item">
        <img src="aset/img/marc21.jfif" class="gallery-img" alt="">
      </div>

    </div>

    <button class="carousel-control-prev" type="button" data-target="#carouselGallery" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselGallery" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>

  </div>
</section>


<section class="contact-section py-5" id="main-partner">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="contact-title">CONTACT THE TEAM</h2>
            <p class="contact-subtitle">Get in touch with Marc's management for partnerships or inquiries.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <!-- Tambahkan action dan method saja -->
                <!-- Cukup tambahkan action dan method pada tag form Anda -->
<form id="contactForm" form action="kontak.php" method="POST" class="marquez-form">
    
    <div class="form-row">
        <div class="form-group col-md-6">
            <!-- Tambahkan name="nama" -->
            <input type="text" name="nama" class="form-control marquez-input" id="inputName" placeholder="Nama Lengkap Anda (required)" required>
        </div>
        
        <div class="form-group col-md-6">
            <!-- Tambahkan name="email" -->
            <input type="email" name="email" class="form-control marquez-input" id="inputEmail" placeholder="Alamat Email (required)" required>
        </div>
    </div>

    <div class="form-group">
        <!-- PERBAIKAN PENTING: Ganti area-name menjadi name="pesan" -->
        <textarea name="pesan" class="form-control marquez-input message-box" id="inputMessage" rows="5" placeholder="Pesan Anda untuk Marc atau Tim (required)" required></textarea>
    </div>

    <div class="text-center mt-4">
        <!-- Pastikan type="submit" agar form benar-benar terkirim -->
        <button type="submit" class="btn btn-primary marquez-btn">KIRIM PESAN</button>
    </div>
</form>
        </div>
    </div>
</section>




<section class="partner-section py-5">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center flex-wrap" id="partnerLogos">
            
            <a href="https://www.insta360.com/" target="_blank" class="partner-logo mx-4 my-2 logo-dark">
                <img src="aset/img/insta360.png" alt="Insta360" class="img-fluid">
            </a>

            <a href="https://www.insta360.com/" target="_blank" class="partner-logo mx-4 my-2">
                <img src="aset/img/galicia.png" alt="Estrella Galicia" class="img-fluid">
            </a>
            
            <a href="https://www.ducati.com/us/en/racing/ducati-corse" target="_blank" class="partner-logo mx-4 my-2">
                <img src="aset/img/ducati.png" alt="Ducati" class="img-fluid">
            </a>
            
            <a href="https://www.lenovo.com/id/id/pc/?orgRef=https%253A%252F%252Fwww.google.com%252F&srsltid=AfmBOorHfLusjFBv6U73Fld8wHHfaJrxOcfRnoqcmMp8s61knBsIANdg" target="_blank" class="partner-logo mx-4 my-2">
                <img src="aset/img/lenovo.png" alt="Lenovo" class="img-fluid">
            </a>
            
            <a href="https://shoei-helmets.com/" target="_blank" class="partner-logo mx-4 my-2">
                <img src="aset/img/shoei.png" alt="Shoei" class="img-fluid">
            </a>
            
        </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-md-8 mx-auto partner-info">
                <p><strong>Insta360</strong> 
                <p><strong>Estrella Galicia</strong> 
                <p><strong>Ducati</strong> 
                <p><strong>Lenovo</strong> 
                <p><strong>Shoei</strong> 
            </div>
        </div>
</section>


<script src="aset/js/jquery.js"></script> 
<script src="aset/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 


<script>
    document.addEventListener("DOMContentLoaded", function () {

    /* ========== SMOOTH SCROLL FUNCTION ========== */
    function smoothScroll(target) {
        const section = document.querySelector(target);
        if (!section) return;

        const headerOffset = 90;
        const position = section.getBoundingClientRect().top + window.scrollY - headerOffset;

        window.scrollTo({ top: position, behavior: "smooth" });
    }

    /* ========== NAV-LINK SMOOTH SCROLL (HANYA UNTUK MENU) ========== */
// Tambahkan .nav-link agar tidak mencegat tombol form
$('.nav-link[href^="#"], .ducati-link[href^="#"]').on('click', function (event) {
    const target = $(this).attr('href');
    if (target && target !== "#") {
        event.preventDefault();
        smoothScroll(target);
    }
});
/* Ganti blok kode tombol discover Anda dengan ini */
document.querySelector(".marc-discover-btn").addEventListener("click", function(e) {
    e.preventDefault();
    smoothScroll("#news-latest");
});


    /* ========== ACTIVE MENU ON SCROLL ========== */
    const sections = document.querySelectorAll("section[id]");
    const setActive = (id) => {
        document.querySelectorAll(".ducati-link").forEach(el => el.classList.remove("active"));
        const activeEl = document.querySelector(`.ducati-link[href="${id}"]`);
        if (activeEl) activeEl.classList.add("active");
    };

    window.addEventListener("scroll", function () {
        const scrollPos = window.scrollY + 120;
        sections.forEach(section => {
            if (scrollPos >= section.offsetTop && scrollPos < section.offsetTop + section.offsetHeight) {
                setActive("#" + section.getAttribute("id"));
            }
        });
    });

    /* ========== AUTO CLOSE NAVBAR COLLAPSE ========== */
    $(".ducati-link").on("click", function () {
        if ($(".navbar-toggler").is(":visible")) $(".navbar-toggler").click();
    });

    /* ========== SUBMIT ALERT ========== */
    /* ========== SUBMIT ALERT ========== */
const form = document.querySelector(".marquez-form");
if (form) {
    form.addEventListener("submit", function (e) {
        // HAPUS e.preventDefault() agar data tetap dikirim ke kontak.php
        alert("Pesan Anda berhasil dikirim — tim Marc Márquez akan segera meninjau 👍");
        // Jangan di-reset di sini, biarkan PHP yang handle setelah sukses
    });
}

    const navLinks = document.querySelectorAll(".nav-link");

navLinks.forEach(link => {
    link.addEventListener("click", function() {
        navLinks.forEach(l => l.classList.remove("active")); // hapus active lainnya
        this.classList.add("active"); // klik = aktif
    });
});


/* ============================================================
       2. FITUR BARU: TYPING EFFECT (PESAN SAMBUTAN)
       ============================================================ */
    const text = "The Ant of Cervera is Back.";
    let index = 0;
    function typeEffect() {
        const welcomeMsg = document.getElementById("welcome-msg");
        if (welcomeMsg && index < text.length) {
            welcomeMsg.innerHTML += text.charAt(index);
            index++;
            setTimeout(typeEffect, 100);
        }
    }
    typeEffect(); // Jalankan efek mengetik

    /* ============================================================
       3. FITUR BARU: SCROLL REVEAL (ELEMEN MUNCUL PERLAHAN)
       ============================================================ */
    const observerOptions = { threshold: 0.1 };
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('reveal-visible');
            }
        });
    }, observerOptions);

    // Ambil semua kartu untuk diberikan efek
    document.querySelectorAll('.news-card, .mh-card, .stat-card').forEach(el => {
        el.classList.add('reveal-hidden'); // Beri kelas awal
        observer.observe(el);
    });


    /* ============================================================
       4. FITUR BARU: DYNAMIC NAVBAR (GLASSMORPHISM)
       ============================================================ */
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar-ducati');
        if (window.scrollY > 50) {
            navbar.style.backgroundColor = "rgba(0, 0, 0, 0.9)";
            navbar.style.boxShadow = "0 4px 15px rgba(0,0,0,0.5)";
        } else {
            navbar.style.backgroundColor = "rgba(0, 0, 0, 0.7)";
            navbar.style.boxShadow = "none";
        }
    });

    /* ========== CHART JS (REAL-TIME P1 PERFORMANCE) ========== */
function drawP1Chart() {
    const ctx = document.getElementById('p1Chart');
    if (!ctx) return;

    // 1. INI STYLE ASLI ANDA YANG KEREN (KEMBALI DIPASANG)
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September'],
            datasets: [{
                label: 'Victories Grand Prix',
                data: [], // Biarkan kosong, diisi otomatis
                backgroundColor: 'rgba(225, 6, 0, 0.2)',
                borderColor: '#E10600',
                borderWidth: 3,
                tension: 0.4,
                fill: true,
                pointRadius: 5,
                pointBackgroundColor: '#ffffff'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                title: {
                    display: true,
                    text: 'Performance Trend: Grand Prix P1 Finishes (2025)',
                    color: '#ffffff',
                    font: { size: 14 }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    max: 5, // Batas maksimal angka di kiri kembali jadi 5
                    ticks: { color: '#ccc', stepSize: 1 },
                    grid: { color: 'rgba(255, 255, 255, 0.1)' } // Grid transparan kembali
                },
                x: {
                    ticks: { color: '#ccc' },
                    grid: { color: 'rgba(255, 255, 255, 0.1)' }
                }
            }
        }
    });

    // 2. INI MESIN KALKULATOR YANG SUDAH TERBUKTI JALAN
    function updateGrafik() {
        fetch('ambil_data.php?nocache=' + new Date().getTime())
        .then(response => response.json())
        .then(data => {
            // A. Update Garis
            myChart.data.datasets[0].data = data;
            myChart.update();

            // B. Matematika
            let totalP1 = data.reduce((a, b) => parseInt(a) + parseInt(b), 0);
            
            let basePoints = 56; 
            let basePodiums = 3; 

            let liveWins = totalP1;
            let livePoints = basePoints + (totalP1 * 25);
            let livePodiums = basePodiums + totalP1;

            // C. Tembak ke Kotak HTML
            let boxWins = document.getElementById('stat-wins');
            if (boxWins) {
                boxWins.innerText = liveWins;
                document.getElementById('stat-points').innerText = livePoints;
                document.getElementById('stat-podiums').innerText = livePodiums;
            }
        })
        .catch(error => console.log('System Error:', error));
    }

    updateGrafik();
    setInterval(updateGrafik, 2000);
}

// Jalankan sistem
drawP1Chart();

    
});

</script>
  </body>
</html>
