<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoClean</title>

    <!-- box icons  -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- styles  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

    <!-- NAVBAR -->
    <body class="bg-gray-50">
        <div class="bg-gray-100 text-center py-2 text-sm">Fresh, Clean, Ready To Wear</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <nav class="navbar navbar-expand-lg bg-white sticky-top">
          <div class="container-fluid">
            <!-- logo -->
            <a class="navbar-brand d-flex align-items-center me-9" href="index.html">
              <img src="../assets/img/logo.png" 
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
                      <a class="nav-link" href="../dashboard/index.php">Home</a>
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
                      <a class="btn btn-outline-secondary me-2">
                        <i class='fas fa-shopping-cart' class="btn btn-outline-secondary me-2" id="cart-icon"></i>

                        <!-- CART  -->
                        <div class="cart">
                            <h2 class="cart-title">Your Cart</h2>
                
                            <!-- CONTENT  -->
                            <div class="cart-content">
                
                
                            </div>
                
                            <!-- TOTAL   -->
                            <div class="total">
                                <div class="total-title">Total</div>
                                <div class="total-price">$0</div>
                            </div>
                            <!-- BUY BUTTON  -->
                            <button type="button" class="btn-buy">Buy Now</button>
                            <!-- CART CLOSE  -->
                            <i class='bx bx-x' id="cart-close"></i>
                        </div>
                      </a>
                      
                      <a href="login" class="btn btn-outline-secondary">
                          <i class="fas fa-user"></i>
                      </a>
                  </div>
              </div>
          </div>
      </nav>


        <!-- CART  -->
        <div class="cart">
            <h2 class="cart-title">Your Cart</h2>

            <!-- CONTENT  -->
            <div class="cart-content">


            </div>

            <!-- TOTAL   -->
            <div class="total">
                <div class="total-title">Total</div>
                <div class="total-price">$0</div>
            </div>
            <!-- BUY BUTTON  -->
            <button type="button" class="btn-buy">Buy Now</button>
            <!-- CART CLOSE  -->
            <i class='bx bx-x' id="cart-close"></i>
        </div>
    </div>

      


    <!-- SHOP SECTION  -->;
    <section class="shop container">
        <h2 class="section-title">Shop Products</h2>

        <!-- CONTENT  -->
        <div class="shop-content">
            <!-- BOX 1 -->
            <div class="product-box">
                <img src="assets/img/product1.jpg" alt="" class="product-img">
                <h2 class="product-title">Nike Shoes</h2>
                <span class="product-price">$79.5</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- BOX 2 -->
            <div class="product-box">
                <img src="assets/img/product2.jpg" alt="" class="product-img">
                <h2 class="product-title">BACKPACK</h2>
                <span class="product-price">$59.5</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- BOX 3 -->
            <div class="product-box">
                <img src="assets/img/product3.jpg" alt="" class="product-img">
                <h2 class="product-title">METAL BOTTLE</h2>
                <span class="product-price">$29.5</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- BOX 4 -->
            <div class="product-box">
                <img src="assets/img/product4.jpg" alt="" class="product-img">
                <h2 class="product-title">METAL SUNGLASSES</h2>
                <span class="product-price">$105</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- BOX 5 -->
            <div class="product-box">
                <img src="assets/img/product5.jpg" alt="" class="product-img">
                <h2 class="product-title">PS5 Controller</h2>
                <span class="product-price">$95</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- BOX 6 -->
            <div class="product-box">
                <img src="assets/img/product6.jpg" alt="" class="product-img">
                <h2 class="product-title">Galaxy Z Fold</h2>
                <span class="product-price">$1400</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- BOX 7 -->
            <div class="product-box">
                <img src="assets/img/product7.jpg" alt="" class="product-img">
                <h2 class="product-title">Nokon Camera</h2>
                <span class="product-price">$1700</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- BOX 8 -->
            <div class="product-box">
                <img src="assets/img/product8.jpg" alt="" class="product-img">
                <h2 class="product-title">Apple Watch</h2>
                <span class="product-price">$110.5</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        </div>
    </section>

    <!-- link js  -->
    <script src="assets/js/main.js"></script>
</body>

</html>