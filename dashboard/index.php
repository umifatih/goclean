<?php
   session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GoClean</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
    .promo-card {
    display: flex;
    flex-direction: column; /* Mengatur arah konten menjadi kolom */
    align-items: center; /* Memusatkan konten secara horizontal */
}

.promo-card img {
    max-width: 45%;
    height: auto;
    object-fit: cover;
    display: block; /* Memastikan gambar adalah block element */
    margin: 0 auto; /* Memusatkan gambar secara horizontal */
}

.promo-card .card-body {
    display: flex; /* Menggunakan Flexbox */
    flex-direction: column; /* Mengatur arah konten menjadi kolom */
    justify-content: center; /* Memusatkan konten secara vertikal */
    align-items: center; /* Memusatkan konten secara horizontal */
    padding: 1.5rem;
    height: 100%; /* Pastikan body memiliki tinggi agar dapat memusatkan konten vertikal */
}
    </style>
</head>

    <!-- NAVBAR -->
    <body class="bg-gray-50">
  <div class="bg-gray-100 text-center py-2 text-sm">Fresh, Clean, Ready To Wear</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <nav class="navbar navbar-expand-lg bg-white sticky-top">
    <div class="container-fluid">
      <!-- logo -->
      <a class="navbar-brand d-flex align-items-center me-9" href="index.html">
        <img src="assets/png/logo.png" 
             alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
        <div class="ms-2">
          <strong style="display: block; margin-bottom: 2px;">
              GoClean
          </strong>
        </div>
      </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#reviews">Reviews</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
            </ul>
            <!-- untuk search -->
            <form class="d-flex me-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div class="d-flex">
                <a href="keranjang" class="btn btn-outline-secondary me-2">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <a href="login" class="btn btn-outline-secondary">
                    <i class="fas fa-user"></i>
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Untuk dashboard bagian atas -->
<div id="home" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/png/pexels-kaip-996329.jpg" class="d-block w-100" alt="Laundry Image 1">
          <div class="carousel-caption d-none d-md-block">
            <h5>Wangi yang Bertahan Lama</h5>
            <p>Nikmati cucian bersih dengan aroma yang memikat sepanjang hari.</p>
          </div>
        </div>
        <div class="carousel-item active">
          <img src="assets/png/laundry 2.jpg" class="d-block w-100" alt="Laundry Image 2">
          <div class="carousel-caption d-none d-md-block">
            <h5>Pakaian Bebas Bau</h5>
            <p>Hirup kesegaran dari pakaian yang wangi dan bersih.</p>
          </div>
        </div>
        <div class="carousel-item active">
          <img src="assets/png/laundry 3.jpg" class="d-block w-100" alt="Laundry Image 3">
          <div class="carousel-caption d-none d-md-block">
            <h5>Kain Lembut dan Segar</h5>
            <p>Rasakan kelembutan dan keharuman di setiap serat kain.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- HERO -->
    <section id="hero" class="min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 data-aos="fade-left" class="text-uppercase text-white fw-semibold display-1">Selamat Datang <?= $_SESSION ["username"] ?></h1>
                    <h5 class="text-white mt-3 mb-4" data-aos="fade-right">LEAVE THE LAUNDRY TO US - YOUR CLOTHES DESERVE THE BEST</h5>
                    <div data-aos="fade-up" data-aos-delay="50">
                        <a href="#" class="btn btn-brand me-2">About Us</a>
                        <a href="#" class="btn btn-light ms-2">Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">About us</h1>
                        <div class="line"></div>
                        <p>Kami menciptakan layanan laundry yang mengutamakan kualitas, bukan sekadar janji kosong. Dengan dedikasi penuh, kami menghadirkan pengalaman terbaik untuk pelanggan.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6" data-aos="fade-down" data-aos-delay="50">
                    <img src="assets/png/logo.png" alt="">
                </div>
                <div data-aos="fade-down" data-aos-delay="150" class="col-lg-5">
                    <h1>About GoClean</h1>
                    <p class="mt-3 mb-4">Kami memberikan layanan cuci pakaian yang bersih, rapi, dan wangi, siap memanjakan Anda dengan hasil terbaik.</p>
                    <div class="d-flex pt-4 mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-mail-send-fill"></i>
                        </div>
                        <div>
                            <h5>Profesional dan Cepat</h5>
                            <p>Kami memastikan pakaian Anda dicuci dengan standar tinggi dan selesai tepat waktu.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-user-5-fill"></i>
                        </div>
                        <div>
                            <h5>Kualitas Terbaik</h5>
                            <p>Pakaian Anda diperlakukan dengan hati-hati menggunakan teknologi terkini.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="iconbox me-4">
                            <i class="ri-rocket-2-fill"></i>
                        </div>
                        <div>
                            <h5>Harga Terjangkau</h5>
                            <p>Layanan premium kami hadir dengan harga yang ramah di kantong.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- SERVICES -->
     <section id="services" class="section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Layanan Unggulan</h1>
                        <div class="line"></div>
                        <p>Kami menghadirkan pengalaman terbaik untuk memenuhi kebutuhan laundry Anda, dengan hasil yang berkualitas dan layanan penuh perhatian.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <a href="#" style="color: black;">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path d="M12 17C14.2091 17 16 15.2091 16 13H14C14 14.1046 13.1046 15 12 15 10.8954 15 10 14.1046 10 13H8C8 15.2091 9.79086 17 12 17ZM6.5 2C4.01472 2 2 4.01472 2 6.5 2 7.85729 2.60121 9.07332 3.54934 9.89751 3.19384 10.8656 3 11.911 3 13 3 17.9706 7.02944 22 12 22 16.9706 22 21 17.9706 21 13 21 11.911 20.8062 10.8656 20.4507 9.89751 21.3988 9.07332 22 7.85729 22 6.5 22 4.01472 19.9853 2 17.5 2 15.8737 2 14.4505 2.8624 13.6601 4.15297 13.1215 4.05246 12.5665 4 12 4 11.4335 4 10.8785 4.05246 10.3399 4.15297 9.5495 2.8624 8.12635 2 6.5 2ZM4 6.5C4 5.11929 5.11929 4 6.5 4 7.58033 4 8.50304 4.68577 8.8517 5.64896L9.1696 6.52718 10.0675 6.26991C10.6801 6.09435 11.3282 6 12 6 12.6718 6 13.3199 6.09435 13.9325 6.26991L14.8304 6.52718 15.1483 5.64896C15.497 4.68577 16.4197 4 17.5 4 18.8807 4 20 5.11929 20 6.5 20 7.43301 19.4894 8.24804 18.7275 8.67859L17.9141 9.13832 18.3176 9.98107C18.7547 10.8939 19 11.9169 19 13 19 16.866 15.866 20 12 20 8.13401 20 5 16.866 5 13 5 11.9169 5.24529 10.8939 5.6824 9.98107L6.08595 9.13832 5.27248 8.6786C4.51064 8.24805 4 7.43301 4 6.5Z"></path></svg>
                        </div>
                        <h5 class="mt-4 mb-3">Boneka</h5>
                        <p>Kami membersihkan boneka kesayangan Anda dengan lembut dan teliti, menjaga bentuk dan keindahannya tetap seperti baru.</p>
                    </div>
                </a>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <a href="#" style="color: black;">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-t-shirt-2-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Pakaian</h5>
                        <p>Kami mencuci dan merawat pakaian Anda dengan teknologi modern, memastikan hasil terbaik untuk setiap jenis kain.</p>
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <a href="#" style="color: black;">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-ruler-2-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Bedcover</h5>
                        <p>Nikmati tidur yang lebih nyaman dengan bedcover yang bersih, wangi, dan bebas dari noda serta kuman.</p>
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                    <a href="#" style="color: black;">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="currentColor"><path d="M4 18.0001H9.5V19.2501C9.5 20.7688 8.26878 22.0001 6.75 22.0001C5.23122 22.0001 4 20.7688 4 19.2501V18.0001ZM8 6.12067C10 6.12067 11 9.00006 11 11.0001C11 12.0001 10.5 13.0001 10 14.5001L9.5 16.0001H4C4 15.0001 3.5 13.5001 3.5 11.0001C3.5 8.50006 5.49783 6.12067 8 6.12067ZM20.054 14.0984L19.8369 15.3294C19.5732 16.8251 18.1468 17.8238 16.6511 17.5601C15.1554 17.2964 14.1567 15.87 14.4205 14.3743L14.6375 13.1433L20.054 14.0984ZM18.1776 1.70488C20.6417 2.13938 22.196 4.82954 21.7619 7.29156C21.3278 9.75358 20.5749 11.144 20.4013 12.1288L14.9848 11.1737L14.7529 9.60967C14.5209 8.04564 14.2022 6.974 14.3758 5.9892C14.7231 4.01958 16.2079 1.35759 18.1776 1.70488Z"></path></svg>
                        </div>
                        <h5 class="mt-4 mb-3">Sepatu</h5>
                        <p>Layanan cuci sepatu kami memastikan kebersihan hingga ke detail terkecil, membuat sepatu Anda kembali segar dan nyaman digunakan.</p>
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="550">
                    <a href="#" style="color: black;">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path d="M8 3C5.79086 3 4 4.79086 4 7V9.12602C2.27477 9.57006 1 11.1362 1 13C1 14.4817 1.8052 15.7734 3 16.4646V19V21H5V20H19V21H21V19V16.4646C22.1948 15.7734 23 14.4817 23 13C23 11.1362 21.7252 9.57006 20 9.12602V7C20 4.79086 18.2091 3 16 3H8ZM18 9.12602C16.2748 9.57006 15 11.1362 15 13H9C9 11.1362 7.72523 9.57006 6 9.12602V7C6 5.89543 6.89543 5 8 5H16C17.1046 5 18 5.89543 18 7V9.12602ZM9 15H15V16H17V13C17 11.8954 17.8954 11 19 11C20.1046 11 21 11.8954 21 13C21 13.8693 20.4449 14.6114 19.6668 14.8865C19.2672 15.0277 19 15.4055 19 15.8293V18H5V15.8293C5 15.4055 4.73284 15.0277 4.33325 14.8865C3.5551 14.6114 3 13.8693 3 13C3 11.8954 3.89543 11 5 11C6.10457 11 7 11.8954 7 13V16H9V15Z"></path></svg>
                        </div>
                        <h5 class="mt-4 mb-3">Sofa</h5>
                        <p>Sofa kesayangan Anda akan kembali bersih, segar, dan bebas debu dengan layanan pembersihan khusus kami.</p>
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="650">
                    <a href="#" style="color: black;">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-git-repository-private-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Kasur</h5>
                        <p>Kami menawarkan layanan pembersihan kasur untuk menjaga kebersihan, kesehatan, dan kenyamanan tidur Anda.</p>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

        <!-- Promo Section -->
        <div class="row mt-4">
            <!-- Kiloan -->
            <div class="col-md-6" data-aos="fade-down">
              <div class="promo-card">
                <img src="assets/png/kiloan.jpg" alt="Kiloan">
                <div class="card-body text-center">
                  <h5>Kiloan</h5>
                  <p>Dapatkan potongan hingga 30%</p>
                  <a href="pendaftaran/index.php" class="btn btn-dark">Pesan Sekarang</a>
                </div>
              </div>
            </div>
            <!-- Satuan -->
            <div class="col-md-6" data-aos="fade-down">
              <div class="promo-card">
                <img src="assets/png/satuab.png" alt="Satuan">
                <div class="card-body text-center">
                  <h5>Satuan</h5>
                  <p>Dapatkan potongan hingga 25%</p>
                  <a href="pendaftaran/index.php" class="btn btn-dark">Pesan Sekarang</a>
                </div>
              </div>
            </div>
          </div>
        </div>


    <!-- REVIEW -->
    <section id="reviews" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Testimonials</h1>
                        <div class="line"></div>
                        <p>Kami berkomitmen memberikan pengalaman laundry terbaik yang diakui oleh pelanggan setia kami</p>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Layanan laundry ini benar-benar luar biasa! Pakaian saya selalu kembali dalam kondisi bersih, wangi, dan terawat.</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/images/avatar-1.jpg" alt="">
                            <div class="ms-3">
                                <h5>Farah Nur Fauziyyah</h5>
                                <small>Baker</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Prosesnya cepat dan hasilnya memuaskan. Sofa saya yang penuh noda kini terlihat seperti baru lagi!</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/images/avatar-2.jpg" alt="">
                            <div class="ms-3">
                                <h5>Haruto Watanabe</h5>
                                <small>Pegawai</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Bedcover saya sekarang sangat bersih dan harum. Tidur pun jadi lebih nyenyak. Terima kasih untuk layanan hebatnya!</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/images/avatar-3.jpg" alt="">
                            <div class="ms-3">
                                <h5>Zulfika Ajrun</h5>
                                <small>Full Stack Developer</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Saya sangat merekomendasikan layanan ini. Kasur saya yang sebelumnya berdebu kini kembali nyaman digunakan.</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/images/avatar-4.jpg" alt="">
                            <div class="ms-3">
                                <h5>Alya Maura Maharani</h5>
                                <small>AI Developer</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="550">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Sangat profesional dan ramah! Sepatu favorit saya terlihat seperti baru lagi. Pasti akan kembali menggunakan layanan ini.</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/images/avatar-5.jpg" alt="">
                            <div class="ms-3">
                                <h5>Amin Triana</h5>
                                <small>Desainer</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="650">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <div class="text-warning">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>Boneka kesayangan anak saya berhasil dibersihkan dengan sangat baik. Anak saya sangat senang!</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/images/avatar-6.jpg" alt="">
                            <div class="ms-3">
                                <h5>Arion Adiwangsa</h5>
                                <small>Orang Tua</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="section-padding bg-light" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 text-white fw-semibold">Tetap Terhubung</h1>
                        <div class="line bg-white"></div>
                        <p class="text-white">Kami siap membantu memenuhi kebutuhan laundry Anda dengan layanan terbaik. Jangan ragu untuk menghubungi kami!</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" data-aos="fade-down" data-aos-delay="250">
                <div class="col-lg-8">
                    <form action="#" class="row g-3 p-lg-5 p-4 bg-white theme-shadow">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" placeholder="Nama Depan">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" placeholder="Nama Belakang">
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" class="form-control" placeholder="Judul">
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea name="message" rows="5" class="form-control" placeholder="Pesan"></textarea>
                        </div>
                        <div class="form-group col-lg-12 d-grid">
                            <button class="btn btn-brand">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-dark">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-3 col-sm-6">
                        <a href="#"><img src="" alt=""></a>
                        <div class="line"></div>
                        <p>Laundry berkualitas untuk style terbaik anda setiap hari!</p>
                        <div class="social-icons">
                            <a href="#"><i class="ri-instagram-fill"></i></a>
                            <a href="#"><i class="ri-github-fill"></i></a>
                            <a href="#"><i class="ri-linkedin-box-fill"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">SERVICES</h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="#services">Cuci Kilat</a></li>
                            <li><a href="#services">Cuci Kiloan</a></li>
                            <li><a href="#services">Sepatu</a></li>
                            <li><a href="#services">Boneka</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">ABOUT</h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="#about">Blog</a></li>
                            <li><a href="#about">Services</a></li>
                            <li><a href="#about">Akun</a></li>
                            <li><a href="#reviews">Testimonials</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">CONTACT</h5>
                        <div class="line"></div>
                        <ul>
                            <li>Purbalingga, IDN 5321</li>
                            <li>(+62) 856 0177 8422</li>
                            <li>234110601047@mhs.uinsaizu.ac.id</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">© Copyright GoClean. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>